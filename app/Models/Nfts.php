<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nfts extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path','contact_name','contact_email','nft_name','nft_description','pre_sale_price','public_sale_price','public_sale_date','pre_sale_date','supply','blockchain','marketplace','marketplace_url','discord_link','twitter_link','website','source','traits_count','contract','instagram_link','category','insert_side','status','show_home_page','show_feature_post','twitter_follower','instagram_follower','discord_follower','is_sponsored_post','most_view_nft'
    ];

    public  function category($category)
    {
        if($category == '1') { return $response = 'art';}
        if($category == '2') { return $response = 'auction';}
        if($category == '3') { return $response =  'charity';}
        if($category == '4') { return $response = 'collaboration'; }
        if($category == '5') { return $response ='collectible'; }
        if($category == '6') { return $response ='dao'; }
        if($category == '7') { return $response ='defi';}
        if($category == '8') { return $response ='game';}
        if($category == '9') { return $response ='generative';}
        if($category == '10') { return $response ='giveaway';}
        if($category == '11') { return $response ='metaverse';}
        if($category == '12') { return $response ='music';}
        if($category == '13') { return $response ='photo';}
        if($category == '14') { return $response ='rewards';}
        if($category == '15') { return $response ='sports';}
        if($category == '16') { return $response ='video';}
    }
}
