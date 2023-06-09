<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\outlet;
use App\Models\akun;

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
        $akun = akun::all();

        foreach($akun as $out){
            if($out->email == $req->email){
                if($out->password == $req->password){
                    session()->put('id',$out->id_akun);
                    $id = session('id');
                    $data = akun::where('id_akun','=',$id)->get();
                    $outlet = outlet::where('id_outlet','=',$id)->get();
                    return view('informasi',['datas'=>$data,'outlets'=>$outlet]);
                    // echo session('id');
                }else {
                    return redirect('login');
                }
            }
        }

    }


    public function lockses(){        
        $data = array(            
            'id' => "posts",            
            'posts' => akun::all()        
            );        
        return view('posts.informasi')->with($data);    
    }


    public function show($id){
        return outlet::find($id);
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
