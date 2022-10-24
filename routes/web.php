<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Master\Karyawan\Pegawai;
use App\Http\Livewire\Master\Referensi\Departemen;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.app');
});

Auth::routes();

Route::controller(Dashboard::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/dashboard', 'render')->name('dashboard');
});
Route::controller(Pegawai::class)->group(function () {
    Route::get('/view_pegawai', 'viewPegawai')->name('viewPegawai');
});
Route::get('/dashboard', [Dashboard::class, 'render'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
