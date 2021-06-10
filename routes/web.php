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

include_once 'russian.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/airports', 'App\Http\Controllers\AirportsController@listAirports');
Route::get('/countries', 'App\Http\Controllers\CountriesController@listCountries');
Route::get('/amazon/search', 'App\Http\Controllers\AmazonController@search');
Route::get('/amazon/lookup', 'App\Http\Controllers\AmazonController@lookup');
