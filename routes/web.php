<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/exclusive', 'HomeController@exclusive');
Route::get('/detail/{slug}', 'HomeController@detail');
Route::get('/products', 'HomeController@product');
Route::get('/membership', 'HomeController@membership');

Route::get('/cart', 'CartController@view');
Route::post('/add-cart/{item_id}', 'CartController@addcart');
Route::get('/delete-cart/{item_id}', 'CartController@deletecart');
Route::post('/update-cart/{item_id}', 'CartController@updatecart');
Route::post('/checkout', 'CartController@checkout');

Route::get('/wishlist', 'WishlistController@view');
Route::get('/delete-wishlist/{wishlist_id}', 'WishlistController@deletewishlist');
Route::post('/wishlist-status/{status}/{item_id}', 'WishlistController@wishlist');

Route::get('/profile', 'UserController@viewprofile');
Route::post('/edit-profile', 'UserController@editprofile');
Route::get('/transactions', 'TransactionController@view');

Route::get('/admin-dashboard', 'AdminController@dashboard');

Route::get('/admin-category', 'AdminController@category');
Route::post('/admin-add-category', 'AdminController@addcategory');
Route::post('/admin-edit-category/{category_id}', 'AdminController@editcategory');
Route::get('/admin-delete-category/{category_id}', 'AdminController@deletecategory');

Route::get('/admin-products', 'AdminController@products');
Route::post('/admin-add-product', 'AdminController@addproduct');
Route::post('/admin-edit-product/{product_id}', 'AdminController@editproduct');
Route::get('/admin-delete-product/{product_id}', 'AdminController@deleteproduct');

Route::get('/admin-item-assigned', 'AdminController@itemassigned');
Route::post('/admin-add-item-assigned', 'AdminController@additemassigned');
Route::post('/admin-edit-item-assigned/{itemassigned_id}', 'AdminController@edititemassigned');
Route::get('/admin-delete-item-assigned/{itemassigned_id}', 'AdminController@deleteitemassigned');

Route::get('/admin-users', 'AdminController@users');
Route::get('/admin-users/transactions/{user_id}', 'AdminController@userstransaction');
Route::get('/admin-delete-user/{user_id}', 'AdminController@deleteuser');


Route::get('/admin-transactions', 'AdminController@transactions');

Route::get('/about', function () {
    return view('about');
});