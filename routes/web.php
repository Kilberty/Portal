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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogadoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InfraController;
use App\Http\Controllers\ComputersController;


Route::get('/', function () {
   return redirect('/login');
});
Route::get('/login',[LoginController::class,'Login' ])->name('login'); 
Route::post('/checalogin',[AuthController::class,'Auth']);
Route::get('/logout',[LogoutController::class,'logout']);
Route::get('/logado', [LogadoController::class,'Logado']);
Route::get('/clientes',[ClientesController::class,'clientes']);
Route::post('/infradados',[InfraController::class,'infra']);
Route::get('/infra',[ComputersController::class,'computers']);