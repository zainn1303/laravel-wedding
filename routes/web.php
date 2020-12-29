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

// Route::get('/', function () {
//     return view('welcome');
// });

//login action customer and register customer
Route::get('register-customer', 'FrontendController@register');
Route::post('register-customer', 'FrontendController@store');
Route::post('customer-authentication', 'FrontendController@authenticate_login');
Route::get('logout-authentication', 'FrontendController@authenticate_logout');

Route::get('/', 'FrontendController@index');
Route::get('vendor/{id}', 'FrontendController@vendor');
Route::post('vendor/{id}', 'FrontendController@vendor');
Route::get('vendor-detail/{id}', 'FrontendController@vendor_detail');
Route::get('help', 'FrontendController@help');
Route::get('blog', 'FrontendController@blog');
Route::get('blog-detail/{id}', 'FrontendController@blog_detail');

Route::post('tambah-booking-data', 'FrontendController@tambah_booking_data')->middleware('CekCustomer');
Route::get('booking-customer', 'FrontendController@data_booking_customer')->middleware('CekCustomer');
Route::get('apply-booking-customer', 'FrontendController@apply_booking_customer')->middleware('CekCustomer');
Route::get('hapus-booking-customer/{id}', 'FrontendController@data_booking_hapus')->middleware('CekCustomer');
Route::get('riwayat-booking-customer', 'FrontendController@riwayat_booking_customer')->middleware('CekCustomer');

//Admin
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/booking', 'HomeController@booking_data');
Route::get('/booking/edit/{id}', 'HomeController@booking_edit');
Route::post('/booking/update', 'HomeController@booking_update');
Route::get('/booking/detail/{id}', 'HomeController@booking_detail');
Route::get('/testimonial', 'HomeController@testimonial');
Route::get('/testimonial/create', 'HomeController@create_testimonial');
Route::post('/testimonial/store', 'HomeController@store_testimonial');
Route::get('/testimonial/detail/{id}', 'HomeController@detail_testimonial');
Route::get('/testimonial/edit/{id}', 'HomeController@edit_testimonial');
Route::post('/testimonial/update', 'HomeController@update_testimonial');
Route::get('/testimonial/delete/{id}', 'HomeController@delete_testimonial');
Route::get('/setting', 'HomeController@setting_view');
Route::get('/setting/edit', 'HomeController@setting_edit');
Route::post('/setting/update', 'HomeController@setting_update');
