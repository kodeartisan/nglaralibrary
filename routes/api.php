<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 
 Route::post('/login', ['uses' => 'Api\AuthController@login', 'as' => 'api.auth.login']);
 Route::delete('/logout', ['uses' => 'Api\AuthController@logout', 'as' => 'api.auth.logout']);


 Route::group([ ], function() {

	/**
	 * ==================================================================
	 *  BOOKS ROUTES
	 * ================================================================== 							
	 */
	Route::get('/books', ['uses' => 'Api\BooksController@index', 'as' => 'api.books.index']);
	Route::get('/books/{id}', ['uses' => 'Api\BooksController@show', 'as' => 'api.books.show']);
	Route::delete('/books/{id}', ['uses' => 'Api\BooksController@destroy','as' => 'api.books.destroy']);
	Route::patch('/books/{id}', ['uses' => 'Api\BooksController@update', 'as' => 'api.books.update']);



	/**
	 * ==================================================================
	 *  CATEGORIES ROUTES
	 * ================================================================== 							
	 */

	Route::get('/categories', ['uses' => 'Api\CategoriesController@index', 'as' => 'api.categories.index']);

	Route::post('/categories', ['uses' => 'Api\CategoriesController@store', 'as' => 'api.categories.store']);

	Route::get('/categories/{id}', ['uses' => 'Api\CategoriesController@show', 'as' => 'api.categories.show']);

	Route::delete('/categories/{id}', ['uses' => 'Api\CategoriesController@destroy', 'as' => 'api.categories.destroy']);

	Route::patch('/categories/{id}', ['uses' => 'Api\CategoriesController@destroy', 'as' => 'api.categories.update']);

});


