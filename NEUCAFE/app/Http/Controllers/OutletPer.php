<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\outlet;

class OutletPer extends Controller
{
    //

    public function outletper(Request $req){
        $outlet = new outlet;
        $outlet->nama = $req->namaout;
        $outlet->alamat = $req->alout;
        $outlet->id_akun = $req->idout;
        $outlet->save();
        return view('informasi');
    }






}
