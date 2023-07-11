<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\OutletPer;
use App\Http\Controllers\produkController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\tambahProdukController;
use App\Http\Controllers\App\Models\Produk;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





// Route::get('/login',[SessionController::class, 'halog']);
Route::post('authlog', [SessionController::class, 'login2']);
Route::post('authsign', [SessionController::class, 'masukdata']);
Route::post('editatas', [SessionController::class, 'upatas']);
Route::post('editbaw', [SessionController::class, 'upbawah']);
Route::post('outper', [SessionController::class, 'outletper']);
Route::post('konfkod', [SessionController::class, 'konfirmasikode']);
Route::get('/dashboard', [SessionController::class, 'getTransactionsPerMonth']);

Route::get('flush', [SessionController::class, 'flushSession'])->name('flush');


// Route::match(['GET', 'POST'], '/laporan', [SessionController::class, 'getreport'])->name('laporan');
Route::match(['GET', 'POST'], '/laporaneu', [SessionController::class, 'getreport'])->name('laporan');


Route::view("info",'informasi');
Route::view("choose",'choose');
// Route::view("kasir",'kasir');
// Route::view("dashboard",'dashboard');
Route::view("login",'login');
Route::view("edit",'editProduk');
Route::view("signup",'signup');
Route::view("daftar",'daftarProduk');
Route::view("landing",'landing');
Route::view("ProdukPer",'firstProduct');
Route::view("outletPer",'infoOutlet');
Route::view("coba",'coba');
Route::view("tambahProduk",'tambahProduk');
Route::view("detailProduk",'detailProduk');
Route::view("konfir",'kodem');
// Route::view("konfirmasiPembayaran", 'konfirmasiPembayaran');

Route::resource("daftarProduk", produkController::class);

//review
Route::get('review',[reviewController::class, 'index'])->name('review');

//Kasir
Route::get('kasir',[transaksiController::class, 'index'])->name('kasir');
Route::get('kasir/tambah/{id}', [transaksiController::class, 'cart']);
Route::get('kasir/hapus/{id}', [transaksiController::class, 'hapus']);
Route::get('kasir/hapus/{id}', [transaksiController::class, 'hapus']);   
Route::get('kasir/tambahStok/{id}', [transaksiController::class, 'tambah']);  
Route::get('kasir/kurangStok/{id}', [transaksiController::class, 'kurang']);   

// Route::view('konfirmasiPembayaran','konfirmasiPembayaran');
Route::post('konfirmasiPembayaran/{id}', [transaksiController::class, 'konfir']);
Route::get('konfirmasiPembayaran/{id}', [transaksiController::class, 'detailPemesanan'])->name('konfirmasiPembayaran');   

Route::post('konfirmasiPembayaran/checkout/{id}', [transaksiController::class, 'checkout']);

//riwayat
Route::get('riwayat',[transaksiController::class, 'tampilRiwayat']);