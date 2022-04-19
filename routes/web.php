<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\handleAnggota;
use App\Http\Controllers\skillController;
use App\Http\Controllers\NikahController;

Route::get('/', [handleAnggota::class, ('home')]);
Route::get('skill/tambah', [skillController::class , ('home')]);
Route::get('skill/tambah/hero/{id}', [skillController::class, ('listHero')]);
Route::post('skill/tambah/hero/{id}', [skillController::class, ('updateskill')]);
Route::get('/remove/{hero}/{skill}', [skillController::class, ('removeskill')]);
Route::get('/menikah', [NikahController::class, ('index')]);
Route::get('/downloadpdfhero', [handleAnggota::class, ('cetakpdf')]);
Route::post('/menikah/skill', [NikahController::class, ('show')]);
Route::resource('list', handleAnggota::class);
Route::resource('skill', skillController::class);