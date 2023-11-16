<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/drugs', [App\Http\Controllers\DrugController::class, 'index'])->name('drugs.index');
    Route::get('/drugs/create', [App\Http\Controllers\DrugController::class, 'create'])->name('drugs.create');
    Route::post('/drugs', [App\Http\Controllers\DrugController::class, 'store'])->name('drugs.store');
    Route::get('/drugs/{drug}', [App\Http\Controllers\DrugController::class, 'show'])->name('drugs.show');
    Route::get('/drugs/{drug}/edit', [App\Http\Controllers\DrugController::class, 'edit'])->name('drugs.edit');
    Route::patch('/drugs/{drug}', [App\Http\Controllers\DrugController::class, 'update'])->name('drugs.update');
    Route::delete('/drugs/{drug}', [App\Http\Controllers\DrugController::class, 'destroy'])->name('drugs.destroy');
});
