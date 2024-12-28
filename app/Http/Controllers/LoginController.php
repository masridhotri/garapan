<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(){
        return view('login');    
    }

    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
        return redirect('/home');
        }
        return redirect('login');
    }

    public function regis(){
        return view('regis');    
    }

    public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/master');
            
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

// public function login(Request $request){
//     dd($request->all());
// }