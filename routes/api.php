<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

Route::get('/test', [ArticlesController::class, 'test']);