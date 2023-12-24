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
Route::group(['domain' => 'admin.yourapp.com'], function () {
    Route::resource('posts', PostController::class);
    Route::get('posts/{post}/comments', [PostController::class, 'showComments']);
    Route::delete('comments/{comment}', [CommentController::class, 'destroy']);
});

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('posts/{post}/comments', [CommentController::class, 'store']);
