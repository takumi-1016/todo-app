<?php

use Illuminate\Support\Facades\Route;

Route::get('/folders/{id}/tasks', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

Route::get('/folders/create', [\App\Http\Controllers\FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [\App\Http\Controllers\FolderController::class, 'create']);

Route::get('/folders/{id}/tasks/create', [\App\Http\Controllers\TaskController::class, 'showCreateForm'])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [\App\Http\Controllers\TaskController::class, 'create']);

Route::get('/folders/{id}/tasks/{task_id}/edit', [\App\Http\Controllers\TaskController::class, 'showEditForm'])->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', [\App\Http\Controllers\TaskController::class, 'edit']);

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
