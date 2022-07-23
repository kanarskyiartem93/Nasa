<?php

namespace App\Console\Commands;

use App\Service\NasaService;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ParseDataFromNasa extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:nasa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get data from the last 3 days from nasa api and save in database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(NasaService $service)
    {
        $service->handle(Carbon::now()->subDays(2), Carbon::now());
    }
}
