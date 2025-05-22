<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsUserAdmin;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MascotaController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware([IsAuthenticated::class])->group(function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('pets', [MascotaController::class, 'mascotasMias']);
    Route::post('pets', [MascotaController::class, 'mascotasMiasInsertar']);
    Route::put('pets/{id}', [MascotaController::class, 'mascotasMiasEditar']);
    Route::patch('pets/{id}', [MascotaController::class, 'mascotasMiasCambiar']);
    Route::delete('pets/{id}', [MascotaController::class, 'mascotasMiasBorrar']);

});

Route::middleware([IsUserAdmin::class])->group(function () {

    Route::get('users/{id}/pets', [MascotaController::class, 'mascotasOtros']);
    Route::get('users/', [AuthController::class, 'usuarios']);
    Route::get('users/{id}', [AuthController::class, 'usuarioConcreto']);
    Route::put('users/{id}', [AuthController::class, 'usuarioConcretoEditar']);
    Route::delete('users/{id}', [AuthController::class, 'usuarioConcretoBorrar']);


});
