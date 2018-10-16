<?php



Route::get('/','PostController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}/delete','HomeController@delete')->name('post.delete');

Route::get('/posts','HomeController@addNew')->name('post.addNew');

Route::get('/posts/create' ,'HomeController@addNew')->name('post.index');

Route::get('/post/{id}/edit' ,'HomeController@edit')->name('post.edit');

Route::get('/post-simple/{id}','PostController@simple')->name('posts.simple');

Route::get('search','PostController@search')->name('posts.search');




