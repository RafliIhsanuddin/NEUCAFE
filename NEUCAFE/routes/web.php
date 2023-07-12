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
use App\Http\Middleware\CheckSession;

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

// Route::get('login', function () {
//     return view('login');
// })->name('login');

Route::get('choose', function () {
    return view('choose');
})->name('choose');


Route::get('login', function () {
    if (session()->has('id')) {
        return redirect()->route('choose'); // Replace 'dashboard' with the appropriate route name
    }

    return view('login');
})->name('login');

Route::get('landing', function () {
    if (session()->has('id')) {
        return redirect()->route('choose'); // Replace 'dashboard' with the appropriate route name
    }

    return view('landing');
})->name('landing');

Route::get('signup', function () {
    if (session()->has('id')) {
        return redirect()->route('choose'); // Replace 'dashboard' with the appropriate route name
    }

    return view('signup');
})->name('signup');






Route::middleware([CheckSession::class])->group(function () {
    Route::view("info",'informasi');
    Route::get('choose', function () {
        return view('choose');
    })->name('choose');
    
    // Route::view("kasir",'kasir');
    // Route::view("dashboard",'dashboard');
    Route::view("edit",'editProduk');
    Route::view("daftar",'daftarProduk');
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

    Route::post('editatas', [SessionController::class, 'upatas']);
    Route::post('editbaw', [SessionController::class, 'upbawah']);
    
    Route::post('outper', [SessionController::class, 'outletper']);
    Route::post('konfkod', [SessionController::class, 'konfirmasikode']);
    Route::get('/dashboard', [SessionController::class, 'getTransactionsPerMonth']);
    //riwayat
    Route::get('riwayat',[transaksiController::class, 'tampilRiwayat']);

});


// Route::get('/login',[SessionController::class, 'halog']);
Route::post('authlog', [SessionController::class, 'login2']);
Route::post('authsign', [SessionController::class, 'masukdata']);

Route::get('flush', [SessionController::class, 'flushSession'])->name('flush');


// Route::match(['GET', 'POST'], '/laporan', [SessionController::class, 'getreport'])->name('laporan');
Route::match(['GET', 'POST'], '/laporaneu', [SessionController::class, 'getreport'])->name('laporan');

// Route::view("login",'login');
// Route::view("signup",'signup');
// Route::view("landing",'landing');




