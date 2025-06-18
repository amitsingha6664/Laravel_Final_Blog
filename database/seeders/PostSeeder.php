<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'post_title' => 'Laravel Seeder Tutorial',
                'post_category' => 1,
                'slug_url' => Str::slug('Laravel Seeder Tutorial') . '-' . uniqid(),
                'status' => 'published',
                'author_id' => 1,
                'post_description' => 'This post explains how to use Laravel seeders.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_title' => 'PHP Basics',
                'post_category' => 1,
                'slug_url' => Str::slug('PHP Basics') . '-' . uniqid(),
                'status' => 'draft',
                'author_id' => 1,
                'post_description' => 'A beginner guide to PHP programming.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_title' => 'Getting Started with Bootstrap',
                'post_category' => 1,
                'slug_url' => Str::slug('Getting Started with Bootstrap') . '-' . uniqid(),
                'status' => 'pending',
                'author_id' => 1,
                'post_description' => 'This post helps you get started with Bootstrap framework.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
