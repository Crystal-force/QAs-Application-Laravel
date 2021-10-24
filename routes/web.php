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
Route::post('/login', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@index')->name('reigster');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/account-setting', 'Auth\RegisterController@account_setting')->name('account-setting');

Route::middleware(['auth'])->group(function(){
    Route::get('/select-category', 'CategoryController@index')->name('select-category')->middleware('auth');;
});

Route::get('/ask-subject', 'SubjectController@index')->name('ask-subject');
Route::get('/solution-subject', 'SubjectController@solutionsubject')->name('solution-subject');
Route::get('/question', 'QuestionController@index')->name('question');
Route::get('/math-question', 'QuestionController@math_question')->name('math-question');
Route::get('/phy-question', 'QuestionController@phy_question')->name('phy-question');
Route::get('/che-question', 'QuestionController@che_question')->name('che-question');
Route::get('/bio-question', 'QuestionController@bio_question')->name('bio-question');
Route::get('/his-question', 'QuestionController@his_question')->name('his-question');
Route::get('/geo-question', 'QuestionController@geo_question')->name('geo-question');
Route::get('/eng-question', 'QuestionController@eng_question')->name('eng-question');
Route::get('/answers', 'AnswerController@index')->name('answers');
Route::get('/math-solution', 'AnswerController@math_solution')->name('math-solution');
Route::get('/allquestions', 'QuestionController@allquestions')->name('allquestions');

