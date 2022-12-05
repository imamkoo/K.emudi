<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\frontendController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\maticController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\manualController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\pengurusController;
use App\Http\Controllers\paketJasaController;
use App\Http\Controllers\settingHalamanController;
use App\Http\Controllers\settingPaketJasaController;

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

Route::redirect('home', 'dashboard');

// LOGIN WITH GOOGLE
// Route::get('/auth', [authController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/auth/redirect', [authController::class, "redirect"])->middleware('guest');
// Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');
// Route::get('/auth/logout', [authController::class, "logout"]);

Route::prefix('dashboard')->middleware('auth')->group(
    function () {
        Route::get('/', [halamanController::class, 'index']);
        Route::resource('halaman', halamanController::class);
        Route::resource('manual', manualController::class);
        Route::resource('matic', maticController::class);
        Route::resource('trainer', trainerController::class);
        Route::resource('pengurus', pengurusController::class);
        Route::resource('jadwal', JadwalController::class);
        Route::resource('paketJasa', paketJasaController::class);
        Route::get('settingHalaman', [settingHalamanController::class, "index"])->name('settingHalaman.index');
        Route::post('settingHalaman', [settingHalamanController::class, "update"])->name('settingHalaman.update');
        Route::get('settingPaketJasa', [settingPaketJasaController::class, "index"])->name('settingPaketJasa.index');
        Route::post('settingPaketJasa', [settingPaketJasaController::class, "update"])->name('settingPaketJasa.update');
    }
);

Route::prefix('/')->group(
    function () {
        Route::resource('', frontendController::class);
        Route::get('/', [frontendController::class, "index"])->name('frontend.index');
        Route::get('contact', [frontendController::class, "contact"])->name('frontend.contact');
        Route::get('cari', [JadwalController::class, "cari"])->name('frontend.search');
    }
);