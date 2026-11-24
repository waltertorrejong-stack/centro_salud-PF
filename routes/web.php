<?php

use Illuminate\Support\Facades\Route;
Route::redirect('/', '/inicio');

Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');

/* ------------ ruta de pobladores -------------*/
Route::get('/pobladores', function () {
    return view('pobladores.index');
})->name('pobladores.index');

Route::get('/pobladores/create', function () {
    return view('pobladores.create');
})->name('pobladores.create');

/* ------------ ruta de nacimientos -------------*/
Route::get('/nacimientos', function () {
    return view('nacimientos.index');
})->name('nacimientos.index');

/* ------------ ruta de defunciones -------------*/
Route::get('/defunciones', function () {
    return view('defunciones.index');
})->name('defunciones');

/* ------------ ruta de reportes -------------*/
Route::get('/reportes', function () {
    return view('reportes.index');
})->name('reportes');

/* ------------ ruta de usuarios -------------*/
Route::get('/usuarios', function () {
    return view('usuarios.index');
})->name('usuarios');

/* ------------ ruta de configuracion -------------*/
Route::get('/configuracion', function () {
    return view('configuracion.index');
})->name('configuracion');

