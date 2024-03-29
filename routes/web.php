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


// Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@showabout');
// 
Route::resource('services', 'ServicesController');
Route::get('/single-service', 'SingleServiceController@show_single_service');
Route::get('/projects', 'ProjectsController@showprojects');
Route::get('/blog', 'BlogController@showblog');
Route::get('/single-blog', 'SingleBlogController@show_single_blog');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('/', 'EmailController@getForm');
Route::post('/form1', 'EmailController@techForm')->name('storePost');
Route::post('/form2',  'EmailController@postForm')->name('storeEmail');

// // Route::post('home', ['uses' => 'EmailController@postForm', 'as' => 'storePost']);
// // Route::get('home', 'PostController@getForm');
Route::get('demand-1', function () {
    return view('demand-1');
});
Route::get('demand-2', function () {
    return view('demand-1');
});
// Route::get('demand-3', function () {
//     return view('db-test');
// });
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');