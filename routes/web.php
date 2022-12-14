<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/viewcode' , [\App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/ambilqrcode' , [\App\Http\Controllers\CategoryController::class, 'ambilqrcode']);
Route::post('/create_category_jika_dia_sudah_login' , [\App\Http\Controllers\CategoryController::class, 'store']);

require __DIR__.'/auth.php';
