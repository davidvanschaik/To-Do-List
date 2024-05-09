<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// je kan ID en update omdraaien

Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::post('/tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::get('/tasks/{id}', [TaskController::class, 'show'])
    ->name('tasks.show');

Route::post('/tasks/update/{id}', [TaskController::class, 'update'])
    ->name('tasks.update');

Route::post('/tasks/complete/{id}', [TaskController::class, 'complete'])
    ->name('tasks.complete');

Route::post('/tasks/uncomplete/{id}', [TaskController::class, 'uncomplete'])
    ->name('tasks.uncomplete');

Route::get('/tasks/delete/{id}', [TaskController::class, 'delete'])
    ->name('tasks.delete');

