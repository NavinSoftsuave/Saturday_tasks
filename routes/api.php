<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\RoleController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//one to one
Route::post('/users/{id}/profile', [ProfileController::class, 'create']);
Route::get('/users/{id}/profile', [ProfileController::class, 'get']);

//one to many
Route::post('/users/{userId}/posts', [PostController::class, 'create']);
Route::get('/users/{userId}/posts', [PostController::class, 'get']);

//many to many

Route::post('/users/{userId}/roles', [RoleController::class, 'assign']);
Route::get('/users/{userId}/roles', [RoleController::class, 'getRoles']);
