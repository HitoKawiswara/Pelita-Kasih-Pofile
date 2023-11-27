<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MainPageController;
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



Route::prefix('/admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::middleware('adminauth')->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('adminDashboard');
    });
});

/* Bagian Admin Page 
Route::get('/', function () {
    return view('admin.akademik');
}); 

Route::get('/forgotpassword', [ForgotPasswordController::class, 'index'])->name('forgotpassword.index');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('/akademik', [AkademikController::class, 'index'])->name('akademik.index');

Route::get('/struktur', [StrukturController::class, 'index'])->name('struktursekolah.index');

Route::get('/updatepw', [UpdatepwController::class, 'index'])->name('updatepw.index');

*/

