<?php

use App\Http\Controllers\projectController;
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

Route::get('/',[projectController::class,'HomePage']);



//page route
Route::get('tailwind',[projectController::class,'tailwindPage']);
Route::get('laravel',[projectController::class,'laravelPage']);
Route::get('/bootstrap',[projectController::class,'bootstrapPage']);
Route::get('/projects',[projectController::class,'projects']);

