<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

//Admin page
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UpdatepwController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', [MainPageController::class, 'index'])->name('main');

Route::get('/data/guru', [TeacherController::class, 'index'])->name('guru');

Route::get('/profil', function() {
    return view('user.profil');
})->name('profil');

Route::get('/akademik', function() {
    return view('user.akademik');
})->name('akademik');

Route::get('/fasilitas', function() {
    return view('user.fasilitas');
})->name('fasilitas');

Route::get('/data/staff', function() {
    return view('user.data-staff');
})->name('staff');

// blm selesai
Route::get('/ekstrakurikuler', function() {
    return view('user.ekstrakurikuler');
})->name('ekstra');

*/

//Admin Page
 Route::get('/', function () {
    return view('admin.login');
}); 

Route::get('/forgotpassword', [ForgotPasswordController::class, 'index'])->name('forgotpassword.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('/akademik', [AkademikController::class, 'index'])->name('akademik.index');

Route::get('/struktur', [StrukturController::class, 'index'])->name('struktursekolah.index');

Route::get('/updatepw', [UpdatepwController::class, 'index'])->name('updatepw.index');