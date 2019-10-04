<?php


Route::get('/index', 'PostController@index')-> name('postIndex');
Route::get('/create', 'PostController@create')-> name('postCreate');
Route::post('/store', 'PostController@store')-> name('postStore');
Route::get('/{id}/edit', 'PostController@edit')-> name('postEdit');
Route::post('/{id}/update', 'PostController@update')-> name('postUpdate');
Route::get('/{id}/delete', 'PostController@destroy')-> name('postDelete');
