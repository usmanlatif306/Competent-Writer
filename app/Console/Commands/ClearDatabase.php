<?php

namespace App\Console\Commands;

use App\AdditionalService;
use App\Order;
use App\Service;
use App\SubCategory;
use App\Urgency;
use App\WorkLevel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ClearDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'services:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will delete all orders, services, guarantees, work_levels, sub_categories, additional services and urgencies from database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // orders
        $orders = Order::get(['id']);
        foreach ($orders as  $order) {
            $order->attachments()->delete();
            $order->comments()->delete();
            $order->added_services()->delete();
            $order->rating()->delete();
            $order->submitted_works()->delete();
            $order->forceDelete();
        }

        // services
        DB::table('service_tag_sub_categories')->truncate();
        DB::table('service_tag_additional_services')->truncate();
        $services = Service::get(['id']);
        foreach ($services as  $service) {
            $service->forceDelete();
        }
        // sub_categories
        $sub_categories = SubCategory::get(['id']);
        foreach ($sub_categories as  $service) {
            $service->forceDelete();
        }

        // urgencies
        $urgencies = Urgency::get('id');
        foreach ($urgencies as  $service) {
            $service->forceDelete();
        }

        // work_levels
        $work_levels = WorkLevel::get('id');
        foreach ($work_levels as  $service) {
            $service->forceDelete();
        }
        // additional_services
        $additional_services = AdditionalService::get('id');
        foreach ($additional_services as  $service) {
            $service->forceDelete();
        }

        $this->info('Database Clear Successfully!');
    }
}
