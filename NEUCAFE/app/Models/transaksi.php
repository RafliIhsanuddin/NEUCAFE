<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi',
        'nama_customer',
        'waktu_order',
        'metode_pembayaran',
        'total_tagihan',
        'id_outlet',
    ]; //Membarikan Izin untuk memasukkan data ke kolom tabel

    protected $table = 'transaksi'; // Izin yang diberikan ke tabel produk
    public $timestamps = false;  // Tidak ada timestamp di database
}