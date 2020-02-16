<?php

Route::redirect('/', '/zh');
// Route::group(['prefix' => '{language}'], function () {
//     Route::get('/', 'HomeController@index')->name('Home');
//     Route::get('/ItsMe', 'ItsMeController@index')->name('ItsMe');

//     Auth::routes();
//     Route::get('/Manage', 'ManageController@index')->name('Manage');
// });

// url大小寫很重要
Route::get('/{language}', 'HomeController@index')->name('Home');
Route::get('/ItsMe/{language}', 'ItsMeController@index')->name('ItsMe');