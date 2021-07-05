<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ReviewController;
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
//[studentController::class, 'view']
Route::resource('/listStudent', StudentController::class);
Route::get('/listReview/upload', [ReviewController::class, 'upload']);
Route::resource('/listReview', ReviewController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/heart', [LikeController::class, 'Like'])->name('heart');

Route::get('/product/{id}', [ProductsController::class, 'show'])->name('detailProduct');

require __DIR__ . '/auth.php';
