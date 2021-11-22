<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuizController;
use App\Models\Answer;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'login')->name('user.login');
// Route::get('register',[LoginController::class, 'register'])->name('user.register');
Route::post('login',[LoginController::class, 'login'])->name('login');
Route::post('logout',[LoginController::class, 'logout'])->name('logout');
Route::post('user/create',[LoginController::class, 'create'])->name('user.create');
Route::get('user/register',[LoginController::class, 'register'])->name('user.register');
Route::get('user/perfil',[LoginController::class, 'perfil'])->name('user.perfil');

Route::get('quiz/show/{id}',[QuizController::class, 'show'])->name('quiz.show');
Route::get('quiz/create/{id}',[QuizController::class, 'create'])->name('quiz.create');
Route::get('quiz/questions/{id}',[QuizController::class, 'questions'])->name('quiz.questions');

Route::post('quiz/answers/create',[AnswerController::class, 'create'])->name('answer.create');
Route::get('quiz/answers/show/{id}',[AnswerController::class, 'show'])->name('answer.show');

