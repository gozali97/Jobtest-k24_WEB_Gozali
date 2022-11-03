<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('login');
});





Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/loginProses', [AuthController::class, 'loginProses'])->name('loginProses');
Route::post('/registerProses', [AuthController::class, 'registerProses'])->name('registerProses');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::get('/profil', [MemberController::class, 'profil'])->name('profil');

    Route::get('/member/ubah/{id}', [MemberController::class, 'ubah'])->name('ubah');
    Route::post('/member/prosesUbah/{id}', [MemberController::class, 'prosesUbah'])->name('prosesUbah');
});

Route::group(['middleware' => ['auth', 'hakakses:Admin']], function () {
    Route::get('/member', [MemberController::class, 'index'])->name('member');
    Route::get('/member/tambah', [MemberController::class, 'tambah'])->name('tambah');
    Route::post('/member/store', [MemberController::class, 'store'])->name('storeMember');
    Route::get('/member/hapus/{id}', [MemberController::class, 'hapus'])->name('hapus');
});
