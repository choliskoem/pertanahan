<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\kecController;
use App\Http\Controllers\ListpinjamController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\penandatangananController;
use App\Http\Controllers\pengembalianController;
use App\Http\Controllers\seksiController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages/login');
// });
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/proses_login', [LoginController::class, 'proses_login'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('peminjaman', peminjamanController::class);
    Route::resource('pengembalian', pengembalianController::class);

    Route::resource('listpinjam', ListpinjamController::class);
    Route::resource('kecamatan', kecController::class);
    Route::resource('seksi', seksiController::class);
    Route::resource('user', userController::class);

    Route::resource('penandatanganan', penandatangananController::class);





    // Route::resource('driver', DriverController::class);
    // Route::resource('backup', BackupController::class);
});
