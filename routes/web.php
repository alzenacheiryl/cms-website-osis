<?php

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

Route::get('/', [controller1::class, 'dashboard']);

Route::get('/dashboard', [controller1::class, 'dashboard']);

Route::get('/event', [controller1::class, 'event']);

Route::get('/akunsiswa', [controller1::class, 'akunsiswa']);

Route::get('/tambahakun', [controller1::class, 'tambahakun']);

Route::get('/editakun', [controller1::class, 'editakun']);

Route::get('/karyasiswa', [controller1::class, 'karyasiswa']);

Route::get('/infolomba', [controller1::class, 'infolomba']);

Route::get('/kritiksaran', [controller1::class, 'kritiksaran']);

Route::get('/programkerja', [controller1::class, 'programkerja']);

Route::get('/login', [controller2::class, 'login']);

Route::get('/register', [controller3::class, 'register']);

Route::post('/register', [controller3::class, 'store']);