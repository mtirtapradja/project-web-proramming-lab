<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Contracts\Validation\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns'],
            'gender_id' => ['required', 'in:1,2'],
            'address' => ['required', 'max:255'],
            'password' => ['required', 'min:5', 'max:255', 'confirmed']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        if ($request->agree) {
            User::create($validatedData);
            return redirect()->intended('/login')->with('success', 'You are registered, please login!');
        } else {
            return back()->with('loginError', 'Login failed! You need to agree check the terms & condition');
        }
    }
}
