<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::insert([
            'site_name' => 'My Website',
            'site_tagline' => 'Best Site Ever',
            'site_logo' => 'asset("Assets/img/logo.png")',
            'favicon' => 'asset("Assets/img/favicon.png")',
            'facebook_url' => 'https://facebook.com/mywebsite',
            'twitter_url' => 'https://twitter.com/mywebsite',
            'instagram_url' => 'https://instagram.com/mywebsite',
            'linkedIn_url' => 'https://linkedin.com/company/mywebsite',
            'youtube_url' => 'https://youtube.com/mywebsite',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
