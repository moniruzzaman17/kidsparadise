<?php

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

Route::get('/', 'WelcomeController@index')->name('index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('{any}', 'WelcomeController@index')->where('any','.*');


// Route::group([
// 	'prefix' => 'admincp'], function () {

		Route::get('admincp', 'admin\IndexController@index')->name('admin.home');
	// });