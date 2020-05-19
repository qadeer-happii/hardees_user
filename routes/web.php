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

Auth::routes();

Route::get('/', function () {
    return view('hardees.index');
})->name('index');

Route::get('/order', 'OrderController@order')->name('order');

Route::get('/addbuket', 'OrderController@addbuket')->name('addbuket');

Route::get('/angus', 'OrderController@angus')->name('angus');

Route::get('/contact', 'OrderController@contact')->name('contact');

Route::get('/about', 'OrderController@about')->name('about');

Route::get('/career', 'OrderController@career')->name('career');

Route::get('/privacy', 'OrderController@privacy')->name('privacy');


Route::get('/menu', 'OrderController@menu')->name('menu');

Route::get('/terms', 'OrderController@term')->name('term');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user-login', 'auth\LoginController@userLogin')->name('user-login');
Route::post('/register', 'auth\LoginController@register')->name('register');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/deal/{id}', 'OrderController@dealSelection');
Route::get('/menu/{id}', 'OrderController@menuSelection');
