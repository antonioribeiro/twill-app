<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CheckAppKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'key:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if your app key is present, and create if it isn\'t.';

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
     * @return mixed
     */
    public function handle()
    {
        if (blank(config('app.key')))
        {
            $this->info('App key is not present. Generating...');

            Artisan::call('key:generate');
        } else {
            $this->info('All good. Your app key is present.');
        }
    }
}
