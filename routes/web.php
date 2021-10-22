<?php

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
    return view('index');
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/register', 'Auth\RegisterController@index')->name('reigster');

Route::get('/select-category', 'CategoryController@index')->name('select-category');
Route::get('/ask-subject', 'SubjectController@index')->name('ask-subject');
Route::get('/solution-subject', 'SubjectController@solutionsubject')->name('solution-subject');
Route::get('/question', 'QuestionController@index')->name('question');
Route::get('/answers', 'AnswerController@index')->name('answers');
Route::get('/allquestions', 'QuestionController@allquestions')->name('allquestions');
