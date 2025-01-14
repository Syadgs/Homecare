<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomecareController;

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

// Route ke halaman utama aplikasi
Route::get('/', function () {
    return view('welcome');
});

// Route resource untuk HomecareController
Route::resource('homecare', HomecareController::class);
