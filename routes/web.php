<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\daftarsiswaController;
use App\Http\Controllers\daftarsiswawaliController;
use App\Http\Controllers\daftarorangtuaController;
use App\Http\Controllers\kepalasekolahController;
use App\Http\Controllers\walikelasController;
use App\Http\Controllers\puskesmasController;
use App\Http\Controllers\pertanyaanController;
use App\Http\Controllers\biodataController;
use App\Http\Controllers\dataortuController;
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
Route::group(['middleware' => ['revalidate']], function () {
    Route::group(['middleware' => ['superadmin']], function () {
        Route::resource('siswa', daftarsiswaController::class);
        Route::resource('kepala_sekolah', kepalasekolahController::class);
        Route::resource('wali_kelas', walikelasController::class);
        Route::resource('puskesmas', puskesmasController::class);
        Route::resource('pertanyaan', pertanyaanController::class);
        Route::get('/dashboard', [dashboardController::class, 'index']);
    });
    Route::group(['middleware' => ['wali_kelas']], function () {
        Route::resource('siswawali', daftarsiswawaliController::class);
        Route::get('/dashboardwali', [dashboardController::class, 'index']);
    });
    Route::group(['middleware' => ['kepala_sekolah']], function () {
        Route::get('/dashboardkepala', [dashboardController::class, 'index']);
        Route::resource('siswakepala', daftarsiswaController::class);
        Route::resource('wali_kelaskepala', walikelasController::class);
        Route::resource('puskesmaskepala', puskesmasController::class);
    });
    Route::group(['middleware' => ['puskesmas']], function () {
        Route::resource('siswapuskesmas', daftarsiswaController::class);
        Route::get('/dashboardpuskesmas', [dashboardController::class, 'index']);
    });
    Route::group(['middleware' => ['siswa']], function () {
        Route::resource('siswaid', siswaController::class);
        Route::resource('kuisioner', jawabanController::class);
        Route::resource('dataorangtua', dataortuController::class);
    });
});
    // Auth::routes();


    Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Auth::routes();




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
