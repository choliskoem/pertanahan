<?php

use App\Exports\LaporanExport;
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
use Maatwebsite\Excel\Facades\Excel;

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
// Route::get('/checkdata', 'DataController@checkData');

Route::middleware(['auth'])->group(function () {
    Route::get('password/change', [LoginController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('password/change', [LoginController::class, 'changePassword'])->name('password.update');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('peminjaman', peminjamanController::class);
    Route::get('/api/data', [peminjamanController::class, 'getOptions']);
    Route::get('get-kelurahans/{kecamatan_id}', [peminjamanController::class, 'getKelurahans']);
    Route::get('get-dokumens/{kelurahan_id}', [peminjamanController::class, 'getDokumens']);
    // Route::get('export', function () {
    //     return Excel::download(new LaporanExport, 'laporan.xlsx');
    // });
    Route::get('/export', [ListpinjamController::class, 'export'])->name('export.laporan');

    Route::get('/exportpeminjaman', [HomeController::class, 'exportpeminjaman'])->name('export.peminjaman');
    Route::get('/exportpengembalian', [HomeController::class, 'exportpengembalian'])->name('export.pengembalian');
    Route::get('/exportarsip', [HomeController::class, 'exportarsip'])->name('export.arsip');
    Route::get('/exportselesai', [HomeController::class, 'exportselesai'])->name('export.selesai');




    Route::resource('pengembalian', pengembalianController::class);
    Route::resource('listpinjam', ListpinjamController::class);
    Route::put('/ubah-status/{id}', [ListpinjamController::class, 'ubahStatus']);
    Route::resource('kecamatan', kecController::class);
    Route::resource('seksi', seksiController::class);
    Route::resource('user', userController::class);

    Route::resource('penandatanganan', penandatangananController::class);


    Route::get('import', function () {
        return view('import');
    });

    Route::post('import', [kecController::class, 'import'])->name('import');





    // Route::resource('driver', DriverController::class);
    // Route::resource('backup', BackupController::class);
});
