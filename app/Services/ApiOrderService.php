<?php

namespace App\Services;

use App\AdditionalService;
use App\Service;
use App\Urgency;
use App\WorkLevel;
use Illuminate\Support\Facades\Http;


class ApiOrderService
{
    public function createOrder($order)
    {
        $service_id = Service::select(['id', 'api_id'])->find($order->service_id)->api_id;
        $work_level_id = WorkLevel::select(['id', 'api_id'])->find($order->work_level_id)->api_id;
        $urgency_id = Urgency::select(['id', 'api_id'])->find($order->urgency_id)->api_id;
        $added_services = [];
        foreach ($order->added_services as $service) {
            $added_services[] = AdditionalService::where(['name' => $service->name, 'type' => $service->type])->first()->api_id;
        }

        $url = env('API_URL') . 'order/create';
        $response = Http::post($url, [
            "title" => $order->title,
            "instruction" => $order->instruction,
            "guarantee" => $order->guarantee,
            "sub_category" => $order->sub_category,
            "customer_id" => env('API_USER_ID'),
            "service_id" => $service_id,
            "work_level_id" => $work_level_id,
            "urgency_id" => $urgency_id,
            "dead_line" => $order->dead_line,
            "unit_name" => $order->unit_name,
            "base_price" => $order->base_price,
            "work_level_price" => $order->work_level_price,
            "urgency_price" => $order->urgency_price,
            "unit_price" => $order->unit_price,
            "quantity" => $order->quantity,
            "amount" => $order->amount,
            "sub_total" => $order->sub_total,
            "discount" => $order->discount,
            "total" => $order->total,
            "staff_payment_amount" => $order->staff_payment_amount,
            "spacing_type" => $order->spacing_type,
            "work_level_percentage" => $order->work_level_percentage,
            "urgency_percentage" => $order->urgency_percentage,
            // "staff_id" => $order->staff_id,
            "staff_id" => $order->api_user_id,
            "order_status_id" => $order->order_status_id,
            "subject" => $order->subject,
            'invoiced' => $order->invoiced,
            'api_user_id' => $order->customer_id,
            'api_order_id' => $order->id,
            'added_services' => $added_services,
            'attachments' => $order->attachments
        ]);
        // now()->format('Y-m-d H:i:s')
        $response = $response->json();
        if ($response['error']) {
            return false;
        }
        return true;
    }

    // changing order status
    public function changeOrderStatus($data)
    {
        $url = env('API_URL') . 'order/status';
        $response = Http::post($url, $data);
        $response = $response->json();
        return $response;
    }

    // posting comment
    public function comment($data)
    {
        $url = env('API_URL') . 'order/comment';
        $response = Http::post($url, $data);
        $response = $response->json();
        return $response;
    }

    // giving rating
    public function rating($data)
    {
        $url = env('API_URL') . 'order/rating';
        $response = Http::post($url, $data);
        $response = $response->json();
        return $response;
    }
}
