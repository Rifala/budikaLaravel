<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(){
        return view('login');
    }

    public function loginprocces(Request $request){
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validasi)){
            $request->session()->regenerate();
            return redirect('/ikan');
        }

        return \redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return \redirect('login');
    }
}
