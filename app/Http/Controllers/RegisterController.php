<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('pages.Register');
    }

    public function store(Request $request){
        //TODO konekin ke blade
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'role_id' => 'required|min:1|max:2',
            'gender_id' => 'required|min:1|max:2',
            'address' => 'required|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        User::create($validatedData);
    }
}
