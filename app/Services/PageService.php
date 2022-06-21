<?php

namespace App\Services;

use App\Choice;
use App\Service;
use App\Faq;
use App\Order;
use App\Quality;
use App\Rating;
use App\Subject;
use App\Tag;
use App\User;
use App\HomeWorkPage;
use App\OnlineClassPage;
use App\OnlineExamPage;

class PageService
{
    private $seoService;
    function __construct(SeoService $seoService)
    {
        $this->seoService = $seoService;
    }

    public function calculatorData($props)
    {
        $this->seoService->load($props);
        $data = Order::dropdown('home');
        $data['title'] = 'Let\'s get started on your project!';

        $data['services'] = [];
        $services = Service::all();
        $data['subjects'] = Tag::orderBy('name')->get();
        // if ($services->count() > 0) {
        //     if ($services->count() > 4) {
        //         $data['services'] = array_chunk($services->toArray(), ceil($services->count() / 4));
        //     } else {
        //         $data['services'] = [$services->toArray()];
        //     }
        // }
        $services = Service::with(['subCategories'])->whereNull('inactive')->get();
        $service_arr = [];
        foreach ($services  as $key => $service) {
            $newItem = [];
            $newItem['category'] = $service->name;
            if ($service->subCategories && count($service->subCategories) > 0) {
                $sub_categories = $service->subCategories;
                foreach ($sub_categories as $val => $item) {
                    $item["parent"] = 0;
                    $item["service_id"] = $service->id;
                    $newItem['subcategory'][] = $item;
                }
            } else {
                $newItem['subcategory'][] = $service;
            }
            $service_arr[] = $newItem;
        }
        $data['service_id_list'] = $service_arr;

        $data['faqs'] = Faq::where('page', $props)->get();

        $ratings = Rating::select(['id', 'number', 'comment', 'user_id'])->with(['user:id,first_name,last_name'])->where(function ($query) {
            $query->where('number', '>=', 4);
        })->limit(10)->get()->toArray();

        $data['ratings'] = array_chunk($ratings, 2);

        $writers_all = User::select(['id', 'first_name', 'last_name', 'photo'])->with(['ratings_received'])->withCount(['ratings_received'])->where('role_id', 2)->orderBy('ratings_received_count', 'desc')->get();
        $writers = [];
        // has('completed_orders')->

        foreach ($writers_all  as $writer) {
            $writers[] =  $writer;
            // if ($writer->ratings_received->avg('number') >= 4) {
            //     $writers[] =  $writer;
            // }
        }
        $data['writers'] = array_chunk($writers, 3);
        return $data;
    }

    // fetching all subcategory pages

    public function pages()
    {
        $pages = [];
        $pages['class'] = OnlineClassPage::select(['name', 'slug'])->get();
        $pages['exam'] = OnlineExamPage::select(['name', 'slug'])->get();
        $pages['homework'] = HomeWorkPage::select(['name', 'slug'])->get();

        return $pages;
    }
}
