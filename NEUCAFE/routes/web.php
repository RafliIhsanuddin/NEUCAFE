<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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
Route::post('authlog',[SessionController::class, 'login2']);
Route::post('authsign',[SessionController::class, 'masukdata']);
// Route::get('show/{id}', [show::class, 'View_PL_Accnt'])->name('SupAd.View_PL_Accnt');
Route::get('info');

Route::view("tes",'about');
Route::view("info",'informasi');
Route::view("choose",'choose');
Route::view("kasir",'kasir');
Route::view("dashboard",'dashboard');
Route::view("login",'login');
Route::view("signup",'signup');
Route::view("daftar",'daftarProduk');
Route::view("landing",'landing');
Route::view("ProdukPer",'firstProduct');
Route::view("outletPer",'infoOutlet');