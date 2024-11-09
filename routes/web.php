<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//RUTAS DE USUARIO
Route::get('/usuario',[UserController::class,'index']);
Route::get('/usuario/crear',[UserController::class,'create']);
Route::get('/usuario/{user}',[UserController::class,'show']);
Route::post('/usuario',[UserController::class,'store']);
Route::get('/usuario/{user}/editar',[UserController::class,'edit']);
Route::put('/usuario/{user}',[UserController::class,'update']);
Route::delete('/usuario/{user}',[UserController::class,'destroy']);

//RUTAS DE LOGIN
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', function () {
    return view('auth.home'); 
})->name('home');

//RUTAS DE LIBRO
Route::get('/libro',[BookController::class,'index']);
Route::get('/libro/crear',[BookController::class,'create']);
Route::get('/libro/{book}',[BookController::class,'show']);
Route::post('/libro',[BookController::class,'store']);
Route::get('/libro/{book}/editar',[BookController::class,'edit']);
Route::put('/libro/{user}',[BookController::class,'update']);
Route::delete('/libro/{user}',[BookController::class,'destroy']);

//RUTAS DE RESEÑA
Route::get('/reseña',[ReviewController::class,'index']);
Route::get('/reseña/crear',[ReviewController::class,'create']);
Route::get('/reseña/{review}',[ReviewController::class,'show']);
Route::post('/reseña',[ReviewController::class,'store']);
Route::get('/reseña/{review}/editar',[ReviewController::class,'edit']);
Route::put('/reseña/{review}',[ReviewController::class,'update']);
Route::delete('/reseña/{review}',[ReviewController::class,'destroy']);