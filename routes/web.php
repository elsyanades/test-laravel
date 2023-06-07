<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

Route::controller(PasienController::class)->prefix('pasien')->group(function () {
		Route::get('', 'index')->name('pasien');
		Route::get('tambah', 'tambah')->name('pasien.tambah');
		Route::post('tambah', 'simpan')->name('pasien.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('pasien.edit');
		Route::post('edit/{id}', 'update')->name('pasien.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('pasien.hapus');
		Route::get('/{id}/print', 'print')->name('pasien.print');
	});

Route::controller(KelurahanController::class)->prefix('kelurahan')->group(function () {
		Route::get('', 'index')->name('kelurahan');
		Route::get('tambah', 'tambah')->name('kelurahan.tambah');
		Route::post('tambah', 'simpan')->name('kelurahan.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kelurahan.edit');
		Route::post('edit/{id}', 'update')->name('kelurahan.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kelurahan.hapus');
	});
	

});

