<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SystemSettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();  
        return view('admin.showsetting', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = $request->all();  
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->with('success','System Setting Updated!!');  
    }
}
