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
        //TODO konekin ke blade
        $credentials = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('');
        }

        //TODO Middleware?
        return back();
    }
}
