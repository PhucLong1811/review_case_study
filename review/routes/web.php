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
<<<<<<< HEAD
 */
<<<<<<< HEAD

Route::get('/', 'pageController@index')->name('home');

Route::get('/home', 'pageController@homeadmin')->name('homeadmin');

Route::get('logout', 'pageController@LogoutUser')->name('LogoutUser');

Route::get('search', 'pageController@search')->name('search');

Route::group(['prefix' => 'user'], function () {
	Route::group(['prefix' => 'category'], function () {
		Route::get('/', 'categoryController@createCate')->name('create.Category');
		Route::post('/create', 'categoryController@postCate')->name('post.Category');
		Route::get('/list', 'categoryController@listCate')->name('list.Category');

	});
	Route::group(['prefix' => 'restaurant'], function () {
=======


Route::get('/','pageController@index')->name('home');

Route::get('/home','pageController@homeadmin')->name('homeadmin');
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842

		Route::get('/', 'restauController@createRest')->name('create.Restaurant');
		Route::post('/create', 'restauController@postRest')->name('post.Restaurant');

		Route::get('/list', 'restauController@listRest')->name('list.Restaurant');

<<<<<<< HEAD
		Route::get('show/{id}', 'restauController@showRest')->name('show.Restaurant');

<<<<<<< HEAD
Route::get('show/{id}','restauController@showRest')->name('show.Restaurant');

=======
		Route::post('rating/', 'restauController@postPost')->name('post.rating');
	});
	Route::group(['prefix' => 'comment'], function () {
		Route::get('/', 'commentController@createComment')->name('create.Comment');
		Route::post('/create/{id}', 'commentController@postComment')->name('post.Comment');
		Route::get('/list', 'commentController@listComment')->name('list.Comment');
	});
});
=======
>>>>>>> bda1ab1d7d145bd7c245f7b0e81d5a3fa176ef56
Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'category'],function(){
		Route::get('/','categoryController@createCate')->name('create.Category');
		Route::post('/create','categoryController@postCate')->name('post.Category');
		Route::get('/list','categoryController@listCate')->name('list.Category');
	});	
	Route::group(['prefix'=>'restaurant'],function(){
		Route::get('/','restauController@createRest')->name('create.Restaurant');
		Route::post('/create','restauController@postRest')->name('post.Restaurant');
		Route::get('/list','restauController@listRest')->name('list.Restaurant');
		
		Route::post('show/{id}', 'restauController@postPost')->name('rating.Restaurant');
	});
	Route::group(['prefix'=>'comment'],function(){
		Route::get('/','commentController@createComment')->name('create.Comment');
		Route::post('/create','commentController@postComment')->name('post.Comment');
		Route::get('/list','commentController@listComment')->name('list.Comment');
	});
});		
>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842

Route::group(['prefix' => 'login'], function () {
	Route::get('/', 'registerController@Login')->name('Login');
	Route::post('/postLogin', 'registerController@postLogin')->name('post.Login');
	Route::get('logout', 'registerController@LogoutAdmin')->name('Logout');
	Route::get('/create', 'registerController@createRegister')->name('create.Register');
	Route::post('/postcreate', 'registerController@postRegister')->name('post.Register');
});

Route::group(['middleware'=>'adminLogin'],function(){
	Route::group(['prefix' => 'admin'], function () {
		Route::group(['prefix' => 'slider'], function () {
			Route::get('/create', 'sliderController@createSlide')->name('create.Slide');
			Route::post('/create', 'sliderController@postSlide')->name('post.Slide');
			Route::get('/list', 'sliderController@listSlide')->name('list.Slide');
		});
		Route::group(['prefix' => 'register'], function () {

			Route::get('/list', 'registerController@listRegister')->name('list.Register');
			Route::get('edit/{id}', 'registerController@editRegister')->name('edit.Register');
			Route::post('update/{id}', 'registerController@updateRegister')->name('update.Register');
			Route::get('delete/{id}', 'registerController@deleteRegister')->name('delete.Register');
		});

	});
});
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
/*});*/
>>>>>>> bda1ab1d7d145bd7c245f7b0e81d5a3fa176ef56



>>>>>>> 676f2570b296acbe8a1185a89ac25ed859b85842
