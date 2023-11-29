<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Middleware\AdminAuth;
use App\View\Components\AdminLayout;
use Illuminate\Support\Facades\Route;


// Admin Page //
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
*/

Route::get('/', [MainPageController::class, 'index'])->name('main');

Route::get('/profil', function() {
    return view('user.profil');
})->name('profil');

Route::get('/akademik', function() {
    return view('user.akademik');
})->name('akademik');

Route::get('/fasilitas', function() {
    return view('user.fasilitas');
})->name('fasilitas');

Route::controller(StructureController::class)->group(function () {
    Route::get('/struktur/guru', 'index')->name('guru');
    Route::get('/struktur/staff', 'index')->name('staff');
});

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstra');
Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create']);
Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store']);



//breeze
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


