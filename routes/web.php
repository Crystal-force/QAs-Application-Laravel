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
    return view('welcome');
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/register', 'Auth\RegisterController@index')->name('reigster');

Route::get('/subject', 'SubjectController@index')->name('subject');
Route::get('/question', 'QuestionController@index')->name('question');
Route::get('/answers', 'AnswerController@index')->name('answers');
Route::get('/answer-detail', 'AnswerController@detail');
