<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/noticia', function () {
    return view('institucional');
});

Route::get('/noticia2', function () {
    return view('pe-de-meia');
});