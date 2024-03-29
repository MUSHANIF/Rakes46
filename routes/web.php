<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\daftarsiswaController;
use App\Http\Controllers\daftarsiswawaliController;
use App\Http\Controllers\dataortuController;
use App\Http\Controllers\kepalasekolahController;
use App\Http\Controllers\walikelasController;
use App\Http\Controllers\puskesmasController;
use App\Http\Controllers\pertanyaanController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\jawabanController;

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

Route::group(['middleware' => ['revalidate', 'verified']], function () {
    Route::group(['middleware' => ['superadmin']], function () {
        Route::get('/dashboard', [dashboardController::class, 'index']);
        Route::resource('siswa', daftarsiswaController::class);
        Route::resource('kepala_sekolah', kepalasekolahController::class);
        Route::resource('wali_kelas', walikelasController::class);
        Route::resource('puskesmas', puskesmasController::class);
        Route::resource('pertanyaan', pertanyaanController::class);
    });

    Route::group(['middleware' => ['wali_kelas']], function () {
        Route::get('/dashboardwali', [dashboardController::class, 'index']);
        Route::resource('siswawali', daftarsiswawaliController::class)->except('edit', 'update', 'destroy');
    });

    Route::group(['middleware' => ['kepala_sekolah']], function () {
        Route::get('/dashboardkepala', [dashboardController::class, 'index']);
        Route::resource('siswakepala', daftarsiswaController::class)->only(['index', 'show']);
        Route::resource('wali_kelaskepala', walikelasController::class)->only(['index', 'show']);
        Route::resource('puskesmaskepala', puskesmasController::class)->only(['index', 'show']);
    });

    Route::group(['middleware' => ['puskesmas']], function () {
        Route::get('/dashboardpuskesmas', [dashboardController::class, 'index']);
        Route::resource('siswapuskesmas', daftarsiswaController::class)->only(['index', 'show']);
    });

    Route::group(['middleware' => ['siswa']], function () {
        Route::resource('siswaid', siswaController::class);
        Route::resource('kuisioner', jawabanController::class);

        Route::resource('dataorangtua', dataortuController::class);
        Route::get('/isijawaban/{type}/{group}', [siswaController::class, 'tampilkanPerGroup']); // atur dari RouteServiceProvider
        Route::get('/jawabanlama', [siswaController::class, 'tampilkanJawabanLama']);

        Route::get('/editjawaban/{type}/{group}', [jawabanController::class, 'editKuisioner']);
        Route::post('/updatejawaban', [jawabanController::class, 'updateKuisioner']);
    });
});

require __DIR__ . '/auth.php';
