<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\postController;
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
    return view('home');
});
//home
Route::get('/', [postController::class,'length']);
// menampilkan semua data
Route::get('/peminjam', [postController::class,'index'])->name('home');
// create
Route::get('/createdata/create', [postController::class,'create']);
Route::post('/peminjam', [postController::class,'store']);
// update
Route::get('/peminjam/{id}/edit', [postController::class,'edit']);
Route::put('/peminjam/{id}', [postController::class,'update']);
// delete
Route::delete('/peminjam/{id}', [postController::class,'trash']);
// search engine
Route::get('/search', [postController::class,'search']);
// book
Route::get('/book', [postController::class,'book']);
Route::get('/book/{id}', [postController::class,'view']);



Route::get('/login', [loginController::class,'index']);
Route::post('/login/true', [loginController::class,'login']);
Route::get('/login/false', [loginController::class,'logout']);



