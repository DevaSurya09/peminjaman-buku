<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $request){
        // Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email wajib di isi',
            'password.required'=>'password wajib di isi',
        ]);

        $infoLogin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            // return 'sukses';
            return redirect('/');
        } else{
            // return 'gagal';
            return redirect('login')->withErrors('emain dan password tidak valid');
        }
    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
