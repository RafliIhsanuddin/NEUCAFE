<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\outlet;

class SessionController extends Controller
{
    //
    // function halog(){
    //     return view("login");
    // }

    // function halsig(){
    //     return view("signup");
    // }


    function login2(Request $req){
        $outlet = outlet::all();

        if($outlet->implode('email')==$req->email && $outlet->implode('password')==$req->password){
            return 'sukses';
        } else {
            return redirect('login');
        }
    }

    function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if (Auth::attempt($infologin)){
            return 'sukses';
        } else {
            return 'gagal';
        }
    }


}
