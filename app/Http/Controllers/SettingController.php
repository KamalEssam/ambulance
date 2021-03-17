<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function setting()
    {

        $setting = setting();
        return view('admin.setting',compact('setting'));
    }

    public function SettingSubmit(Request $request){

        $setting = Setting::where('status','active')->first();

        $setting->app_name = $request->name;
        $setting->address = $request->address;
        $setting->app_description = $request->description;
        $setting->tagline = $request->tagline;
        $setting->meta_title = $request->meta_title;
        $setting->meta_description = $request->meta_description;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->status = 'active';
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->linkedin = $request->linkedin;
        $setting->youtube = $request->youtube;
        $setting->instagram = $request->instagram;
        $setting->pinterest = $request->pinterest;
        $setting->save();

        return back()->withSuccess('Setting updated successfully!');
    }
}
