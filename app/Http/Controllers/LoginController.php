<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.login');
    }
    
    public function authenticate(Request $request){

        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        //TODO masih ga jelas auth

        // dd(Auth::attempt($credentials    ));

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back();
    }
}
