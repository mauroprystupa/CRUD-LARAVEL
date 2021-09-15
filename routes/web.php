<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SilloneController;
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

Route::get('/', HomeController::class);

Route::get('sillones', [SilloneController::class, 'index'])->name('sillones.index');
Route::get('sillones/crear', [SilloneController::class, 'crear'])->name('sillones.crear');
Route::get('sillones/modificar', [SilloneController::class, 'modificar'])->name('sillones.modificar');