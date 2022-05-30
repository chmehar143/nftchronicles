<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Nfts;

class TwitterCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twitter:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this commend is used to run and get twitter follower';

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
        $nfts = Nfts::whereNotNull('twitter_link')->get();
        foreach ($nfts as $nft){
            $twitter = explode('/',$nft->twitter_link);
            $tw_username = end($twitter);
            $data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=' . $tw_username);
            $parsed = json_decode($data, true);
            if(!empty($parsed[0]['followers_count'])){
                $nftt = Nfts::find($nft->id);
                $nftt->update([
                    'twitter_follower'=> $parsed[0]['followers_count']
                ]);
                $nftt->save();
            }
        }
        return $this->info('record update successfully');
    }
}
