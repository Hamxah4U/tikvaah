<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function store(Request $request){

        //$attributes = $request->validate
        $attribute = validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => ['required','email','unique:users,email'],
            'phone' => 'required|string|max:15',
            'gender_id' => ['required'],
            'password' => 'required|string|min:4|confirmed',
        ]);


        if($attribute->fails()){
            return redirect(url()->previous() . '#user')->withErrors($attribute, 'register')->withInput();
        }

        $data = $attribute->validated();

        User::create($data);

        return redirect(url()->previous() . '#user')->with('success', 'User registered successfully!');
    }
}
