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
    $request->validate([
        'nama'        => 'required',
        'kategori'    => 'required',
        'stok'        => 'required|numeric',
        'harga_jual'  => 'required|numeric',
        'harga_beli'  => 'required|numeric',
        'deskripsi'   => 'required',
        'id_outlet'   => 'required|exists:outlet,id_outlet',
    ], [
        'nama.required'       => 'Nama wajib diisi',
        'kategori.required'   => 'Kategori wajib diisi',
        'stok.required'       => 'Jumlah Stok wajib diisi',
        'stok.numeric'        => 'Jumlah stok harus menggunakan angka',
        'harga_jual.required' => 'Harga Jual wajib diisi',
        'harga_jual.numeric'  => 'Harga Jual harus menggunakan angka',
        'harga_beli.required' => 'Harga Beli wajib diisi',
        'harga_beli.numeric'  => 'Harga Beli harus menggunakan angka',
        'deskripsi.required'  => 'Deskripsi wajib diisi',
        'id_outlet.required'  => 'Outlet wajib diisi',
        'id_outlet.exists'    => 'Outlet tidak valid',
    ]);

    // Create a new Produk instance and set its attributes
    $produk = new Produk();
    $produk->nama = $request->nama;
    $produk->kategori = $request->kategori;
    $produk->stok = $request->stok;
    $produk->harga_jual = $request->harga_jual;
    $produk->harga_beli = $request->harga_beli;
    $produk->deskripsi = $request->deskripsi;
    $produk->id_outlet = $request->id_outlet;

    // Save the Produk instance to the database
    $produk->save();

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
