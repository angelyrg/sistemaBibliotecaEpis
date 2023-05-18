<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
<<<<<<< HEAD
use App\Http\Controllers\LibrosController;
=======
>>>>>>> ce7cfa5646d991a342ff90a3db51bd484de5b088


Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
// Route::get('/users/create', [UsuariosController::class,'create']);

Route::resource('users', UsuariosController::class);
Route::resource('libros', LibrosController::class);
=======
>>>>>>> ce7cfa5646d991a342ff90a3db51bd484de5b088
