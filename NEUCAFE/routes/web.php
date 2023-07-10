<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\OutletPer;
use App\Http\Controllers\produkController;
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
Route::post('konfkod', [SessionController::class, 'outletper']);
// Route::get('/tes', [YourController::class, 'tanggal'])->name('tes');
// Route::get('/dashboard', [SessionController::class, 'tanggal']);
// Route::get('/dashboard', [SessionController::class, 'tes']);
Route::get('/dashboard', [SessionController::class, 'getTransactionsPerMonth']);
// Route::get('/dashboard', [SessionController::class, 'tes']);
// Route::get('show/{id}', [show::class, 'View_PL_Accnt'])->name('SupAd.View_PL_Accnt');
// Route::view('info',[SessionController::class, 'log']);

Route::get('flush', [SessionController::class, 'flushSession'])->name('flush');

// Route::get('/dashboard', function () {
//     // Call the first function
//     $result1 = SessionController::tanggal();

//     // Call the second function
//     $result2 = SessionController::tes();

//     // Return the response or perform other actions
//     return "Result 1: $result1, Result 2: $result2";
// });

// Route::post('/laporan/{month}', [SessionController::class, 'laporan'])->name('laporan');
// Route::post('/laporan/{month}', [SessionController::class, 'laporan'])->name('laporan');
// Route::post('/about', [SessionController::class, 'laporan'])->name('laporan');

// Route::match(['GET', 'POST'], '/about', [SessionController::class, 'laporan'])->name('laporan');

// Route::match(['GET', 'POST'], '/about', function (Request $request) {
//     $selectedMonth = $request->input('selected_month');
//     return app()->call(SessionController::class.'laporan', ['request' => $request, 'selectedMonth' => $selectedMonth]);
// })->name('laporan');

// Route::match(['GET', 'POST'], '/about', [SessionController::class, 'getreport'])->name('laporan');
// Route::match(['GET', 'POST'], '/laporan', [SessionController::class, 'getreport'])->name('laporan');
Route::match(['GET', 'POST'], '/laporaneu', [SessionController::class, 'getreport'])->name('laporan');



// Route::match(['GET', 'POST'], '/about', function (Request $request) {
//     $selectedMonth = $request->input('selected_month');
//     return app()->call([SessionController::class, 'laporan'], ['request' => $request, 'selectedMonth' => $selectedMonth]);
// })->name('laporan');

// Route::match(['GET', 'POST'], '/about', function (Request $request) {
//     $selectedMonth = $request->input('selected_month');
//     return app()->call([SessionController::class, 'laporan'], ['request' => $request, 'selectedMonth' => $selectedMonth]);
// })->name('laporan');


// Route::get('/about', [SessionController::class, 'laporan'])->name('about');

// Route::post('/laporan', [SessionController::class, 'laporan'])->name('laporan')
// Route::post('/about', [SessionController::class, 'laporan']);
// Route::get('/about', [SessionController::class, 'laporan'])->name('laporan');

// Route::view("flush",'login');

// Route::post('/about', [SessionController::class, 'laporan'])->name('laporan');

// Route::view("tes",'about');

// Route::get('/about', [SessionController::class, 'getTransactionsPerMonth'])->name('transactions');
Route::view("info", 'informasi');
Route::view("choose", 'choose');
Route::view("kasir", 'kasir');
// Route::view("dashboard",'dashboard');
Route::view("login", 'login');
Route::view("edit", 'editProduk');
Route::view("signup", 'signup');
Route::view("laporan", 'laporan');
Route::view("daftarProduk", 'daftarProduk');
Route::view("review", 'reviewPelanggan');
Route::view("landing", 'landing');
Route::view("ProdukPer", 'firstProduct');
Route::view("outletPer", 'infoOutlet');
Route::view("coba", 'coba');
Route::view("tambahProduk", 'tambahProduk');
Route::view("detailProduk", 'detailProduk');
Route::view("konfir", 'kodem');

Route::resource("daftarProduk", produkController::class);

