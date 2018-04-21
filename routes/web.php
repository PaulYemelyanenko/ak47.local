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
    return view('home');
});
Route::post('/signup', [
	'uses' => 'UserController@postSignUp',
	'as' => 'signup'
]);
Route::get('/dashboard', [
	'uses' => 'UserController@getDashboard',
	'as' => 'dashboard'
]);
Route::post('/signin', [
	'uses' => 'UserController@postSignIn',
	'as' => 'signin'
]);
Route::post('/store', 'ImageController@storeImages')->name('store');
Route::get('/layout/storage/layouts_preview/{layout}/{user_id}', 'LayoutController@getLayout');
Route::get('/collage/storage/images/{photo}/{layout}/{position}', 'CollageController@makeCollage');
Route::get('/preview', 'LayoutController@preview');
Route::get('/destroy', 'LayoutController@destroy');
Route::get('/save', 'LayoutController@save');
Route::get('/show/{user_id}', 'LayoutController@show');
Route::get('/download/{user_id}', 'LayoutController@download');