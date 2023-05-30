<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }

    public function loginPost(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            $user=Auth::user();
            Auth::login($user, $request->get('remember'));
            toastr()->success('Giriş Başarılı - '.Auth::user()->name);
            return redirect()->route('admin.dashboard',$user);
            
        }
        return redirect()->route('admin.login')->withErrors('E-Posta veya Şifre Hatalıdır!'); 
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
