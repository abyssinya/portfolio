<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'throttle:api'] )->group(function () {
    Route::get('/user', function (Request $request) {
    return $request->user();
    })->middleware('auth:sanctum');

    Route::apiResource('projects', \App\Http\Controllers\Api\ProjectController::class);
});
