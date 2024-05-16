<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $totalTestimonial = Testimonial::count();
        $totalServices = Service::count();

    // Pass the total count to the view
    return view('admin.dashboard', compact('totalServices','totalTestimonial'));
    }

    public function changepassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id); 
        return view('admin.auth.changepassword',compact('profileData'));
    }

    public function updatepassword(Request $request){
          
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed', 
        ]);
          

        if (!Hash::check($request->current_password, auth::user()->password)) {
          return back()->with('error','old passowrd does not match');
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
          return back()->with('success','Password change successfully!!');           
    }
    public function showsetting(){
        return view('admin.showsetting');
    }
}
