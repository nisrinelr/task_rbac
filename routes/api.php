<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::middleware('role:admin')->group(function () {
        Route::put('/tasks/{id}', [TasksController::class, 'update']);
        Route::post('/tasks', [TasksController::class, 'store']);
        Route::delete('/tasks/{id}', [TasksController::class, 'destroy']);
        Route::get('/users', [AuthController::class, 'index']);
    });
    Route::get('/tasks', [TasksController::class, 'index']);
    Route::get('/tasks/{id}', [TasksController::class, 'show']);
    
    
});
