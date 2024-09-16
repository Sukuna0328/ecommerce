<?php

use App\Models\Role;

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
use Illuminate\Support\Facades\Request;


Route::get('/', function () {

    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/role/add', 'HomeController@createRole')->name('add');

Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/admin', 'HomeController@admin')->name('admin');

Route::get('/product', 'HomeController@product')->name('product');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/checkout', 'HomeController@checkout')->name('checkout');

Route::get('/customer/home', 'CustomerController@home')->name('customer')->middleware('auth');;

Route::get('/products/{id}', 'ProductController@show');

Route::get('/shipping', 'HomeController@shipping')->name('shipping');

Route::post('/posts/create', 'ProductController@store')->name('posts.create');









