<?php



Route::group(['middleware' => ['web']], function () {

  Route::get('/', function () {
      return "XXXXXXXXXXXXXXXDDDDDDDDDDD";

  });

  Route::get('/books','BookController@getIndex' );
  Route::get('/books/create','BookController@getCreate' );
  Route::post('/books/create','BookController@postCreate');
  Route::get('/books/{id}','BookController@getShow');

  Route::get('/practice', function (){

    $random = new Random();
   return $random->getRandomString(25);

   //return 'Practice';
  });

});
