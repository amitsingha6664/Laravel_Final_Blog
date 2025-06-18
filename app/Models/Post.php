<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'post_title',
        'post_category',
        'slug_url',
        'status',
        'author_id',
        'img',
        'post_description',
        'created_at',
        'updated_at '
    ];
}
