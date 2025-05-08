<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\TargetaController;

Route::get('/user', function (Request $request) {
    return $request->user();
 })->middleware('auth:sanctum');


Route::get('/targeta', [TargetaController::class, 'index']);

Route::get('/targeta/{id}', [TargetaController::class, 'show']);



Route::post('/targeta', [TargetaController::class, 'store']);

Route::patch('/targeta/{id}', [TargetaController::class, 'updatePartial']);

Route::put('/targeta/{id}', [TargetaController::class, 'update']);

Route::delete('/targeta/{id}', [TargetaController::class, 'destroy']);



