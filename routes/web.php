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

Route::get('/', 'Home@Index')->name('Home');
Route::get('/products/{id}', 'Home@Product')->where('id', '[0-9]+')->name('Show');

Route::get('/products', 'Home@Products')->name('Products');

Route::get('/admin', 'Admin@Login')->name('login');
Route::get('/admin/logout', 'Admin@LogOut')->name('LogOut');
Route::post('/adminPost', 'Admin@LoginPost')->name('LoginPost');
Route::get('/generate', 'Admin@Generate')->name('Generate');
Route::post('/generate', 'Admin@GeneratePost')->name('GeneratePost');
Route::get('/updateShow/{id}', 'Articles@Show')->where('id', '[0-9]+')->name('UpdateShow');

Route::get('/articles', 'Articles@ShowAll')->name('ShowAll');

Route::post('/articles/add', 'Articles@Add')->name('Add');
Route::get('/articles/addShow', 'Articles@AddShow')->name('AddShow');
Route::post('/articles/update/{id}', 'Articles@Update')->name('Update');
Route::post('/articles/delete/{id}', 'Articles@Delete')->name('Delete')->where('id', '[0-9]+');

Route::get('/categories', 'Categories@ShowAll')->name('ShowCategories');
Route::post('/categories/add', 'Categories@Add')->name('AddCategories');
Route::post('/categories/update/{id}', 'Categories@Update')->name('UpdateCategories')->where('id', '[0-9]+');
Route::post('/categories/delete/{id}', 'Categories@Delete')->name('DeleteCategories')->where('id', '[0-9]+');
Route::post('/gallery/delete/{id}', 'Gallery@Delete')->name('DeleteGallery')->where('id', '[0-9]+');
Route::post('/gallery/add', 'Gallery@Add')->name('AddGallery')->where('id', '[0-9]+');
Route::get('/gallery', 'Gallery@ShowAll')->name('ShowGallery');
Route::post('/articles/uploadimage', 'Articles@UploadImage')->name('ArticleUploadImage');
Route::get('/field', 'Fields@Index')->name('Field');
Route::post('/field/update', 'Fields@Update')->name('FieldUpdate');
Route::post('/mail', 'Mails@Send')->name('Mail');