<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    public function register(registerRequest $request){
        $user = User::create($request->validated());
    }
}
