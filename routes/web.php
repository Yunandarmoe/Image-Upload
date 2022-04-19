<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'store'])->name('home.store');
Route::get('/{id}/delete', [HomeController::class, 'destroy'])->name('home.destroy');
Route::get('/{id}/download', [HomeController::class, 'download'])->name('home.download');

Auth::routes();

