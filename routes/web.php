<?php

use App\Http\Controllers\Index\indexController;
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


Route::get('/', [indexController::class, 'index'])->name('index');
Route::post('', [indexController::class, 'Crear_User'])->name('Crear_User');
Route::get('siguienteronda/{users_id}/{respuestas_id}', [indexController::class, 'siguienteronda'])->name('siguienteronda');
Route::get('salir/{id}', [indexController::class, 'salir'])->name('salir');
Route::get('gameover', [indexController::class, 'gameover'])->name('gameover');
Route::post('validar/{respuestas_id}/{users_id}', [indexController::class, 'validar'])->name('validar');
