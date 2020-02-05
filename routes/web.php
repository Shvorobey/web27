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

Route::get('/', 'IndexController@Main')->name('index');

Route::get('/about', 'PageController@About')->name('about');

Route::get('/contacts', 'PageController@Contacts')->name('contacts');

Route::get('/contacts', 'PageController@Contacts')->name('contacts');

Route::get('/author/{key}', Posts_by_authorController::class)->name('posts_by_autor');

Route::get('/category/{key}', Posts_by_categoryController::class)->name('posts_by_category');

Route::get('/post/{id}', SinglePostController::class)->name('single_post');

Route::get('/admin/all', 'AdminAllController@all')->name('admin_all');

Route::get('/admin/categories', 'AdminAllController@category')->name('admin_category');

Route::get('/admin/add_post', 'Admin_postController@add')->name('add_post_get');

Route::post('/admin/add_post', 'Admin_postController@save')->name('add_post_post');

Route::get('/admin/edit_post/{id}', 'Admin_postController@edit')->name('edit_post_get');

Route::post('/admin/edit_post/{id}', 'Admin_postController@edit_save')->name('edit_post_post');

Route::get('/admin/delete_post', 'Admin_postController@delete')->name('delete_post_get');

Route::delete('/admin/delete_post', 'Admin_postController@delete')->name('delete_post_get');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
