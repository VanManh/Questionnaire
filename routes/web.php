<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/google/redirect', 'Auth\AuthController@redirectToProvider')->name('google.login');
Route::get('/google/callback', 'Auth\AuthController@handleProviderCallback');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'SurveyController@index')->name('home');
    Route::get('/add-survey', 'SurveyController@GetAddSurvey' )->name('GetAddSurvey');
    Route::post('/add-survey', 'SurveyController@PostAddSurvey' )->name('PostAddSurvey');

    Route::get('/view-survey/{id}', 'SurveyController@viewSurvey' )->name('viewSurvey')->where('id', '[0-9]+');
    Route::get('/edit-survey/{id}', 'SurveyController@editSurvey' )->name('editSurvey')->where('id', '[0-9]+');
    Route::get('/delete-survey/{id}', 'SurveyController@deleteSurvey' )->name('deleteSurvey')->where('id', '[0-9]+');

    Route::get('/change-name/{id}', 'SurveyController@getChangeName' )->name('getChangeName')->where('id', '[0-9]+');
    Route::post('/change-name/{id}', 'SurveyController@postChangeName' )->name('postChangeName')->where('id', '[0-9]+');

    Route::get('/add-question/{idSurvey}', 'QuestionController@getAddQuestion' )->name('GetAddQuestion')->where('idSurvey', '[0-9]+');
    Route::post('/add-question/{idSurvey}', 'QuestionController@postAddQuestion' )->name('postAddQuestion')->where('idSurvey', '[0-9]+');

    Route::get('/edit-question/{id}', 'QuestionController@getEditQuestion' )->name('getEditQuestion')->where('id', '[0-9]+');
    Route::post('/edit-question/{id}', 'QuestionController@postEditQuestion' )->name('postEditQuestion')->where('id', '[0-9]+');

    Route::get('/delete-question/{id}', 'QuestionController@deleteQuestion' )->name('deleteQuestion')->where('id', '[0-9]+');

});