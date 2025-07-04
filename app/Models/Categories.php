<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name',
        'slug_url',
        'category_description',
        'created_at',
        'updated_at'
    ];
}
