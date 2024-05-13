<?php

use App\Http\Controllers\Api\ExerciseController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PhotoController;
use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Autentikasi
Route::post('login', [LoginController::class, 'store']);
Route::post('register', [RegisterController::class, 'store']);

// Exercise
Route::get('exercise', [ExerciseController::class, 'index']);
Route::get('exercise/{id}', [ExerciseController::class, 'show']);

// Photo
Route::post('exercise/{exercise_id}/upload-photo', [PhotoController::class, 'store']);
