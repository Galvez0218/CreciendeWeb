<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::GET('/', 'IndexController@Welcome');
//---------------------------------RUTAS CON ZIGGY-------------------------------
Route::GET('/', [PrincipalController::class, 'Welcome'])->name('prin.welcome');
Route::GET('/registro', [PrincipalController::class, 'Registro'])->name('prin.registro');
Route::POST('/registro/guardar', [PrincipalController::class, 'guardar_usuario'])->name('registrar.guardar_usuario');
