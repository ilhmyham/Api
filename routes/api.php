<?php

use App\Http\Controllers\training2controller;
use App\Http\Controllers\training3Controller;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/training', [training3controller::class, 'index'])->middleware('auth.apikey');

// Route::get('/training/{id}', [training3controller::class, 'show']);

// Route::post('/training', [training3controller::class, 'store']);

// Route::put('/training/{id}', [training3controller::class, 'update']);

// Route::delete('/training/{id}', [training3controller::class, 'destroy']);

Route::resource('/coba', training3Controller::class);;
