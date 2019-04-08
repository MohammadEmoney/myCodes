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
    return view('front.home');
});

Route::namespace('Admin')->prefix('admin')->group(function (){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('posts', 'PostController');
    Route::resource('users', 'UserController');
    Route::resource('comments', 'CommentController');
    Route::resource('categories', 'CategoryController');
});

//Front
Route::get('blog', 'BlogController@index')->name('blog.index');
Route::get('post/{post}', 'BlogController@show')->name('post.show');
Route::post('comment', 'CommentController@create')->name('create.comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


