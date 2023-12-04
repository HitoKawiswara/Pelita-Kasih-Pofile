<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Middleware\AdminAuth;
use App\View\Components\AdminLayout;
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

//user
Route::controller(UserPageController::class)->group(function () {
    Route::get('/', 'news_show')->name('main');

    Route::get('/struktur/guru', 'structure_show')->name('guru');
    Route::get('/struktur/staff', 'structure_show')->name('staff');

    Route::get('/akademik', 'akademik_show')->name('akademik');
});

Route::get('/profil', function() {
    return view('user.profil');
})->name('profil');

Route::get('/fasilitas', function() {
    return view('user.fasilitas');
})->name('fasilitas');

Route::get('/ekstrakurikuler', function() {
    return view('user.ekstrakurikuler');
})->name('ekstra');


//admin
Route::controller(AdminPageController::class)->group(function() {
    //news
    Route::get('/admin/berita', 'show_news')->middleware(['auth', 'verified'])->name('adminBerita');

    Route::post('/admin/berita', 'store_news')->name('store_news');

    Route::put('/admin/berita/restore/{id}', 'restore_news')->name('restore_news');
    Route::put('/admin/berita/update/{id}', 'update_news')->name('update_news');


    Route::delete('/admin/berita/del/{id}', 'soft_delete_news')->name('soft_delete_news');
    Route::delete('/admin/berita/force-del/{id}', 'force_delete_news')->name('force_delete_news');


    //akademik
    Route::get('/admin/akademik', 'show_akademik')->middleware(['auth', 'verified'])->name('adminAkademik');

    Route::post('/admin/akademik', 'store_akademik')->name('store_akademik');

    Route::delete('/admin/akademik/delete/{id}', 'delete_akademik')->name('delete_akademik');


    //structure
    Route::get('/admin/struktur', 'show_structure')->middleware(['auth', 'verified'])->name('adminStruktur');

    Route::post('/admin/struktur', 'store_structure')->name('store_structure');

    Route::put('/admin/struktur/update/{id}', 'update_structure')->name('update_structure');

    Route::delete('/admin/struktur/delete/{id}', 'delete_structure')->name('delete_structure');

    //Ekstrakurikuler
    Route::get('/admin/ekstrakurikuler', 'show_ekstrakurikuler')->middleware(['auth', 'verified'])->name('adminEkstrakurikuler');
    Route::post('/admin/ekstrakurikuler', 'store_ekstrakurikuler')->name('store_ekstrakurikuler');

    Route::put('/admin/ekstrakurikuler/update/{id}', 'update_ekstrakurikuler')->name('update_ekstrakurikuler');

    Route::delete('/admin/ekstrakurikuler/delete/{id}', 'delete_ekstrakurikuler')->name('delete_ekstrakurikuler');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



