<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing_page;
use App\Http\Controllers\CountriesList;
use App\Http\Controllers\CountriesController;
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

Route::get("landing",[Landing_page::class,'loadView']);
Route::get("fetch-countries",[Landing_page::class,'fetchCountries']);
Route::get("list",[CountriesList::class,'loadView']);
Route::post("search",[CountriesList::class,'search']);
Route::view('country','addcountry');
Route::post('country',[CountriesController::class,'create']);
Route::get('edit/{id}',[CountriesController::class,'showdata']);
Route::post('edit',[CountriesController::class,'update']);