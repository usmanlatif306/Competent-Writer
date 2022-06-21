<?php

namespace App\Http\Controllers;

use App\AdditionalService;
use App\Enums\CartType;
use App\Message;
use App\Order;
use App\Service;
use App\Services\ApiOrderService;
use App\Services\ApiWriterService;
use App\Services\CartService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;

class WriterController extends Controller
{

    public function index(Order $order, ApiWriterService $writerService, ApiOrderService $apiOrder)
    {

        if (auth()->user()->id != $order->customer_id) {
            abort(404);
        }
        $order->load('service', 'work_level');

        // $writers = User::withCount(['completed_orders'])->whereHas('tags', function ($query) use ($order) {
        //     $query->where('name', $order->subject);
        // })->where('role_id', 2)->get()->map(function ($user) {
        //     return [
        //         'id' => $user->id,
        //         'api_user_id' => $user->api_user_id,
        //         'name' => $user->full_name,
        //         'email' => $user->email,
        //         'profile_image' => url('/') . '/storage/' . $user->photo,
        //         'percentage' => $user->percentage,
        //         'digit' => $user->digit,
        //         'completed_orders' => $user->completed_orders_count,
        //     ];
        // });

        $writers = collect($writerService->fetchWriters($order->subject));

        return view('writer.choose', compact('order', 'writers'));
    }

    // select writer
    public function select(Order $order, Request $request, CartService $cart, ApiWriterService $writerService)
    {
        $total = 0;
        // if user has select 'choose best option for me"
        if (!isset($request->staff_id)) {
            // $writers = User::with(['ratings_received'])->whereHas('tags', function ($query) use ($order) {
            //     $query->where('name', $order->subject);
            // })->where('role_id', 2)->get();
            $writers = collect($writerService->fetchWriters($order->subject));
            $staff = $writers->first();
            foreach ($writers  as $writer) {
                if ($writer['ratings_received'] > $staff['ratings_received']) {
                    $staff = $writer;
                }
            }
            $total = round(($staff['percentage'] / 100) * (int)$order->total, 2) + $order->total;
            // $order->title = $request->number;
            // $order->staff_id = $staff->id;

            $writer = User::where('api_user_id', $staff['id'])->select(['id', 'api_user_id'])->first();
            $order->title = $request->number;
            $order->staff_id = $writer->id;
            $order->api_user_id = $writer->api_user_id;
        } else {
            // if user has select a writer
            $writer = User::where('api_user_id', $request->staff_id)->select(['id', 'api_user_id'])->first();
            $order->title = $request->number;
            $order->staff_id = $writer->id;
            $order->api_user_id = $writer->api_user_id;
            // $order->staff_id = $request->staff_id;
            $total = $request->price;
        }
        $order->type = 'api';
        $order->total = $total;
        $order->staff_payment_amount = $total;
        $order->save();


        $changes = $order->getChanges();

        // if (isset($changes['staff_id']) && $order->staff_id) {
        //     // Dispatching Event
        //     event(new TaskAssignedEvent(auth()->user(), $order));
        // }

        $cart->setCart([
            'order_id' => $order->id,
            'order_number' => $order->number,
            'cart_total' => $total
        ], CartType::NewOrder);

        if ($request->wantsJson()) {
            return response([
                'error' => false,
                'redirect_url' => route('choose_payment_method')
            ]);
        }
        return redirect()->route('choose_payment_method');
    }

    // all writers
    public function writers()
    {
        // $guarantees = User::where('role_id', 2);

        return view('setup.bid.index');
    }

    public function datatable(Request $request)
    {
        $guarantees = User::where('role_id', 2);


        return Datatables::eloquent($guarantees)->editColumn('name', function ($guarantee) {

            return '<a href="' . route('show_writer_bid', $guarantee->id) . '">' . $guarantee->first_name . " " . $guarantee->last_name . '</a>';
        })
            ->editColumn('percentage_to_add', function ($guarantee) {
                return $guarantee->percentage . '%';
            })

            ->rawColumns([
                'name',
                'percentage_to_add',

            ])
            ->make(true);
    }

    public function show(User $user)
    {
        return view('setup.bid.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user->percentage = $request->percentage;
        $user->save();
        return redirect()->back()->with('message', 'Updated the bid percentage');
    }

    // Messages Functions

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages(Request $request)
    {
        $user = Auth::user();
        $messages = Message::where('user_id', $user->id)
            ->orWhere('receiver_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get()->map(function ($message) {
                return [
                    'id' => $message->id,
                    'user_id' => $message->user_id,
                    'receiver_id' => $message->receiver_id,
                    'type' => $message->type,
                    'message' => $message->type === 'text' ? $message->message : url('/') . '/storage/' . $message->message,
                    'file_name' => $message->file_name,
                    'created_at' => $message->created_at->format('H:m:s'),
                    'status' => $message->status,
                ];
            });
        return $messages;
        // return MessageResource::collection($messages);
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $image_types = ['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'];
        $file_types = ['xlsx', 'xls', 'doc', 'docx', 'ppt', 'pptx', 'txt', 'pdf', 'zip', 'rar'];

        $type = 'text';
        $file_name = NULL;
        $message = $request->message ?? '';

        // if message has file
        if ($request->has('file')) {
            $file_name = $request->file->getClientOriginalName();
            $extension = $request->file->getClientOriginalExtension();
            $attachment = Storage::putFile('public/files', $request->file('file'));
            $message = str_replace("public/", "", $attachment);
            if (in_array($extension, $image_types)) {
                $type = 'image';
            } else {
                $type = 'file';
            }
        }

        // return response([
        //     'type' => $type
        // ]);
        $message = $user->messages()->create([
            'receiver_id' => $request->receiverId,
            'type' => $type,
            'message' => $message,
            'file_name' => $file_name,
            'status' => false,
        ]);
        return $message;
    }

    // changing status of message in db
    public function messageStatus(Request $request)
    {
        foreach ($request->data as $message) {
            Message::find($message['id'])->update(['status' => true]);
        }
        return response([
            'message' => 'status changed'
        ]);
    }
}
