<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [pageController::class,'home'])->name('home');
Route::get('/about', [pageController::class,'about'])->name('about');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::get('/projects', [pageController::class, 'projects'])->name('projects');