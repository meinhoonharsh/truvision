<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/register', 'App\Http\Controllers\UserController@register');
// Route::post('/login', 'App\Http\Controllers\LoginController@login');
// Route::get('/user', 'App\Http\Controllers\UserController@getUserDetails')->middleware('auth:sanctum');

Route::post('/register', [Controller::class, 'register']);
Route::post('/login', [Controller::class, 'login']);
Route::get('/user', [Controller::class, 'getUserDetails'])->middleware('auth:sanctum');