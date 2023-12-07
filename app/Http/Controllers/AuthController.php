<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public $superUserExist=false;

    public function login(Request $request){

            return view('auth.login');
        

    }

    public function attemptLogin(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

       if(Auth::attempt($credentials)){

        return redirect('home');

        // return view('welcome');

       }

       else{
        return redirect()->route('login');
       }


    }

    public function logout(Request $request){
        $request->session()->invalidate();
        Auth::logout();
        return redirect('login');
    }
}
