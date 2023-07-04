<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        foreach ($akun as $out) {
            if ($out->email == $req->email && $out->password == $req->password) {
                $req->session()->put('id', $out->id_akun);
                $id = session('id');
                $data = akun::where('id_akun', $id)->first();
                $outlet = outlet::where('id_akun', $id)->first();
    
                if ($outlet) {
                    session()->put('datas', $data);
                    session()->put('outlets', $outlet);
                    return view('choose');
                } else {
                    return view('infoOutlet');
                }
            }
        }
    
        return redirect('login')->with('eror', 'email atau password salah');

    }


    public function konfir(Request $req){
        $id = session('id');
        $akun = akun::all();

        foreach($akun as $out){
            if($out->kodeManajer == $req->konfirKode){
                return view('informasi');
            }else{
                return redirect('kodem')->with('eror','KODE manajer yang anda masukkan salah');
            }
        }
        
    }


    public function outletper(Request $req){
        $id = session('id');
        $outlet = new outlet;
        $outlet->nama = $req->namaout;
        $outlet->alamat = $req->alout;
        $outlet->id_akun = $req->idout;
        $outlet->save();
        if($outlet->save()){
            $outlet = outlet::where('id_akun','=',$id)->get();
            $data = akun::where('id_akun','=',$id)->get();
            session()->put('datas', $data);
            session()->put('outlets', $outlet);
            return view('informasi');  
        }
    }



    


    public function tanggal()
    {
        $query = DB::table('transaksi')
            ->selectRaw('MONTH(waktu_order) as month, COUNT(*) as count')
            ->groupBy(DB::raw('MONTH(waktu_order)'))
            ->orderBy(DB::raw('MONTH(waktu_order)'));

        // Execute the query and assign the result to a variable
        $results = $query->get();

        // Process the results or pass them to the view
        // For example, you can return them as JSON
        return view('dashboard', ['results' => $results]);
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
        $akun = akun::where('id_akun', '=', $req->idbar)->first();
        $outlet = outlet::where('id_akun', '=', $req->idbar)->first();

        
        if ($outlet) {
            $outlet->nama = $req->nama;
            $outlet->alamat = $req->alamat;
            $outlet->save();
        } else {
            
            // Handle the case when no outlet is found
            // You can throw an exception, show an error message, or take appropriate action.
        }

        if ($akun) {
            $akun->email = $req->email;
            $akun->noTelp = $req->telp;
            $akun->save();
        } else {
            // Handle the case when no akun is found
            // You can throw an exception, show an error message, or take appropriate action.
        }

        $data = akun::where('id_akun','=',$req->idbar)->get();
        $outle = outlet::where('id_akun','=',$req->idbar)->get();

        session()->put('datas', $data);
        session()->put('outlets', $outle);

        


        return view('informasi');
        
    }


    function upbawah(Request $req){
        $akun = akun::where('id_akun', '=', $req->idbaw)->first();

        if ($akun) {
            $akun->email = $req->emailbaw;
            $akun->password = $req->passbaw;
            $akun->kodeManajer = $req->kode;
            $akun->save();
        } else {
            // Handle the case when no akun is found
            // You can throw an exception, show an error message, or take appropriate action.
        }

        $data = akun::where('id_akun','=',$req->idbaw)->get();

        session()->put('datas', $data);

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
