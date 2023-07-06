<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedDetTrans extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $totalHargaOptions = [3000, 15000, 93000, 70000];

        $produk = [18, 3, 13, 14, 24, 25];

        DB::table('detail_transaksi')->insert([
            'id_transaksi' => random_int(192, 235),
            'id_produk' =>  $produk[array_rand($produk)],
            'quantity' => random_int(1, 10),
            'total_harga' => $totalHargaOptions[array_rand($totalHargaOptions)],
        ]);
    }
}
