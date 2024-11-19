<?php

use App\Http\Controllers\TalentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(UserController::class)->group(function () {
    Route::post('/users','store');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/users','index');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/users/{id}','show');
});
Route::controller(UserController::class)->group(function () {
    Route::patch('/users/{id}','update');
});
Route::controller(UserController::class)->group(function () {
    Route::delete('/users/{id}','delete');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index');
        Route::post('/users', 'store');
        Route::get('/users/{id}', 'show');
        Route::patch('/users/{id}', 'update');
        Route::delete('/users/{id}', 'delete');
    });

    Route::controller(TalentController::class)->group(function () {
        Route::get('/talents', 'index');
        Route::post('/talents', 'store');
        Route::get('/talents/{id}', 'show');
        Route::patch('/talents/{id}', 'update');
    });
});
