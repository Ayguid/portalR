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
    // return view('welcome');
    return redirect(route('home'));
});


// User/provider routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/liquidacion', 'HomeController@showLiquidation')->name('liquidation');



//admin routes
Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout',  'Auth\AdminLoginController@logout')->name('admin.logout');
  //Password reset Routes
  Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  //provider routes
  Route::get('/proveedores', 'ProviderController@index')->name('admin.showProviders');
  Route::get('/proveedor/{id}', 'ProviderController@show')->name('admin.showProvider');
  Route::post('/addProvider', 'ProviderController@store')->name('admin.addProvider');

});
