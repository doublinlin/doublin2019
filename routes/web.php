<?php

Route::redirect('/', '/zh');
Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Auth::routes();
    Route::get('/manage', 'ManageController@index')->name('manage');
});
