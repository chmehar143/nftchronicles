<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path','title','description','instagram_link','twitter_link','website_link','twitter_follower','instagram_follower'];
}
