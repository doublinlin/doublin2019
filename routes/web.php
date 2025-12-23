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

Route::group(['prefix' => '/works'], function () {
Route::get('/Gallery/{language}', 'GalleryController@index')->name('works.Gallery');
Route::get('/Design/{language}', 'DesignController@index')->name('works.Design');
Route::get('/UIWebDesign/{language}', 'UIWebDesignController@index')->name('works.UIWebDesign');
Route::get('/Photo/{language}', 'PhotoController@index')->name('works.Photo');
Route::get('/Video/{language}', 'VideoController@index')->name('works.Video');
});