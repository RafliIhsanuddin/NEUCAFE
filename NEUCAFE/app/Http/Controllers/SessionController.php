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
                    $req->session()->put('id',$out->id_akun);
                    $id = session('id');
                    $data = akun::where('id_akun','=',$id)->get();
                    $outlet = outlet::where('id_akun','=',$id)->get();
                    session()->put('datas', $data);
                    // session(['datas' => $data]);
                    // session(['outlets' => $outlet]);
                    // session()->put('datas', $data);
                    session()->put('outlets', $outlet);
                    // return post('informasi',['datas'=>$data,'outlets'=>$outlet]);
                    return view('choose');



                    // if($outlet->isNotEmpty()){
                    //     return view('informasi',['datas'=>$data,'outlets'=>$outlet]);
                    // }else{

                    // }
                    
                    // echo session('id');
                }else {
                    return redirect('login');
                }
            }
        }

    }






    public function flushSession(Request $request)
    {
        $request->session()->flush();

        return view('login');
    }


    function log($id){
        $data = akun::where('id_akun','=',$id)->get();
        $outlet = outlet::where('id_akun','=',$id)->get();
        return view('informasi',['datas'=>$data,'outlets'=>$outlet]);
    }




    function upatas(Request $req){
        $akun = akun::where('id_akun', '=', $req->id)->first();
        $outlet = outlet::where('id_akun', '=', $req->id)->first();

        $outlet->nama = $req->nama;
        $akun->email = $req->email;
        $akun->noTelp = $req->telp;
        $outlet->alamat = $req->alamat;

        $akun->save();
        $outlet->save();

        $data = akun::where('id_akun','=',$req->id)->get();
        $outle = outlet::where('id_akun','=',$req->id)->get();

        session()->put('datas', $data);
        session()->put('outlets', $outle);

        


        return view('informasi');
        
    }

    function logout(){
        $request->session()->flush();
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

    public function masukdata(Request $req){
        $akun = new akun;
        $akun->email = $req->email;
        $akun->password = $req->pass;
        $akun->notelp = $req->notelp;
        $akun->kodeManajer = $req->kode;
        if($req->pass == $req->konfir){
            $akun->save();
            return view('login');
        }else{
            return redirect('signup');
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
