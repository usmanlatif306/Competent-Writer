<?php

namespace App\Services;

use App\AdditionalService;
use App\Guarantee;
use App\Service;
use App\SubCategory;
use App\Tag;
use App\Urgency;
use App\User;
use App\WorkLevel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class ApiService
{
    // fetch all servics from api and storing
    public function saveServices()
    {
        $url = env('API_URL') . 'services';
        $response = Http::withOptions(['verify' => false])->post($url);
        $response = $response->json();
        $data = $response['data'];

        // if response has error then stop
        if ($response['error']) {
            return false;
        }

        // guarentees
        foreach ($data['guarantees'] as $item) {
            Guarantee::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'name' => $item['name'],
                    'percentage_to_add' => $item['percentage_to_add'],
                    'inactive' => $item['inactive'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }
        // services
        foreach ($data['services'] as $item) {
            Service::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'name' => $item['name'],
                    'price_type_id' => $item['price_type_id'],
                    'price' => $item['price'],
                    'single_spacing_price' => $item['single_spacing_price'],
                    'double_spacing_price' => $item['double_spacing_price'],
                    'inactive' => $item['inactive'],
                    'parent' => $item['parent'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }
        // sub_categories
        foreach ($data['sub_categories'] as $item) {
            SubCategory::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'name' => $item['name'],
                    'price_type_id' => $item['price_type_id'],
                    'price' => $item['price'],
                    'single_spacing_price' => $item['single_spacing_price'],
                    'double_spacing_price' => $item['double_spacing_price'],
                    'inactive' => $item['inactive'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }
        // tags
        foreach ($data['tags'] as $item) {
            Tag::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'name' => $item['name'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }
        // work_levels
        foreach ($data['work_levels'] as $item) {
            WorkLevel::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'name' => $item['name'],
                    'percentage_to_add' => $item['percentage_to_add'],
                    'inactive' => $item['inactive'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }
        // urgencies
        foreach ($data['urgencies'] as $item) {
            Urgency::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'type' => $item['type'],
                    'value' => $item['value'],
                    'percentage_to_add' => $item['percentage_to_add'],
                    'inactive' => $item['inactive'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }
        // additional_services
        foreach ($data['additional_services'] as $item) {
            AdditionalService::updateOrCreate(
                [
                    'api_id' => $item['id']
                ],
                [
                    'type' => $item['type'],
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'rate' => $item['rate'],
                    'inactive' => $item['inactive'],
                    'api_id' => $item['id'],
                    'origin' => 'api',
                ]
            );
        }

        // service_tag_additional_services
        foreach ($data['service_tag_additional_services'] as $item) {

            $service_id = Service::where('api_id', $item['service_id'])->first()->id;
            $additional_service_id = AdditionalService::where('api_id', $item['additional_service_id'])->first()->id;

            // findind service if already present or not
            $service =  DB::table('service_tag_additional_services')->where('service_id', $service_id)->where('additional_service_id', $additional_service_id)->first();
            if (!$service) {
                $item['service_id'] = $service_id;
                $item['additional_service_id'] = $additional_service_id;
                DB::table('service_tag_additional_services')->insert($item);
            }
        }
        // // service_tag_sub_categories
        foreach ($data['service_tag_sub_categories'] as $item) {
            $service_id = Service::where('api_id', $item['service_id'])->first()->id;
            $sub_category_id = SubCategory::where('api_id', $item['sub_category_id'])->first()->id;

            $service = DB::table('service_tag_sub_categories')->where(['service_id' => $service_id, 'sub_category_id' => $sub_category_id])->first();

            if (!$service) {
                $item['service_id'] = $service_id;
                $item['sub_category_id'] = $sub_category_id;
                DB::table('service_tag_sub_categories')->insert($item);
            }
        }

        return true;
    }
}
