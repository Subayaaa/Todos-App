<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloCtrl;
use App\Http\Controllers\MenuCtrl;
use App\Http\Controllers\KategoriCtrl;

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

Route::get('/', [HelloCtrl::class, 'index']);

Route::get('/menu', [MenuCtrl::class, 'index']);
Route::get('/menu/add', [MenuCtrl::class, 'add']);
Route::post('/menu/save', [MenuCtrl::class, 'save']);
Route::get('/menu/{id}/edit', [MenuCtrl::class, 'edit']);
Route::get('/menu/{id}/delete', [MenuCtrl::class, 'delete']);

Route::get('/kategori', [KategoriCtrl::class, 'index']);
Route::get('/kategori/add', [KategoriCtrl::class, 'add']);
Route::post('/kategori/save', [KategoriCtrl::class, 'save']);
Route::get('/kategori/{id}/edit', [KategoriCtrl::class, 'edit']);
Route::get('/kategori/{id}/delete', [KategoriCtrl::class, 'delete']);
