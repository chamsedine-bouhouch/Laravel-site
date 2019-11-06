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



Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutController@showabout');
Route::get('/services', 'ServicesController@showservices');
Route::get('/single-service', 'SingleServiceController@show_single_service');
Route::get('/projects', 'ProjectsController@showprojects');
Route::get('/blog', 'BlogController@showblog');
Route::get('/single-blog', 'SingleBlogController@show_single_blog');
// Route::get('/contact', 'ContactController@showcontact');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
Route::get('home', 'EmailController@getForm');
Route::post('home', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);
Route::get('home', 'PostController@getForm');
Route::post('home', ['uses' => 'PostController@postForm', 'as' => 'storeEmail']);