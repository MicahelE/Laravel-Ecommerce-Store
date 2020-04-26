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


// Route::get('/', function () {
//     return view('welcome');});
    Route::get('/', 'FrontController@index')->name('home');
    Route::get('/shirts', 'FrontController@shirts')->name('shirts');
    Route::get('/shirt/{id}', 'FrontController@shirt')->name('shirt');
    Route::get('/category/{id}', 'FrontController@category')->name('category'); 
    Route::get('/search', 'FrontController@search')->name('search');
    Route::get('/productorder/{id}', 'FrontController@productOrder')->name('productorder');
    // Route::get('/main', function () {
    //     return view('main');});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cart','CartController');
Route::get('/cart/add-items/{id}','CartController@addItems')->name('cart.addItem');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function () {
    Route::get('/', function () {
            return view('admin.index');
        })->name('admin.index');
        Route::resource('product','ProductsController');
        Route::resource('category','CategoriesController');
        Route::get('/orders', 'OrderviewController@index')->name('orders');
    });
    Route::resource('/order', 'OrderController');
    
    Route::resource('/payform', 'PaymentFormController');
  
    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
    Route::resource('/userinfo', 'UserinfoController');
    Route::get('/wishlist/create/{id}','WishlistController@create')->name('wishlist.create');
    // Route::post('/userinfo', 'UserinfoController@store');
    Route::get('/ajaxView', function () {
        return view('front.ajaxView');
    })->name('front.ajaxView');