<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

use App\Http\Controllers\daftarsiswaController;
use App\Http\Controllers\daftarorangtuaController;
use App\Http\Controllers\kepalasekolahController;
use App\Http\Controllers\walikelasController;
use App\Http\Controllers\puskesmasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['superadmin']], function () {
    Route::get('/superadmin', function () {
        return view('superadmin.home');
    });
    Route::resource('siswa', daftarsiswaController::class);
    Route::resource('orangtua', daftarorangtuaController::class);
    Route::resource('kepala_sekolah', kepalasekolahController::class);
    Route::resource('wali_kelas', walikelasController::class);
    Route::resource('puskesmas', puskesmasController::class);
    Route::get('/dashboard', [dashboardController::class, 'index']);
});
Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

   

// Auth::routes();

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


