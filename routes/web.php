<?php

use App\Http\Controllers\StudentCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/enroll', [StudentCourseController::class, 'enrollForm'])->name('enroll');
Route::post('/enroll', [StudentCourseController::class, 'enrollForm_store'])->name('enroll_store');
