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


//Homepage
Route::get('/', "HomeController@index");

//Gallery
Route::get('/gallery',"GalleryController@index");
Route::get('/gallery/{category}',"GalleryController@show");


//Our services
Route::get('/services', "ClientQuotesController@index");

//Blog
Route::get('/blog','BlogController@show_all');
Route::get('/blog/{id}','BlogController@index');
Route::get('blog/category/{id}','BlogController@filtercategory');

//Contact
Route::get('/contact', function () {
    return view('contact');
});

//About
Route::get('/about', function () {
    return view('about');
});

//Admin
Route::get('/admin', function () {
    return view('admin');
});


Route::get('/admin', "AdminController@index");

Route::post('/admin/gallery', "AdminController@insertToGallery");
Route::post('/contact/message', "ContactController@insertMessage");
Route::get('/admin/gallery/delete/{id}', "AdminController@deleteGalleryItem");
Route::get('/admin/gallery/edit/{id}', "EditController@index");
Route::post('/admin/gallery/edit/{id}', "EditController@editGalleryItem");

Route::post('/admin/skills', "AdminController@insertSkill");

Route::post('/admin/quotes', "AdminController@insertQuote");
Route::get('/admin/quotes/remove/{id}', "AdminController@removeQuote");

Route::post('/admin/reference', "AdminController@insertReference");
Route::get('/admin/reference/remove/{image_name}', "AdminController@removeReference");

Route::post('/admin/blog','AdminController@insertBlog');
Route::get('/admin/blog/delete/{id}','BlogController@deleteBlog');
Route::get('/admin/blog/edit/{id}','BlogController@editBlog');
Route::post('/admin/blog/edit/{id}','BlogController@updateBlog');

//login
Route::get('/login', "loginController@index");
Route::post('/login', "loginController@authenticate");

