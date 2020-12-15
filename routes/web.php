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
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');


Route::get('/timeline', 'Frontend\TimelineController@index')->name('timeline')->middleware('auth');
Route::get('/profile', 'Frontend\TimelineController@profile')->name('my.profile');


Route::resource('/posts', 'Frontend\PostController');
Route::post('/posts/search', 'Frontend\PostController@search');
Route::resource('/reactions', 'Frontend\ReactionsController');
Route::get('/getLike', 'Frontend\ReactionsController@getLike');
Route::get('/getTotalLike', 'Frontend\ReactionsController@getTotalLike');
Route::get('/markAsRead', 'Frontend\ReactionsController@markAsRead');

Route::resource('/comments', 'Frontend\CommentsController');


Route::get('/followers', 'Frontend\FollowersController@index');
Route::post('/followers', 'Frontend\FollowersController@store');
Route::post('/followersMarkAsRead', 'Frontend\FollowersController@markAsRead');


Route::get('/getContacts', 'Frontend\MessagesController@getContacts');
Route::post('/sendMessage', 'Frontend\MessagesController@store');
Route::get('/getMessage/{id}', 'Frontend\MessagesController@index');
Route::get('/getAllMessage', 'Frontend\MessagesController@get');



Route::get('/clear', function(){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:cache');
    Artisan::call('storage:link');
    Artisan::call('migrate:fresh --seed');

    return 'All clear';
});








