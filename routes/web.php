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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

/*
Route::get('/home', 'HomeController@index')->name('home');
*/

Route::get('/', function () {
    return view('frontend.index');
});


Route::group(['middleware' => 'auth'], function()
{

    Route::get('/dashboard','SettingController@index');

    Route::post('submitImg', 'SettingController@store');
    Route::get('settings', 'SettingController@index');
    Route::get('about', 'aboutController@index');
    Route::get('addNewSection', 'aboutController@showAddAbout');
    Route::post('saveSection', 'aboutController@store');
    Route::get('about/{id}', 'aboutController@destroy');
    Route::get('editAbout/{id}', 'aboutController@edit');
    Route::post('saveUpdate/{id}', 'aboutController@update');
    Route::resource('/homeSettings', 'HomeSettingsController');
});

// home route



// contact us route

Route::resource('/contact', 'ContactController');

Route::resource('/testimonial', 'TestimonialController')->middleware('auth');

Route::resource('/category', 'CategoryController')->middleware('auth');

Route::resource('/trip', 'TripsController')->middleware('auth');


Route::get('/profile', 'ProfileController@index')->middleware('auth');

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


Route::post('planTripSubmit','TripsController@planTripSubmit')->middleware('auth');

Route::get('/plannedTrips','TripsController@plannedTrips')->middleware('auth');

Route::get('plan/{id}','TripsController@deleteTrip')->middleware('auth');

Route::get('planShow/{id}','TripsController@showPlan')->middleware('auth');


// contact
Route::Post('submitContact','ContactUsController@submitContact');

Route::get('/messages','ContactUsController@showMessages')->middleware('auth');

Route::get('message/{id}','ContactUsController@deleteMessage')->middleware('auth');

Route::get('messageShow/{id}','ContactUsController@showMessage')->middleware('auth');

Route::post('submitSearch','TripsController@search');