<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nfts', function (Blueprint $table) {
            $table->id();
            $table->string('file_path')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('nft_name')->nullable();
            $table->text('nft_description')->nullable();
            $table->double('pre_sale_price', 15, 8)->nullable();
            $table->double('public_sale_price', 15, 8)->nullable();
            $table->date('pre_sale_date')->nullable();
            $table->date('public_sale_date')->nullable();
            $table->string('supply')->nullable();
            $table->string('blockchain')->nullable();
            $table->string('marketplace')->nullable();
            $table->string('marketplace_url')->nullable();
            $table->string('discord_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('website')->nullable();
            $table->string('source')->nullable();
            $table->string('traits_count')->nullable();
            $table->string('contract')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('category')->nullable();
            $table->string('insert_side')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nfts');
    }
}
