<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\TargetaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartidasController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUserAth;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('/targeta', [TargetaController::class, 'index']);
Route::get('/targeta/{id}', [TargetaController::class, 'show']);

Route::middleware([IsUserAth::class])->group(function () {
    Route::post('/targeta', [TargetaController::class, 'store']);
    Route::post(('logout'), [AuthController::class, 'logout']);
    Route::get('me', [AuthController::class, 'getUser']);
    Route::get('partidas', [PartidasController::class, 'index']);
    Route::post('partidas', [PartidasController::class, 'store']);
    Route::put('partidas/{id}/acabada', [PartidasController::class, 'update']);
    Route::delete('partidas/{id}', [PartidasController::class, 'destroy']);
    Route::get('/ranking', [PartidasController::class, 'ranking']);
    Route::get('partidas/user/{id}', [PartidasController::class, 'getPartidasByUserId']);
});

Route::middleware([IsAdmin::class ])->group(function () {
    Route::patch('/targeta/{id}', [TargetaController::class, 'updatePartial']);
    Route::put('/targeta/{id}', [TargetaController::class, 'update']);
    Route::delete('/targeta/{id}', [TargetaController::class, 'destroy']);
    Route::get('/partidasAdmin', [PartidasController::class, 'adminIndex']);
    Route::get('/usuarios', [AuthController::class, 'index']);
    Route::put('/usuarios/{id}', [AuthController::class, 'update']);
    Route::delete('/usuarios/{id}', [AuthController::class, 'destroy']);
});


