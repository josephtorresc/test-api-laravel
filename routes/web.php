<?php

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
Route::get('/usuarios', [ApiController::class, 'index']);
Route::get('/usuarios/nombre={nombre}', [ApiController::class, 'getUserByName']);
Route::get('/usuarios/email={email}', [ApiController::class, 'getUserByEmail']);
Route::get('/usuarios/activos={activo}', [ApiController::class, 'getUserByStatus']);

# Endpoint POST
Route::post('/usuarios', [ApiController::class, 'createUser']);

# Endpoint PUT/PATCH
Route::patch('/usuarios/{id}', [ApiController::class, 'updateUserById']);
Route::patch('/usuarios/email={email}', [ApiController::class, 'updateUserByEmail']);