<?php

use Illuminate\Support\Facades\Route;

Route::get('/folders/{id}/tasks', [\App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');

Route::get('/folders/create', [\App\Http\Controllers\FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [\App\Http\Controllers\FolderController::class, 'create']);
