<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportistaController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\Controller;
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

Route::get('/',[TransportistaController::class,'redirige']);

Route::get('/transportistas',[TransportistaController::class,'index'])->name('transportistas.index');

Route::get('transportistas/{transportista}',[TransportistaController::class,'show'])->name('transportista.show');

Route::get('transportistas/{transportista}/entregado',[TransportistaController::class,'entregar'])->name('transportista.entregar');

Route::get('transportistas/{transportista}/noentregado',[TransportistaController::class,'noentregado'])->name('transportista.noentregado');

Route::get('paquetes/crear',[PaqueteController::class,'index'])->name('paquete.index');

Route::post('paquetes/crea',[PaqueteController::class,'store'])->name('paquete.store');

