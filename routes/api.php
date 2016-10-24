<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

/**
 * ==================================================================
 *  BOOKS ROUTES
 * ================================================================== 							
 */
Route::get('/books', ['uses' => 'Api\BooksController@index', 'as' => 'api.books.index']);
Route::get('/books/{id}', ['uses' => 'Api\BooksController@show', 'as' => 'api.books.show']);
Route::delete('/books/{id}', ['uses' => 'Api\BooksController@destroy','as' => 'api.books.destroy']);
Route::patch('/books/{id}', ['uses' => 'Api\BooksController@update', 'as' => 'api.books.update']);
