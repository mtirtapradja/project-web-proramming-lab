<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Home'
        ]);
    }

    public function login()
    {
        return view('pages.login', [
            'title' => 'Login'
        ]);
    }

    public function register()
    {
        return view('pages.register', [
            'title' => 'Register'
        ]);
    }
}
