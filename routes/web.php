<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [QuizController::class, 'index']);

Route::get('/quizzes', [CRUDController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/create', [CRUDController::class, 'create'])->name('quizzes.create');
Route::post('/quizzes/store', [CRUDController::class, 'store'])->name('quizzes.store');
Route::get('/quizzes/{quiz}/edit', [CRUDController::class, 'edit'])->name('quizzes.edit');
