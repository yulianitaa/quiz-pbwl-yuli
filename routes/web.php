<?php

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
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store']);
Route::get('/golongan/{id}/edit', [App\Http\Controllers\GolonganController::class, 'edit']);
Route::patch('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'update']);
Route::delete('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/users', [App\Http\Controllers\usersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\usersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\usersController::class, 'store']);
Route::get('/users/{id}/edit', [App\Http\Controllers\usersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\usersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\usersController::class, 'destroy']);