<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

#main website
Route::get('/task', [TaskController::class, 'index']);

#route to specified task
Route::get('/task/{slug}', [TaskController::class, 'show']);

#route to create task
Route::get('/create', [TaskController::class, 'create']);

#store a new task
Route::post('/task', [TaskController::class, 'store']);
