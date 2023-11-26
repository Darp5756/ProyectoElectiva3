<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartasControlador;
use App\Http\Controllers\RoboticaControlador;
use App\Http\Controllers\ArtificialControlador;
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

//Registro
Route::get('/vista/registro', [LoginController::class, 'Vista_registro'])->name('vista.registro');
Route::post('/registro/usuario', [LoginController::class, 'Registro'])->name('registro.guardar');

//Login
Route::get('/vista/login', [LoginController::class, 'Vista_Login'])->name('vista.login');
Route::post('/login/ingresar', [LoginController::class, 'Login'])->name('login.ingresar');

//Cartas
Route::get('/vista/cartas', [CartasControlador::class, 'Vista_Cursos'])->name('vista.cartas');

//Robotica
Route::get('/vista/robotica', [RoboticaControlador::class, 'Vista_Robotica'])->name('vista.robotica');

//Inteligencia Artificial
Route::get('/vista/artificial', [ArtificialControlador::class, 'Vista_Artificial'])->name('vista.artificial');

//Inicio
Route::get('/inicio', [LoginController::class, 'Vista_Inicio'])->name('vista.inicio');
Route::get('/login/logout', [LoginController::class, 'Logout'])->name('login.logout');