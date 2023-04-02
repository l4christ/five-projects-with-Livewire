<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('welcome');
})->name('counter');

Route::get('/calculator', [ProjectController::class, "showCalculator"])->name('calculator');
Route::get('/todo', [ProjectController::class, "showTodo"])->name('todo');
Route::get('/cascading-dropdown', [ProjectController::class, "showCascading"])->name('cascading-dropdown');
Route::get('/image-upload', [ProjectController::class, "showImage"])->name('show-image');
