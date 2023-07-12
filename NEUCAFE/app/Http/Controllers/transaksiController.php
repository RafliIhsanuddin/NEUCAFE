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

class transaksiController extends Controller
{
    public function index()
    {
        $id_outlet = session('id_outlet');
        $tanggal = Carbon::now();
        $tanggal->setTimezone('Asia/Jakarta');
        $items = produk::where('id_outlet', $id_outlet)
        ->where('status', 'Success')
        ->where('stok','>',0)
        ->orderBy('nama', 'asc')
        ->get();
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
        ->orderBy('detail_transaksi.id_relasi', 'asc')
        ->get();

        $totalQuantity = DB::table('detail_transaksi')
        ->where('id_transaksi', $transaksi->id_transaksi)
        ->sum('quantity');

        return view('kasir', ['items' => $items, 'cart' => $cart, 'transaksi' => $transaksi, 'total' => $totalQuantity]);
    }


    public function cart($id){
        
        $id_outlet= session('id_outlet');
        $produk = produk::where('id_produk',$id)->first();
        $tanggal = Carbon::now();
        $tanggal->setTimezone('Asia/Jakarta');

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

    public function tambah($id){
        $id_outlet = session('id_outlet');
        $transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();

        $transaksi_detail = transaksiDetail::where('id_relasi',$id)->first();
        $produk =  DB::table('produk')
        ->join('detail_transaksi', 'produk.id_produk', '=', 'detail_transaksi.id_produk')
        ->select('produk.*', 'detail_transaksi.*')
        ->where('detail_transaksi.id_relasi', $id)
        ->first();


        if($transaksi_detail->quantity < $produk->stok){
            DB::table('detail_transaksi')
            ->where('id_relasi',$id)
            ->update(['quantity' => $transaksi_detail->quantity+1, 'total_harga'=> $transaksi_detail->total_harga + $produk->harga_jual, 'total_harga_beli'=>$transaksi_detail->total_harga_beli + $produk->harga_beli]);
            
            $result = DB::table('detail_transaksi')
            ->join('produk', 'detail_transaksi.id_produk', '=', 'produk.id_produk')
            ->select(DB::raw('SUM(detail_transaksi.quantity * produk.harga_jual) as total_harga'), DB::raw('SUM(detail_transaksi.quantity * produk.harga_beli) as total_beli'))
            ->where('detail_transaksi.id_transaksi', $transaksi->id_transaksi)
            ->first();
    
            DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->where('status', 0)
            ->update(['total_tagihan' => $result->total_harga, 'total_harga_beli' => $result->total_beli]);
            return redirect('kasir');
        }else{
            Alert::error('Gagal Menambah Item', 'Stok item terbatas');
            return redirect('kasir');
        }

       

    }

    public function kurang($id){
        $id_outlet = session('id_outlet');
        $transaksi = transaksi::where('id_outlet', $id_outlet)->where('status', 0)->first();

        $transaksi_detail = transaksiDetail::where('id_relasi',$id)->first();

        if($transaksi_detail->quantity > 1){

            $produk =  DB::table('produk')
            ->join('detail_transaksi', 'produk.id_produk', '=', 'detail_transaksi.id_produk')
            ->select('produk.*', 'detail_transaksi.*')
            ->where('detail_transaksi.id_relasi', $id)
            ->first();

            DB::table('detail_transaksi')
            ->where('id_relasi',$id)
            ->update(['quantity' => $transaksi_detail->quantity-1, 'total_harga'=> $transaksi_detail->total_harga - $produk->harga_jual, 'total_harga_beli'=>$transaksi_detail->total_harga_beli - $produk->harga_beli]);
            
            $result = DB::table('detail_transaksi')
            ->join('produk', 'detail_transaksi.id_produk', '=', 'produk.id_produk')
            ->select(DB::raw('SUM(detail_transaksi.quantity * produk.harga_jual) as total_harga'), DB::raw('SUM(detail_transaksi.quantity * produk.harga_beli) as total_beli'))
            ->where('detail_transaksi.id_transaksi', $transaksi->id_transaksi)
            ->first();

            DB::table('transaksi')
            ->where('id_outlet', $id_outlet)
            ->where('status', 0)
            ->update(['total_tagihan' => $result->total_harga, 'total_harga_beli' => $result->total_beli]);
        }else{
            $this->hapus($id);
        }
        return redirect('kasir');
    }

    public function konfir(Request $request, $id){
        $tanggal = Carbon::now();
        $tanggal->setTimezone('Asia/Jakarta');

        $totalQuantity = DB::table('detail_transaksi')
        ->where('id_transaksi', $id)
        ->sum('quantity');

        if($totalQuantity > 0){
            DB::table('transaksi')
            ->where('id_transaksi', $id)
            ->where('status', 0)
            ->update(['nama_customer' => $request->nama_customers, 'waktu_order' => $tanggal]);
            return redirect()->route('konfirmasiPembayaran', ['id' => $id]);
        }else{
            Alert::error('Failed', 'Masukkan Item ke dalam keranjang');
            return redirect('kasir');
        }

        
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
            $transaksi = transaksi::where('id_transaksi',$id)->first();
            if($request->bayar >= $transaksi->total_tagihan){
                DB::table('transaksi')
                ->where('id_transaksi', $id)
                ->where('status', 0)
                ->update(['status' => 1, 'metode_pembayaran' => $request->metode]);
                Alert::success('Pembayaran Successfully', 'Pembayaran berhasil dilakukan');
                return redirect()->route('kasir');
            }else{
                Alert::error('Pembayaran Gagal', 'Masukkan Input Pembayaran dengan Benar');
                return redirect('konfirmasiPembayaran/'.$id);
            }
        }
    
        if ($request->has('button2')) {
            // Redirect ke halaman sebelumnya
            return redirect('kasir');
        }
    }

    public function tampilRiwayat(){
        $id_akun = session('id');
        $id_outlet = outlet::where('id_akun',$id_akun)->first();
        $riwayat = transaksi::where('id_outlet',$id_outlet['id_outlet'])
            ->where('status',1)
            ->orderBy('waktu_order', 'desc')
            ->get();
        return view('riwayat', ['riwayat' => $riwayat]);

    }
}