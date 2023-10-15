<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;



Route::view('/home', 'pages.home')->name('home');

Route::get('/courses', [CourseController::class , 'index'])
->name('courses');

Route::view('/create', 'pages.create')->name('create');

Route::post('/store', [CourseController::class , 'store'])
->name('store');

Route::get("/courses/{id}", [CourseController::class , 'show'])
->name('details');

Route::get("/courses/{id}/edit", [CourseController::class , 'edit'])
->name('edit');

Route::put("/courses/{id}", [CourseController::class , 'update'])
->name('update');

Route::delete('/courses/{id}', [CourseController::class , 'destroy'])
->name('destroy');