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
            return redirect('/#login')->withErrors($validator, 'login');
            // return redirect(url()->previous() . '#login')->withErrors($validator, 'login');
            // return back()->withErrors($validator, 'login')
            //          ->withInput();
        }

        if (!Auth::attempt(array_merge($validator->validated(), ['is_active' => 1]))) {
             return redirect('/#login')->withErrors(['email' => 'Invalid credentials or account not active'], 'login')
                ->withInput();
        }

        request()->session()->regenerate();

        $user = Auth::user();

        switch($user->role){
            case 'admin':
                return redirect()->intended('/admin/dashboard');
            case 'freelancer':
                return redirect()->intended('/freelancer/dashboard');
            case 'guest':
                return redirect()->intended('/guest/dashboard');
            case 'user':
            default:return redirect()->intended('/user/dashboard');
        }

        return redirect("/dashboard");
    }

    public function destroy(){
        Auth::logout();
        return redirect("/");
    }  
}