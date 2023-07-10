<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produk',
        'nama',
        'kategori',
        'stok',
        'harga_jual',
        'harga_beli',
        'deskripsi',
        'id_outlet',
        'status',
        'gambar_produk'
    ];                                      //Memberikan Izin untuk memasukkan data ke kolom tabel
    protected $table   = 'produk';          // Izin yang diberikan ke tabel produk
    public $timestamps = false;             // Tidak ada timestamp di database
    protected $primaryKey = 'id_produk';    // digunakan untuk mencari id yang ingin di update
}
