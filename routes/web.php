<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\InnerServiceController;
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


Route::group(['middleware' => ['guest'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('', 'AuthController@login')->name('login');
    Route::get('login', 'AuthController@login')->name('login');
    Route::get('home', 'AuthController@login')->name('login'); // This line might need to be updated

    Route::post('login', 'AuthController@attemptLogin')->name('login');
});

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('logout', 'AuthController@logout')->name('logOut');
    Route::get('home', 'Controller@index')->name('home');
    Route::get('', 'Controller@index')->name('home');


    Route::resource('users', 'UserController');
    Route::resource('pages', 'PageController');
    Route::resource('faqs', 'FaqsController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('testimonials', 'TestimonialController');
    Route::resource('blogs', 'BlogController');
    Route::resource('services', 'ServiceController');

    Route::prefix('service')->group(function(){

        Route::get('{slug}','InnerServiceController@show')->name('showTab');
        Route::get('innerServices/{id}/create','InnerServiceController@create')->name('data.create');
        Route::post('innerServices/{id}/create','InnerServiceController@create')->name('data.create');
        Route::get('{id}/view','InnerServiceController@view')->name('data.view');
        Route::get('{id}/edit','InnerServiceController@edit')->name('data.editView');
        Route::put('{id}/data-updated','InnerServiceController@update')->name('data.edit');
        Route::delete('{id}/delete','InnerServiceController@destroy')->name('data.destroy');

    });

});
