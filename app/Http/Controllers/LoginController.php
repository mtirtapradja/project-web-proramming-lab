<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if (Cookie::get('remember_me')) {
            $cookieValue = Cookie::get('remember_me');
            $credentials = json_decode($cookieValue, true);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }

        return view('pages.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $cookie = null;

        /**
         * Kalo remember me di check bikin cookies
         */
        if ($request->rememberMe) {
            $credentials_array = json_encode($credentials);
            $cookie = cookie('remember_me', $credentials_array, 300);
        }

        if (Auth::attempt($credentials) && $cookie !== null) {
            $request->session()->regenerate();
            return redirect()->intended('/')->cookie($cookie);
        } else if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
