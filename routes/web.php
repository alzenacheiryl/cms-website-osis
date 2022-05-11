<?php

use App\Http\Controllers\KaryaSiswaController;
use App\Http\Controllers\AkunSiswaController;
use App\Http\Controllers\controller3;
use App\Http\Controllers\controller2;
use App\Http\Controllers\controller1;
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

Route::get('/', [controller1::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', [controller1::class, 'dashboard'])->name('dashboard');

Route::get('/event', [controller1::class, 'event'])->name('event');

Route::get('/akunsiswa', [AkunSiswaController::class, 'index'])->name('akunsiswa');
Route::delete('/deleteakunsiswa/{id}', [AkunSiswaController::class, 'destroy'])->name('deleteakunsiswa');

Route::get('/tambahakun', [AkunSiswaController::class, 'create'])->name('tambahakun');
Route::post('/tambahkanakun', [AkunSiswaController::class, 'store'])->name('tambahkanakun');

Route::get('/editakunbaru', [AkunSiswaController::class, 'edit'])->name('editakunbaru');

Route::get('/editakun', [controller1::class, 'editakun'])->name('editakun');

Route::get('/karyasiswa', [KaryaSiswaController::class, 'index'])->name('karyasiswa');
Route::delete('/deletekaryasiswa/{id}', [KaryaSiswaController::class, 'destroy'])->name('deletekaryasiswa');

Route::get('/tambahkarya', [KaryaSiswaController::class, 'create'])->name('tambahkarya');
Route::post('/tambahkankarya', [KaryaSiswaController::class, 'store'])->name('tambahkankarya');

Route::get('/infolomba', [controller1::class, 'infolomba'])->name('info lomba');

Route::get('/kritiksaran', [controller1::class, 'kritiksaran'])->name('kritiksaran');

Route::get('/programkerja', [controller1::class, 'programkerja'])->name('programkerja');

Route::get('/login', [controller2::class, 'login'])->name('login');

Route::get('/register', [controller3::class, 'register'])->name('register');
Route::post('/register', [controller3::class, 'store'])->name('register');