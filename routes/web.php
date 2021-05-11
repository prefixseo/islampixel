<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/','HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', function(){
    if(Auth::check()):
        return redirect('/profile');
    else:
        return redirect('/');
    endif;
})->name('home');

// Route::post('/boxmeta', 'HomeController@boxSessionManager')->name('boxManager');
// Route::post('/ajaxGetProfile', 'HomeController@profileWithPixelId')->name('ajaxGetProfile');

// -- Google Login
// Route::get('/login/google', 'auth\LoginController@redirectToGoogle')->name('login.google');
// Route::get('/login/google/callback',  'auth\LoginController@handleGoogleCallback');


// // -- Facebook Login
// Route::get('/login/facebook', 'auth\LoginController@redirectToFacebook')->name('login.facebook');
// Route::get('/login/facebook/callback',  'auth\LoginController@handleFacebookCallback');


// //-- Designs
// // Route::get( '/', 'HomeController@newHome')->name('front');
Route::get( '/', 'HomeController@pixelRequestIndex');
Route::post( '/darudListenedPingback', 'HomeController@darudListenedPingbackCallback');
Route::get( '/picked-pixel/{box_id}', 'HomeController@objectChoice');
Route::post( '/picked-pixel/{box_id}', 'HomeController@uploadCustomEmoji');
Route::get( '/picked-pixel/{boxid}/{emoji_name}', 'HomeController@getUserDetails')
->where('emoji_name' , '[a-z0-9A-Z_\.]+');
Route::post( '/postuserdatapixelrequest', 'HomeController@savePixelRequestWithUserDetails')->name('submitpixelRequest');
Route::post( '/checkRequestPixelStatus', 'HomeController@requestedPixelStatus');


Route::get( '/profile', 'HomeController@index')->middleware('auth');
Route::get( '/profile/{id}', 'HomeController@index');
Route::get( '/profile/{id}/edit', 'HomeController@edit');
Route::post( '/profile/{id}/edit', 'HomeController@update');
Route::post( '/profilephoto/{id}/edit', 'HomeController@updateAvatar');
Route::post( '/profilesocialmedia/{id}/edit', 'HomeController@updateSocialAccounts');
Route::get( '/pixelbyprofile', 'HomeController@pixelassignTocurrentuser');
Route::post( '/ajaxGetUserDetails', 'HomeController@getProfilebyPixel');
Route::get( '/familytree', function(){ return view('design.shajra'); });
Route::get( '/all-countries', 'HomeController@doughnutChartStats');
Route::get( '/all-readers', 'HomeController@allReadersListing');
Route::get( '/contact', function(){ return view('design.contact'); });
Route::post( '/contact', 'HomeController@contactUsSubmittion' );

// // -- Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get( '/', function(){
        return redirect('admin/dashboard');
    } );
    Route::get( 'dashboard', 'AdminDashboard@dashboard' );
    // Route::get( 'pixels', 'AdminDashboard@pixelsListing' );
    // Route::get( 'pixels/{countryId}', 'AdminDashboard@pixelsListing' );
    Route::get( 'users', 'AdminDashboard@userListing' );
    // Route::get( 'createpixel', 'AdminDashboard@createPixel' );
    // Route::post( 'createpixel', 'AdminDashboard@createPixelStore' );
    // Route::post( 'pixeldelete', 'AdminDashboard@destroyPixel' );

    // -- requested pixel routs
    Route::get( 'requestedpixels', 'AdminDashboard@requestedPixelListing' );
    Route::get( 'requestedpixels/{countryId}', 'AdminDashboard@requestedPixelListing' );
    Route::get( 'activerequestedpixel/{pxid}', 'AdminDashboard@activeReqPixel');
    Route::get( 'deactiverequestedpixel/{pxid}', 'AdminDashboard@deactiveReqPixel');
    Route::get( 'destroyrequestedpixel/{pxid}', 'AdminDashboard@destroyReqPixel');
});