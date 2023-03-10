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

Route::get('movie', function () {
    return view('index');
});

Route::get('/', [App\Http\Controllers\MovieController::class, 'index'])->name('movie.index');
Route::get('movie/{movie}', [App\Http\Controllers\MovieController::class, 'show'])->name('movie.show');

Route::get('fetchdata', [App\Http\Controllers\MovieController::class, 'fetchData'])->name('movie.fetchData');
