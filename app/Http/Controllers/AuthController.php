<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register
    function showRegister(){
        return view('perusahaan.register');
    }
    function submitRegister(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login');
    }

    // Login
    function showLogin(){
        return view('perusahaan.login');
    }
    function submitLogin(Request $request){
        $data = $request->only('email','password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('divisi.show');
        } else {
            return redirect()->back()->with('gagal','Email Atau Password Anda Salah !');
        }
    }

    // Logout
    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
