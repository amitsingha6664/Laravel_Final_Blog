<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'site_tagline',
        'site_logo',
        'favicon',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedIn_url',
        'youtube_url',
    ];
}