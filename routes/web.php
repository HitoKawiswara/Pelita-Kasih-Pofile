<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\StructureController;
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

Route::controller(StructureController::class)->group(function () {
    Route::get('/struktur/guru', 'index')->name('guru');
    Route::get('/struktur/staff', 'index')->name('staff');
});

Route::get('/profil', function() {
    return view('user.profil');
})->name('profil');

Route::get('/akademik', function() {
    return view('user.akademik');
})->name('akademik');

Route::get('/fasilitas', function() {
    return view('user.fasilitas');
})->name('fasilitas');

// blm selesai
Route::get('/ekstrakurikuler', function() {
    return view('user.ekstrakurikuler');
})->name('ekstra');

Route::get('/admin/login', function() {
    return view('admin.admin-login');
})->name('adminLogin');





