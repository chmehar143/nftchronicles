<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstagramCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This commend is used to run and get instagram follower';

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
        return 0;
    }
}
