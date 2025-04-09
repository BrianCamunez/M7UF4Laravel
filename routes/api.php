<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/estudiantes', [StudentController::class, 'index']);

Route::get('/estudiantes/{id}', [StudentController::class, 'show']);
Route::post('/estudiantes', function (Request $request) {
    return "Estudiante creado";
});

Route::put('/estudiantes/{id}', function ($id) {
    return "Estudiante con ID: $id actualizado";
});

Route::patch('/estudiantes/{id}', function ($id) {
    return "Estudiante con ID: $id actualizado parcialmente";
});

Route::delete('/estudiantes/{id}', function ($id) {
    return "Estudiante con ID: $id eliminado";
});
