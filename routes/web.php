<?php

use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'home'])->name('homePage');
Route::get('/films/{id}',[PostController::class,'listFilms'])->name('listFilms.find');
Route::get('/bestFilms/page/{id}',[PostController::class,'bestFilms'])->name('listFilms.best')->whereNumber('id');

