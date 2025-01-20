<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('welcome');
});



//baru
// Authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::POST('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

// Rute jeng user
Route::middleware(['auth'])->prefix('user')->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    // Pengaduan
    Route::get('/pengaduan', [UserController::class, 'index'])->name('user.pengaduan.index');
    Route::get('/pengaduan/create', [UserController::class, 'create'])->name('user.pengaduan.create');
    Route::post('/pengaduan', [UserController::class, 'store'])->name('user.pengaduan.store');
    Route::get('pengaduan/{id}/edit', [UserController::class, 'edit'])->name('user.pengaduan.edit');
    Route::put('pengaduan/{id}', [UserController::class, 'update'])->name('user.pengaduan.update');
    Route::delete('pengaduan/{id}', [UserController::class, 'destroy'])->name('user.pengaduan.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Rute jeng Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::put('/admin/pengaduan/{id}/update', [AdminController::class, 'update'])->name('admin.pengaduan.update');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/tanggapan/{id}', [AdminController::class, 'tanggapan'])->name('admin.tanggapan');
    // Tanggapan untuk pengaduan
    Route::post('/tanggapan/{id}', [AdminController::class, 'tanggapan'])->name('tanggapan');
});


Route::get('/home', function () {
    return view('user.home');
})->name('home');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

