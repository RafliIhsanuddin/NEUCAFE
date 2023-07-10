<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\outlet;
use App\Models\produk;
use App\Models\transaksi;
use App\Models\transaksiDetail;
use RealRashid\SweetAlert\Facades\Alert;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_outlet = session('id_outlet');
        $tanggal = Carbon::now();
        $items = produk::where('id_outlet', $id_outlet)->get();
        $cek_transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();
        if(empty($cek_transaksi)){
            //simpan ke db transaksi
            $transaksi = new transaksi;
            $transaksi->nama_customer = 0;
            $transaksi->waktu_order = $tanggal;
            $transaksi->metode_pembayaran = 0;
            $transaksi->total_tagihan = 0;
            $transaksi->total_harga_beli = 0;
            $transaksi->id_outlet = session('id_outlet');
            $transaksi->status = 0;
            $transaksi->save();
        }
        $transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();
        $cart =  DB::table('produk')
        ->join('detail_transaksi', 'produk.id_produk', '=', 'detail_transaksi.id_produk')
        ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
        ->select('produk.*', 'detail_transaksi.*')
        ->where('transaksi.status', 0)
        ->where('transaksi.id_outlet', $id_outlet)
        ->get();

        return view('kasir', ['items' => $items, 'cart' => $cart, 'transaksi' => $transaksi]);
    }


    public function cart($id){
        
        $id_outlet= session('id_outlet');
        $produk = produk::where('id_produk',$id)->first();
        $tanggal = Carbon::now();

        //validasi
        $cek_transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();
        if(empty($cek_transaksi)){
            //simpan ke db transaksi
            $transaksi = new transaksi;
            $transaksi->nama_customer = 0;
            $transaksi->waktu_order = $tanggal;
            $transaksi->metode_pembayaran = 0;
            $transaksi->total_tagihan = 0;
            $transaksi->total_harga_beli = 0;
            $transaksi->id_outlet = session('id_outlet');
            $transaksi->status = 0;
            $transaksi->save();
        }

        $transaksi_baru = transaksi::where('id_outlet', $id_outlet)->where('status', '0')->first();
        //validasi
        $cek_transaksi_detail = transaksiDetail::where('id_produk',$produk->id_produk)->where('id_transaksi', $transaksi_baru->id_transaksi)->first();
        //simpan ke db detail transaksi
        
        if(empty($cek_transaksi_detail)){
            $transaksi_detail = new transaksiDetail;
            $transaksi_detail->id_transaksi = $transaksi_baru->id_transaksi;
            $transaksi_detail->id_produk = $produk->id_produk;
            $transaksi_detail->quantity = 1;
            $transaksi_detail->total_harga = $produk->harga_jual*$transaksi_detail->quantity;
            $transaksi_detail->total_harga_beli = $produk->harga_beli*$transaksi_detail->quantity;
            $transaksi_detail->save();

            $transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();
            DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->where('status', 0)
            ->update(['total_tagihan' => $transaksi->total_tagihan + $produk->harga_jual*$transaksi_detail->quantity,
            'total_harga_beli' => $transaksi->total_harga_beli + $produk->harga_beli*$transaksi_detail->quantity]);
        }

        return redirect('kasir');
        
    }

    public function hapus($id){
        $id_outlet= session('id_outlet');

        $transaksi_detail = transaksiDetail::where('id_relasi',$id)->first();
        //update tagihan dan harga
        $transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();
        DB::table('transaksi')
        ->where('id_outlet', $id_outlet)
        ->where('status', 0)
        ->update(['total_tagihan' => $transaksi->total_tagihan -  $transaksi_detail->total_harga,
        'total_harga_beli' => $transaksi->total_harga_beli -  $transaksi_detail->total_harga_beli]);

        //hapus
        DB::table('detail_transaksi')->where('id_relasi',$id)->delete();

        Alert::success('Remove Successfully', 'Item berhasil dihapus dari keranjang');
        return redirect('kasir');
    }

    public function konfir(Request $request, $id){
        $tanggal = Carbon::now();
        DB::table('transaksi')
        ->where('id_transaksi', $id)
        ->where('status', 0)
        ->update(['nama_customer' => $request->nama_customers, 'waktu_order' => $tanggal]);
        return redirect()->route('konfirmasiPembayaran', ['id' => $id]);
    }

    public function detailPemesanan($id){
        $transaksi = transaksi::where('id_transaksi',$id)->first();
        $detail = transaksiDetail::where('id_transaksi',$id)->get();
        $produk =  DB::table('produk')
        ->join('detail_transaksi', 'produk.id_produk', '=', 'detail_transaksi.id_produk')
        ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
        ->select('produk.*', 'detail_transaksi.*')
        ->where('transaksi.id_transaksi', $id)
        ->get();
        $totalQuantity = DB::table('detail_transaksi')
        ->where('id_transaksi', $id)
        ->sum('quantity');
        return view('konfirmasiPembayaran', ['detail' => $detail, 'produk' => $produk, 'transaksi' => $transaksi, 'totalQuantity'=> $totalQuantity]);
    }

    public function checkout(Request $request, $id){
        if ($request->has('button1')) {
            DB::table('transaksi')
            ->where('id_transaksi', $id)
            ->where('status', 0)
            ->update(['status' => 1, 'metode_pembayaran' => $request->metode]);
            Alert::success('Pembayaran Successfully', 'Pembayaran berhasil dilakukan');
            return redirect()->route('kasir');
        }
    
        if ($request->has('button2')) {
            // Redirect ke halaman sebelumnya
            return redirect('kasir');
        }
    }


    public function index2()
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

    // public function show(string $id)
    // {
    //     //
    // }

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
