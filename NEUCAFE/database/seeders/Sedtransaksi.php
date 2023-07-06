<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class Sedtransaksi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        $currentMonth = Carbon::now()->format('Y-m');

        // $tes = [1, 3];
        $tes = 3;

        DB::table('transaksi')->insert([
            // 'waktu_order' => $faker->dateTimeBetween($currentMonth, $currentMonth.' +1 month'),
            'nama_customer' => Str::random(10),
            'waktu_order' => $faker->dateTimeBetween('-1 year', 'now'), 
            'metode_pembayaran' => Str::random(10),
            'total_tagihan' => random_int(100000, 1000000),
            'total_harga_beli' => random_int(100000, 1000000),
            'jenis_transaksi' => Str::random(10),
            // 'id_outlet' => $tes[array_rand($tes)],
            'id_outlet' => $tes,

        ]);
    }
}
