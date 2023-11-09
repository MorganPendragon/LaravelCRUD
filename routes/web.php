<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;


Route::get('/', [SubjectController::class, 'index']);
Route::get('/subjects/create', [SubjectController::class, 'create']);
Route::post('/subjects/add/', [SubjectController::class, 'store']);

Route::get('/subjects/edit/{id}', [SubjectController::class, 'edit']);
Route::post('/subjects/update/', [SubjectController::class, 'update']);

Route::delete('/subjects/delte/{id}', [SubjectController::class,'destroy']) ->name('subject.destroy');

Route::resource('/subjects', '\App\Http\Controllers\SubjectController');
