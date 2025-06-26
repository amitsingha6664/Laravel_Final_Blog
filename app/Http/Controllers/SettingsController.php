<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;  /* Connected Models Table  */
use App\Models\Post;  /* Connected Models Table  */
use App\Models\Categories;  /* Connected Models Table  */
use App\Models\Setting;  


class SettingsController extends Controller
{
    public function Profile_View(){
        return view('Backend.ProfileView');
    }

    public function Settings_View(){
        return view('Backend.SettingsView');
    }

    public function Settings_Edit_View(){
        $Setting_Data = Setting::first();
        return view('Backend.SettingsEditView', compact('Setting_Data'));
    }

    public function Site_Information_Update(Request $request){
        $Setting = Setting::first();
        if(!$Setting){
            return redirect()->back()
                             ->with('error', 'No Data Found!');
        }

        $Setting->site_name = $request->site_name;
        $Setting->site_tagline = $request->site_tagline;
        if($Setting->update()){
            return redirect()->back()
                             ->with('success', 'Site Settings Update Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'Site Settings Update Failed!');
        }
    }

    public function Social_Media_Update(Request $request){
        $Setting = Setting::first();
        if(!$Setting){
            return redirect()->back()->with('error', 'No Data Found!');
        }
        $Setting->facebook_url = $request->facebook;
        $Setting->twitter_url = $request->twitter;
        $Setting->instagram_url = $request->instagram;
        $Setting->linkedIn_url = $request->linkedin;
        $Setting->youtube_url = $request->youtube;
        if($Setting->update()){
            return redirect()->back()
                             ->with('success', 'Social Media Update Successfuly!');
        }
        else{
            return redirect()->back()
                             ->with('error', 'Social Media Update Failed!');
        }
    }
}
