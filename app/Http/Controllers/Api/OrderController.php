<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use App\Events\TaskSelfAssignedEvent;
use App\Events\TaskAssignedEvent;
use App\Events\StartedWorkingEvent;
use App\Events\WorkSubmittedEvent;
use App\SubmittedWork;
use App\Events\NewCommentEvent;
use App\Services\ApiOrderService;

class OrderController extends Controller
{
    public function status(Request $request)
    {
        $status = $request->status;

        // findind order and changing status
        $order = Order::find($request->order_id);
        $order->order_status_id = $status;
        $order->save();

        // dispatching events based on status

        // if status is ORDER_STATUS_IN_PROGRESS
        if ($status === ORDER_STATUS_IN_PROGRESS) {
            event(new StartedWorkingEvent($order));
        } elseif ($status === ORDER_STATUS_SUBMITTED_FOR_APPROVAL) {
            // if status is ORDER_STATUS_SUBMITTED_FOR_APPROVAL
            $request['user_id'] = $order->staff_id;
            $request['order_id'] = $order->id;
            $submittedWork = SubmittedWork::create($request->all());
            // Dispatching Event
            event(new WorkSubmittedEvent($submittedWork));
        } else {
            return response()->json([
                'error' => false,
                'message' => 'No action'
            ]);
        }

        return response()->json([
            'error' => false,
            'message' => 'action is taken'
        ]);
    }

    // storing comments
    public function comments(Request $request)
    {
        // findind order
        $order = Order::find($request->order_id);

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->attachment = $request->attachment;
        $comment->display_name = $request->display_name;
        $comment->type = $request->type;
        $comment->user_id = $request->user_id;
        $order->comments()->save($comment);

        event(new NewCommentEvent($comment));

        return $comment;
    }

    public function order(ApiOrderService $service)
    {
        $order = Order::first();
        $response = $service->createOrder($order);
        return response()->json([
            'data' => $response
        ]);
    }
}
