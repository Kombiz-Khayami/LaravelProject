<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Layouts.main');
});

Route::get('/migrate', function () {
    dd(\Artisan::call('migrate'));
});

Route::get('/main', "TestingController@index")->name('meme');
Route::get('/testing2', "TestingController@index2");
Route::get('/testing3/{var}/{var2}', "TestingController@index3");
Route::get('/comment/create/{text}', "CommentController@create");
Route::get('/comment/{id}', "CommentController@show");
Route::redirect('/test', 'route(\'meme\')');
Route::view('/v', 'view', ['myVar'=>'hi']);

Route::prefix('Card')->group(function () {
    Route::get('/',"CardController@list");
    Route::get('{name}',"CardController@show");
});

Route::prefix('Collection')->group(function () {
    //Route::get('/',"CardController@list");
    Route::get('{user}',"CollectionController@show");
    Route::get('/',"CollectionController@list");
});

Route::prefix('blog')->group(function () {
    Route::get('/', "BlogController@list");
    //Route::get('{id}', "BlogController@read")->where('id', '[0-9]+');
    Route::get('{id}', "BlogController@read");
    Route::get('create', "BlogController@create");
    Route::get('update', "BlogController@update");
    Route::get('delete', "BlogController@delete");
    
});