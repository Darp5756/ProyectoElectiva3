<?php

use App\Http\Controllers\LoginController;
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

//Login
Route::get('/login/login', [LoginController::class, 'Vista_Login'])->name('login.vista.login');
Route::post('/login/login', [LoginController::class, 'Login'])->name('login.login');
Route::get('/login/registro', [LoginController::class, 'Vista_registro'])->name('login.vista.registro');
Route::post('/login/registro', [LoginController::class, 'Registro'])->name('login.registro');
Route::get('/login/inicio', [LoginController::class, 'Vista_Inicio'])->name('login.vista.inicio');
Route::get('/login/logout', [LoginController::class, 'Logout'])->name('login.logout');