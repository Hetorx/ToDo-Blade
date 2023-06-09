<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

#main website
Route::get('/tasks', [TaskController::class, 'index']);

#route to specified task
Route::get('/task/{slug}', [TaskController::class, 'show']);

#route to create task
Route::get('/tasks/create', [TaskController::class, 'create']);

#store a new task
Route::post('/tasks', [TaskController::class, 'store']);
