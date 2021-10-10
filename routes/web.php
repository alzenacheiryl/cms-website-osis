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

Route::get('/index-2.html', [controller1::class, 'dashboard2']);