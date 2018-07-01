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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('submitImg', 'SettingController@store');
Route::get('settings', 'SettingController@index');
Route::get('about', 'aboutController@index');
Route::get('addNewSection', 'aboutController@showAddAbout');
Route::post('saveSection', 'aboutController@store');
Route::get('about/{id}', 'aboutController@destroy');
Route::get('editAbout/{id}', 'aboutController@edit');
Route::post('saveUpdate/{id}', 'aboutController@update');

// home route

Route::resource('/homeSettings', 'HomeSettingsController');

// contact us route

Route::resource('/contact', 'ContactController');

Route::resource('/testimonial', 'TestimonialController');

Route::resource('/category', 'CategoryController');

Route::resource('/trip', 'TripsController');


Route::get('/profile', 'ProfileController@index');

Route::post('profile/update', 'ProfileController@update');


Route::get('front-home', function () {
    return view('frontend.index');
});
Route::get('contactUS',function(){

    return view('frontend.contact');
});

Route::get('/AboutUs',function(){

    return view('frontend.AboutUs');
});

Route::get('planTrip',function(){

    return view('frontend.PlanTrip');
});

Route::get('single',function(){

    return view('frontend.SinglePage');

});

Route::get('tripsFront',function(){

    return view('frontend.Trips');

});

Route::get('/category/showing/{id}','CategoryController@showCategoryWithId');

Route::get('/single/showing/{id}','CategoryController@singleTrip');

// plan my trip


Route::post('planTripSubmit','TripsController@planTripSubmit');

Route::get('/plannedTrips','TripsController@plannedTrips');

Route::get('plan/{id}','TripsController@deleteTrip');

Route::get('planShow/{id}','TripsController@showPlan');


// contact
Route::Post('submitContact','ContactUsController@submitContact');

Route::get('/messages','ContactUsController@showMessages');

Route::get('message/{id}','ContactUsController@deleteMessage');

Route::get('messageShow/{id}','ContactUsController@showMessage');

Route::post('submitSearch','TripsController@search');