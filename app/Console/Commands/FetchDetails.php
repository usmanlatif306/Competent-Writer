<?php

namespace App\Console\Commands;

use App\Services\ApiService;
use App\Services\ApiWriterService;
use Illuminate\Console\Command;

class FetchDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'call:services';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will call api request that will fetch writers and other services from api server and save data in database';

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
    public function handle(ApiService $apiService, ApiWriterService $writerService)
    {
        $services = $apiService->saveServices();
        $writers = $writerService->apiWriters();

        if ($services && $writers) {
            $this->info('Data saved successfully');
        } else {
            $this->error('Something went wrong!');
        }
    }
}
