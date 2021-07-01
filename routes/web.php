<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\VacancyController;

Route::get('/', [PageController::class, 'home'])->name('home');

// Route::get('/', [VacancyController::class, 'vacancy'])->name('vacancy');

Route::get('vacante/{vacancy:id}', [pageController::class, 'vacancy'])->name('vacancy');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::get('vacante',[VacanciesController::class, 'vacancies'])->name('course');

Route::resource('vacancies', VacanciesController::class)->except('show')->names('admin.vacancies');
