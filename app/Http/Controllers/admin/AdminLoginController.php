<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function authenticate(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->passes()){

            if(Auth::guard('admin')->attempt([
                'email' => $request->email,
                'password' => $request->password
                ],$request->get('remember'))){
                 
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->route('admin.login')->with('error','Either Email/Password is incorrect');
                }
        }else{
            return redirect()->route('admin.login')
            ->withErrors($validator)
            ->withInput($request->only('email'));
        }
    }

   public function adminlogout(Request $request){

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('admin.login')
        ->with('success','You have logged out successfully!');
   }

}
