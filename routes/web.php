<?php

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

Route::get('/index.html', [controller1::class, 'dashboard']);

Route::get('/event.html', [controller1::class, 'event']);

Route::get('/akunsiswa.html', [controller1::class, 'akunsiswa']);

Route::get('/tambahakun.html', [controller1::class, 'tambahakun']);

Route::get('/editakun.html', [controller1::class, 'editakun']);

Route::get('/karyasiswa.html', [controller1::class, 'karyasiswa']);

Route::get('/infolomba.html', [controller1::class, 'infolomba']);

Route::get('/kritiksaran.html', [controller1::class, 'kritiksaran']);

Route::get('/programkerja.html', [controller1::class, 'programkerja']);