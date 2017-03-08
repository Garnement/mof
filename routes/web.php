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

// Route::get('/', function () {
//     return App\Region::first()->region_name;
// });

Route::get('/', 'FrontController@index')->name('home');

Route::get('/inscription', 'FrontController@inscription')->name('inscription');

Route::any('/login', 'LoginController@login')->name('login');

Route::any('/logout', 'LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('candidates', 'admin\CandidateController@index');
    Route::resource('candidates', 'admin\CandidateController');
    //Route::get('category/{id}', 'DashboardController@questionsByCat')->name('cat');
});
