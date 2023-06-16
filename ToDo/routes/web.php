<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

# Główna strona internetowa
Route::get('/tasks', [TaskController::class, 'index']);

# Trasa do konkretnego zadania
Route::get('/tasks/{slug}', [TaskController::class, 'show']);

# Trasa do tworzenia zadania
Route::get('/create', [TaskController::class, 'create']);

Route::post('/task', [TaskController::class, 'store']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::post('/done', [TaskController::class, 'updateStatus']);

Route::get('/done', [TaskController::class, 'done']);

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::put('/tasks/{slug}', [TaskController::class, 'update']);



?>
