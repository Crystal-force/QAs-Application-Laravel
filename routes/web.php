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
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/account-setting', 'Auth\RegisterController@account_setting')->name('account-setting');

Route::middleware(['auth'])->group(function(){
    // Auth::routes();
    Route::get('/select-category', 'CategoryController@index')->name('select-category')->middleware('auth');
    Route::get('/ask-subject', 'SubjectController@index')->name('ask-subject')->middleware('auth');
    Route::get('/solution-subject', 'SubjectController@solutionsubject')->name('solution-subject')->middleware('auth');
    Route::get('/question', 'QuestionController@index')->name('question')->middleware('auth');
    Route::get('/question-post/{id?}', 'QuestionController@question_post')->name('question-post')->middleware('auth');
    Route::get('/phy-question/{id?}', 'QuestionController@phy_question')->name('phy-question')->middleware('auth');

    Route::post('/upload-question-file', 'QuestionController@upload_file')->middleware('auth');
    Route::post('/question-upload', 'QuestionController@question_upload')->middleware('auth');
    Route::get('/answers', 'AnswerController@index')->name('answers')->middleware('auth');
});





Route::get('/che-question', 'QuestionController@che_question')->name('che-question');
Route::get('/bio-question', 'QuestionController@bio_question')->name('bio-question');
Route::get('/his-question', 'QuestionController@his_question')->name('his-question');
Route::get('/geo-question', 'QuestionController@geo_question')->name('geo-question');
Route::get('/eng-question', 'QuestionController@eng_question')->name('eng-question');
Route::get('/answers', 'AnswerController@index')->name('answers');
Route::get('/solution', 'AnswerController@math_solution')->name('solution');
Route::get('/allquestions', 'QuestionController@allquestions')->name('allquestions');

