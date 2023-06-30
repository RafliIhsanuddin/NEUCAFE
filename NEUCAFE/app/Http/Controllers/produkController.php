<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("tambahProduk");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahProduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Melihat data yang dimasukkan sebelumnya untuk mengecek kesalahan di form
        Session::flash('nama',       $request->nama);
        Session::flash('kategori',   $request->kategori);
        Session::flash('stok',       $request->stok);
        Session::flash('harga_jual', $request->harga_jual);
        Session::flash('harga_beli', $request->harga_beli);
        Session::flash('deskripsi',  $request->deskripsi);
        Session::flash('id_outlet',  $request->id_outlet);
        
        // Melakukan Validasi Data untuk memastikan seluruh kolom terisi dengan data 
        $request->validate([
            'nama'        =>'required:produk,nama',
            'kategori'    =>'required',
            'stok'        =>'required | numeric',
            'harga_jual'  =>'required | numeric',
            'harga_beli'  =>'required | numeric',
            'deskripsi'   =>'required',
            'id_outlet'   =>'required | numeric',

        ],[ //Memberikan Peringatan dalam Bahasa Indonesia
            'nama.required'       =>'Nama wajib diisi',
            'kategori.required'   =>'Kategori wajib diisi',
            'stok.required'       =>'Jumlah Stok wajib diisi',
            'stok.numeric'        =>'Jumlah stok harus menggunakan angka',
            'harga_jual.required' =>'Harga Jual wajib diisi',
            'harga_jual.numeric'  =>'Harga Jual harus menggunakan angka', 
            'harga_beli.required' =>'Harga Beli wajib diisi', 
            'harga_beli.numeric'  =>'Harga Beli harus menggunakan angka',
            'deskripsi.required'  =>'Deskripsi wajib diisi',
            'id_outlet.required'  =>'Outlet wajib diisi',
            'id_outlet.numeric'   =>'Outlet harus menggunakan angka',


        ]);
        // $data sebagai parameter untuk memasukkan biodata produk
        $data = [
            'nama'       => $request->nama,
            'kategori'   => $request->kategori,
            'stok'       => $request->stok,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'deskripsi'  => $request->deskripsi,
            'id_outlet'  => $request->id_outlet  //Penambahan outlet dikarenakan database memiliki id_outlet
        ];
        produk::create($data); // Mengirimkan data ke tabel produk di database neucafe agar tersimpan
        return redirect()->to('tambahProduk')->with('success', 'Berhasil Melakukan Pengisian Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
