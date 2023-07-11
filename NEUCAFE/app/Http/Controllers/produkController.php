<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Sintaks untuk search
        $id_outlet = session('id_outlet');
        $katakunci   = $request->katakunci;
        if (strlen($katakunci)) {
            $data =    produk::where('nama', 'like', "%$katakunci%")
                ->orWhere('kategori',   'like', "%$katakunci%")
                ->orWhere('stok',       'like', "%$katakunci%")
                ->orWhere('harga_jual', 'like', "%$katakunci%")
                ->orWhere('harga_beli', 'like', "%$katakunci%")
                ->orWhere('deskripsi',  'like', "%$katakunci%")
                ->orWhere('id_outlet',  'like', "%$katakunci%")
                ->where('id_outlet', $id_outlet)
                ->get();
        } else {
            $data = produk::orderByDesc('id_produk')
            ->where('id_outlet', $id_outlet)
            ->get();
        }
        return view("daftarProduk", compact('data'));
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
        // // Melihat data yang dimasukkan sebelumnya untuk mengecek kesalahan di form
        // Session::flash('nama',          $request->nama);
        // Session::flash('kategori',      $request->kategori);
        // Session::flash('stok',          $request->stok);
        // Session::flash('harga_jual',    $request->harga_jual);
        // Session::flash('harga_beli',    $request->harga_beli);
        // Session::flash('deskripsi',     $request->deskripsi);
        // Session::flash('id_outlet',     $request->id_outlet);

        // Store form data in the session
session()->put('nama', $request->nama);
session()->put('kategori', $request->kategori);
session()->put('stok', $request->stok);
session()->put('harga_jual', $request->harga_jual);
session()->put('harga_beli', $request->harga_beli);
session()->put('deskripsi', $request->deskripsi);
session()->put('id_outlet', $request->id_outlet);

        

        $request->validate([
            'nama'          => 'required|max:255',
            'kategori'      => 'required',
            'stok'          => 'required|numeric',
            'harga_jual'    => 'required|numeric',
            'harga_beli'    => 'required|numeric',
            'deskripsi'     => 'required|max:255',
            'id_outlet'     => 'required|numeric|exists:outlet,id_outlet',
            'status'        => 'required',
            'gambar_produk' => 'required|nullable|file|image|mimes:jpeg,png,jpg|max:2048' //Dengan penambahan nullable, aturan validasi gambar_produk akan memungkinkan nilai null untuk diterima.
            // nanti ditambahkan kodingan upload gambar
        ], [
            // Memberikan Peringatan dengan bahasa Indonesia
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
            'id_outlet.numeric'   => 'Outlet harus menggunakan angka',
            'status'              => 'Mohon dipilih salah satu',
            'gambar_produk.required' => 'Gambar produk wajib diunggah',
            'gambar_produk.file'     => 'Tipe file gambar tidak valid',
            'gambar_produk.image'    => 'File harus berupa gambar',
            'gambar_produk.mimes'    => 'Format gambar tidak valid. Hanya diperbolehkan format JPEG, PNG, dan JPG',
            'gambar_produk.max'      => 'Ukuran gambar terlalu besar. Maksimum 2MB',
            
        ]);


        $file = $request->file('gambar_produk'); // input gambarnya
        $namaFile  = time() . "_" . $file->getClientOriginalName(); // nama originalnya

        $fileUp = 'imgProducts'; //buat folder imgproducts digunakan untuk menyimpan gambar yang telah di upload (create secara otomatis by laravel)
        $file->move($fileUp, $namaFile); // simpan gambarnya di dir img products dengan nama gambar
        Session::flash('gambar_produk', $namaFile);
        produk::create([
            'nama'              => $request->nama,
            'kategori'          => $request->kategori,
            'stok'              => $request->stok,
            'harga_jual'        => $request->harga_jual,
            'harga_beli'        => $request->harga_beli,
            'deskripsi'         => $request->deskripsi,
            'id_outlet'         => $request->id_outlet,
            'status'            => $request->input('status'),
            'gambar_produk'     => $namaFile,
        ]);
        return redirect()->to('daftarProduk')->with('success', 'Berhasil Melakukan Pengisian Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = produk::whereid_produk($id)->first();
        return view('detailProduk', compact('data'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_produk)
    {
        $data = produk::where('id_produk', $id_produk)->first();
        return view('editProduk')->with('data', $data); // menampilkan data dalam bentuk form sekalgius mengupdate data
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'          => 'required',
            'kategori'      => 'required',
            'stok'          => 'required|numeric',
            'harga_jual'    => 'required|numeric',
            'harga_beli'    => 'required|numeric',
            'deskripsi'     => 'required',
            'id_outlet'     => 'required|numeric|exists:outlet,id_outlet',
            'status'        => 'required',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
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
            'id_outlet.numeric'   => 'Outlet harus menggunakan angka',
            'status.required'     => 'Mohon dipilih salah satu'
        ]);

        // Find the existing Produk instance by ID
        $produk = Produk::find($id);

        // Update the attributes of the existing Produk instance
        $produk->nama           = $request->nama;
        $produk->kategori       = $request->kategori;
        $produk->stok           = $request->stok;
        $produk->harga_jual     = $request->harga_jual;
        $produk->harga_beli     = $request->harga_beli;
        $produk->deskripsi      = $request->deskripsi;
        $produk->id_outlet      = $request->id_outlet;
        $produk->status         = $request->input('status');

        // Check if a new image is uploaded
    if ($request->hasFile('gambar_produk')) {
        $file = $request->file('gambar_produk');
        $namaFile = time() . "_" . $file->getClientOriginalName();

        $fileUp = 'imgProducts';
        $file->move($fileUp, $namaFile);

        // Delete the previous image file if it exists
        if ($produk->gambar_produk) {
            $fileToDelete = $fileUp . '/' . $produk->gambar_produk;
            if (file_exists($fileToDelete)) {
                unlink($fileToDelete);
            }
        }

        $produk->gambar_produk = $namaFile;
    }


        // Save the updated Produk instance to the database
        $produk->save();

        return redirect()->to('daftarProduk')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        produk::where('id_produk', $id)->delete();                                               // ini juga berhasil
                                                                            // ini versi kode yang lebih bersih
        return redirect()->to('daftarProduk')->with('success', 'Berhasil Melakukan Delete Data');
    }
}
