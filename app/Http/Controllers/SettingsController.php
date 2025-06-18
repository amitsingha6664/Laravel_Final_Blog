<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;  /* Connected Models Table  */
use App\Models\Post;  /* Connected Models Table  */
use App\Models\Categories;  /* Connected Models Table  */


class SettingsController extends Controller
{
    public function Profile_View(){
        return view('Backend.ProfileView');
    }

    public function General_Settings_View(){
        return view('Settings.GeneralSettingsView');
    }

    public function Appearance_Settings_View(){
        return view('Settings.AppearanceSettingsView');
    }

    public function SEO_Settings_View(){
        return view('Settings.SEOSettingsView');
    }

    public function Social_Media_Settings_View(){
        return view('Settings.SocialMediaSettingsView');
    }

    public function Email_Settings_View(){
        return view('Settings.EmailSettingsView');
    }

    public function Advanced_Settings_View(){
        return view('Settings.AdvancedSettingsView');
    }
}
