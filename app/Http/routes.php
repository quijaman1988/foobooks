<?php

Route::group(['middleware' => ['web']], function () {

  Route::get('/', function () {
      return "XXXXXXXXXXXXXXXDDDDDDDDDDD";

  });

  Route::get('/books','BookController@getIndex' );
  Route::get('/books/create','BookController@getCreate' );
  Route::post('/books/create','BookController@postCreate');
  Route::get('/books/{id}','BookController@getShow');

});
