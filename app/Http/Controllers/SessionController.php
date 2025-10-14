<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // public function create(){
    //     return view("users.userlogin");
    // }

    public function store(){
        $validator = validator(request()->all(), [
        "email" => ["required", "email"],
        "password" => "required",
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator, 'login')
                     ->withInput();
        }

        if (!Auth::attempt(array_merge($validator->validated(), ['is_active' => 1]))) {
            return back()->withErrors(['message' => 'Invalid credentials or account not active'], 'login')
                ->withInput();
        }

        request()->session()->regenerate();

        return redirect("/dashboard");
    }

    public function destroy(){
        Auth::logout();
        return redirect("/");
    }  
}