<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksiDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_relasi',
        'id_transaksi',
        'id_produk',
        'quantity',
        'total_harga',
        'total_harga_beli'
    ]; //Membarikan Izin untuk memasukkan data ke kolom tabel

    protected $table = 'detail_transaksi'; // Izin yang diberikan ke tabel produk
    public $timestamps = false;  // Tidak ada timestamp di database
}