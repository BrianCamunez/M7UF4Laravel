<?php

use App\Http\Controllers\MovilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('movils', MovilController::class);
