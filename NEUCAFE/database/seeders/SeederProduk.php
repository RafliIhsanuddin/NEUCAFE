<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SeederProduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('produk')->insert([
            'nama' => Str::random(10),
            'stok' => random_int(1, 100),
            'deskripsi' => Str::random(10),
            'id_outlet' => array_rand([1, 3, 4, 5, 8]),
            'kategori' => Str::random(10),
            'harga_jual' => random_int(100000, 1000000),
            'harga_beli' => random_int(100000, 1000000),
        ]);
    }
}
