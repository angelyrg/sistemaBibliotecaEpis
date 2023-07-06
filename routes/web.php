<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ReportesController;



Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UsuariosController::class);
Route::resource('libros', LibrosController::class);
Route::resource('reportes', reportesController::class);

// Route::get('/users/create', [UsuariosController::class,'create']);

Route::get('/userpage', function () {
    return view('userpage.page.index', [
        'header' => view('userpage.includes.header'),
        'footer' => view('userpage.includes.footer'),
    ]);
});



