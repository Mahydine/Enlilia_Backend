<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\ForceJsonResponse;
use App\Http\Middleware\Cors;



Route::middleware([Cors::class, ForceJsonResponse::class])->group(function () {
    Route::post('/login', [AuthController::class, 'login']);

});