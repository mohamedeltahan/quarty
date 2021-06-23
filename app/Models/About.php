<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
   
    protected $fillable=["arabic_address","english_address","phones","facebook_link","instagram_link","twitter_link","youtube_link","linkedin_link"];

    

}
