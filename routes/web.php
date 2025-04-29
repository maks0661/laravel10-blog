<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', fn() => view('welcome'));

Route::resource('categories', CategoryController::class) -> only(['index', 'store', 'destroy']);
Route::resource('posts', PostController::class) -> only(['index', 'create', 'store', 'destroy']);

