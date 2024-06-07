<?php

use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workers', [WorkerController::class, 'index'])->name('workers.index');
Route::get('/workers/show', [WorkerController::class, 'show'])->name('workers.show');
Route::get('/workers/create', [WorkerController::class, 'create'])->name('workers.create');
Route::get('/workers/update', [WorkerController::class, 'update'])->name('workers.update');
Route::get('/workers/delete', [WorkerController::class, 'delete'])->name('workers.delete');
