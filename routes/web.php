<?php

use App\Http\Controllers\tiendaController;
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

Route::get('/', [tiendaController::class, 'welcome'])->name('home');
Route::get('producto/{producto}', [tiendaController::class, 'muestraProducto']);
Route::post('agregaCarrito', [tiendaController::class, 'agregaCookies']);
Route::post('agregaPaga', [tiendaController::class, 'agregaYPaga']);
Route::get('pagar', [tiendaController::class, 'goPago'])->name('pagar');
Route::get('cleanCarrito', [tiendaController::class, 'borraCarrito']);
Route::get('nosotros', [tiendaController::class, 'goNosotros']);
Route::get('contacto', [tiendaController::class, 'goContacto']);
Route::get('video', [tiendaController::class, 'goVideos']);
