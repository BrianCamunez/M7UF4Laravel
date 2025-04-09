<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', function () {
    return view('peliculas');
});

Route::get('/suma', function () {
    return view('suma');
});

Route::post('/suma', function () {
    $numero1 = request('numero1');
    $numero2 = request('numero2');
    $resultado = $numero1 + $numero2;

    return view('suma', ['resultado' => $resultado]);
});

