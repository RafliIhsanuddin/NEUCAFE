<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kategori',
        'stok',
        'harga_jual',
        'harga_beli',
        'deskripsi',
        'id_outlet',
    ]; //Membarikan Izin untuk memasukkan data ke kolom tabel
    protected $table = 'produk'; // Izin yang diberikan ke tabel produk
    public $timestamps = false;  // Tidak ada timestamp di database
}
