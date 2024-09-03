<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\DisciplinaController;

Route::resource('professores', ProfessorController::class);
Route::resource('disciplinas', DisciplinaController::class);
