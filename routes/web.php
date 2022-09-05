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
use App\Http\Controllers\KuisionerController;

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
    });
});

// Auth::routes();

Route::group(['middleware' => ['superadmin']], function () {
    Route::resource('siswa', daftarsiswaController::class);
    Route::resource('kepala_sekolah', kepalasekolahController::class);
    Route::resource('wali_kelas', walikelasController::class);
    Route::resource('puskesmas', puskesmasController::class);
    Route::resource('pertanyaan', pertanyaanController::class);
    Route::get('/dashboard', [dashboardController::class, 'index']);
    Route::get('/superadmin', [dashboardController::class, 'index']);
    // Route::get('/biodata', [biodataController::class, 'index']);
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
    Route::get('/isikuisioner', [jawabanController::class, 'tampilkan']);
    Route::resource('dataorangtua', dataortuController::class);
    Route::get('step1', [KuisionerController::class, 'createStepOne'])->name('step1');
    Route::post('step1-store', [KuisionerController::class, 'storeStepOne'])->name('step1.store');
    Route::get('step2', [KuisionerController::class, 'createStepTwo'])->name('step2');
    Route::post('step2-store', [KuisionerController::class, 'storeStepTwo'])->name('step2.store');
});
Auth::routes();


Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Auth::routes();




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
