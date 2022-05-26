<?php

use App\Http\Controllers\KritikSaranController;
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

//Dasboard
Route::get('/', [controller1::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [controller1::class, 'dashboard'])->name('dashboard');

//Akun Siswa
Route::get('/akunsiswa', [AkunSiswaController::class, 'index'])->name('akunsiswa');
Route::get('/tambahakun', [AkunSiswaController::class, 'create'])->name('tambahakun');
Route::post('/tambahkanakun', [AkunSiswaController::class, 'store'])->name('tambahkanakun');
Route::get('/editsiswa/{id}', [AkunSiswaController::class, 'edit'])->name('editsiswa');
Route::post('/editkansiswa/{id}', [AkunSiswaController::class, 'update'])->name('editkansiswa');
Route::delete('/deleteakunsiswa/{id}', [AkunSiswaController::class, 'destroy'])->name('deleteakunsiswa');

//Karya Siswa
Route::get('/karyasiswa', [KaryaSiswaController::class, 'index'])->name('karyasiswa');
Route::get('/tambahkarya', [KaryaSiswaController::class, 'create'])->name('tambahkarya');
Route::post('/tambahkankarya', [KaryaSiswaController::class, 'store'])->name('tambahkankarya');
Route::get('/editkarya/{id}', [KaryaSiswaController::class,'edit'])->name('editkarya');
Route::post('/editkankarya/{id}', [KaryaSiswaController::class, 'update'])->name('editkankarya');
Route::get('/deletekaryasiswa/{id}', [KaryaSiswaController::class, 'destroy'])->name('deletekaryasiswa');

//Kritik dan Saran
Route::get('/kritiksaran', [KritikSaranController::class, 'index'])->name('kritiksaran');
Route::get('/tambahkritik', [KritikSaranController::class, 'create'])->name('tambahkritik');
Route::post('/tambahkankritik', [KritikSparanController::class, 'store'])->name('tambahkankritik');
Route::get('/editkritik/{id}', [KritikSaranController::class,'edit'])->name('editkritik');
Route::post('/editkankritik/{id}', [KritikSaranController::class, 'update'])->name('editkankritik');
Route::get('/deletekritiksaran/{id}', [KritikSaranController::class, 'destroy'])->name('deletekritiksaran');

//Lama
Route::get('/event', [controller1::class, 'event'])->name('event');
Route::get('/editakun', [controller1::class, 'editakun'])->name('editakun');
Route::get('/infolomba', [controller1::class, 'infolomba'])->name('info lomba');
Route::get('/programkerja', [controller1::class, 'programkerja'])->name('programkerja');

//Sistem Login
Route::get('/login', [controller2::class, 'login'])->name('login');
Route::get('/register', [controller3::class, 'register'])->name('register');
Route::post('/register', [controller3::class, 'store'])->name('register');

//welcome
Route::get('/welcome', [controller1::class, 'welcome'])->name('welcome');