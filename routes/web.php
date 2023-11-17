<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\TeacherController;
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





