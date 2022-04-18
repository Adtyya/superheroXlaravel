<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\handleAnggota;
use App\Http\Controllers\skillController;

Route::get('/', [handleAnggota::class, ('home')]);
Route::get('skill/tambah', [skillController::class , ('home')]);
Route::get('skill/tambah/hero', [skillController::class, ('listHero')]);
Route::resource('list', handleAnggota::class);
Route::resource('skill', skillController::class);