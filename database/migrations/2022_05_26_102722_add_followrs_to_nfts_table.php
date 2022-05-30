<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFollowrsToNftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nfts', function (Blueprint $table) {
            $table->decimal('twitter_follower', 7,2)->default(0);
            $table->decimal('instagram_follower', 7,2)->default(0);
            $table->decimal('discord_follower', 7,2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nfts', function (Blueprint $table) {
            //
        });
    }
}
