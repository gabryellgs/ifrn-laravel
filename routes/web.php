<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/noticia', function () {
    return view('institucional');
})->name('noticia');

Route::get('/noticia2', function () {
    return view('pe-de-meia');
})->name('noticia2');
