<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});

# Endpoint GET
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuarios/nombre={nombre}', [UserController::class, 'getUserByName']);
Route::get('/usuarios/email={email}', [UserController::class, 'getUserByEmail']);
Route::get('/usuarios/activos={activo}', [UserController::class, 'getUserByStatus']);

# Endpoint POST
Route::post('/usuarios', [UserController::class, 'createUser']);

# Endpoint PUT/PATCH
Route::patch('/usuarios/{id}', [UserController::class, 'updateUserById']);
Route::patch('/usuarios/email={email}', [UserController::class, 'updateUserByEmail']);