<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/',[\App\Http\Controllers\ComputerController::class,'index'])->name('computer.index');
    Route::post('/create',[\App\Http\Controllers\ComputerController::class, 'addModal']);
    Route::get('/create',[\App\Http\Controllers\ComputerController::class, 'create'])->name('computer.create');
    Route::get('{id}/edit',[\App\Http\Controllers\ComputerController::class,'edit'])->name('computer.edit');
    Route::post('{id}/edit',[\App\Http\Controllers\ComputerController::class, 'update'])->name('computer.update');
    Route::get('/delete/{id}',[\App\Http\Controllers\ComputerController::class, 'delete'])->name('computer.delete');
//    Route::get('/show/{id}',[\App\Http\Controllers\ComputerController::class, 'show']);


