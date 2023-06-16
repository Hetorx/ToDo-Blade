<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/tasks/{slug}', [TaskController::class, 'show']);

Route::get('/create', [TaskController::class, 'create']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::post('/done', [TaskController::class, 'updateStatus']);

Route::get('/done', [TaskController::class, 'done']);

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::put('/tasks/{slug}', [TaskController::class, 'update']);

Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');


