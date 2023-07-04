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


        DB::table('transaksi')->insert([
            'waktu_order' => $faker->dateTimeBetween('-1 year', 'now'), 
            'metode_pembayaran' => Str::random(10),
            'total_tagihan' => random_int(100000, 1000000),
            'jenis_transaksi' => Str::random(10),
            'id_outlet' => array_rand([1, 3, 4, 5, 8]), 
        ]);
    }
}
