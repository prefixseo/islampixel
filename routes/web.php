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

Route::post('/boxmeta', 'HomeController@boxSessionManager')->name('boxManager');
Route::post('/ajaxGetProfile', 'HomeController@profileWithPixelId')->name('ajaxGetProfile');

// -- Google Login
Route::get('/login/google', 'auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('/login/google/callback',  'auth\LoginController@handleGoogleCallback');


// -- Facebook Login
Route::get('/login/facebook', 'auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('/login/facebook/callback',  'auth\LoginController@handleFacebookCallback');


//-- Designs
Route::get( '/', 'HomeController@newHome')->name('front');
Route::get( '/profile', 'HomeController@index')->middleware('auth');
Route::get( '/profile/{id}', 'HomeController@index');
Route::get( '/pixelbyprofile', 'HomeController@pixelassignTocurrentuser');
Route::post( '/ajaxGetUserDetails', 'HomeController@getProfilebyPixel')->name('ajaxGetProfile');
Route::get( 'familytree', function(){ return view('design.shajra'); });
Route::get( 'contact', function(){ return view('design.contact'); });
Route::post( 'contact', 'HomeController@contactUsSubmittion' );

// -- Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get( 'stats', 'AdminDashboard@index' );
    Route::get( 'users', 'AdminDashboard@userListing' );
    Route::get( 'pixels', 'AdminDashboard@pixelsListing' );
    Route::get( 'pixels/{countryId}', 'AdminDashboard@pixelsListing' );
    Route::get( 'createpixel', 'AdminDashboard@createPixel' );
    Route::post( 'createpixel', 'AdminDashboard@createPixelStore' );
    Route::post( 'pixeldelete', 'AdminDashboard@destroyPixel' );
});