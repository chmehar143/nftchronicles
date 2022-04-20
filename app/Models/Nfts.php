<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nfts extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path','contact_name','contact_email','nft_name','nft_description','pre_sale_price','public_sale_price','public_sale_date','pre_sale_date','supply','blockchain','marketplace','marketplace_url','discord_link','twitter_link','website','source','traits_count','contract','instagram_link','category','insert_side','status'
    ];
}
