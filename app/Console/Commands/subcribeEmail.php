<?php

namespace App\Console\Commands;

use App\Models\News;
use App\Models\Newsletter;
use App\Models\Nfts;
use App\Models\User;
use Illuminate\Console\Command;

class subcribeEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command is use for send email to subscribe user';

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
        $subs = Newsletter::where('status', 1)->get();
        $articles = News::where('active', 1)->orderBy('id', 'DESC')->take(4)->get();
        $nfts = Nfts::where('status', 0)->orderBy('pre_sale_date', 'DESC')->take(4)->get();
        foreach ($subs as $sub) {
            \Mail::to($sub->email)->send(new \App\Mail\ArticleMail($articles,$nfts));
        }
        return $this->info('record update successfully');
    }
}
