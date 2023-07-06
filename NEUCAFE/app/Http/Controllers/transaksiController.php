<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\outlet;
use App\Models\transaksi;

class transaksiController extends Controller
{
    public function tampil(){
        $id_akun = session('id');
        $id_outlet = outlet::where('id_akun',$id_akun)->first();
        $riwayat = transaksi::where('id_outlet',$id_outlet['id_outlet'])
                                ->orderBy('waktu_order', 'desc')
                                ->get();
        return view('riwayat', ['riwayat' => $riwayat]);

    }
}