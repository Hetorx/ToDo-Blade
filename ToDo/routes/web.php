<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

#main website
Route::get('/', [TaskController::class, 'index']);

#others subwebsites
Route::get('/task/{slug}', [TaskController::class, 'show']);

