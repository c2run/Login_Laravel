<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }
    public function register(registerRequest $request){
        $user = User::create($request->validated());
        return redirect('login')->with('sucess', 'Cuenta creada correctamente');
    }
}
