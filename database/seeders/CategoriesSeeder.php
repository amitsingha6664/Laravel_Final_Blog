<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        Categories::insert([
            [
                'category_name' => 'Technology',
                'slug_url' => 'tech',
                'category_description' => 'All about technology',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Health',
                'slug_url' => 'health',
                'category_description' => 'Health tips and guides',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Travel',
                'slug_url' => 'travel',
                'category_description' => 'Explore travel destinations',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Education',
                'slug_url' => 'education',
                'category_description' => 'education',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_name' => 'Busness',
                'slug_url' => 'busness',
                'category_description' => 'busness',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

