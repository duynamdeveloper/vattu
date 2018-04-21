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
Route::group([
	'as'=> 'fe.',
	'middleware' => 'web',
	'namespace' => 'Frontend'
	], function(){
		Route::get('/',['as'=>'index','uses'=>'DefaultController@index']);
		Route::get('/shop',['as'=>'shop', 'uses'=>'DefaultController@shop']);
		Route::get('/product',['as'=>'product','uses'=>'DefaultController@product']);
		Route::get('/blog',['as'=>'blog','uses'=>'DefaultController@blog']);
		Route::get('/article',['as'=>'article','uses'=>'DefaultController@article']);
	});
Route::group([
	'as'=> 'be.',
	'middleware' => 'web',
	'namespace' => 'Backend',
	'prefix' => 'admin'
	], function(){
		Route::get('/',['as'=>'index','uses'=>'DefaultController@index']);

		Route::group([
			'as' => 'product.',
			'middleware' => 'web',
			'prefix' => 'product',
		], function(){
			Route::get('/',['as' => 'index','uses' => 'ProductController@index']);
		});
		
	});