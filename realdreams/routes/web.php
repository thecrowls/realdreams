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


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('{lang?}')->middleware('locale')->group(function() {
    Route::get('/', "MainController@index")->name('index');
    Route::get('', "MenuController@main_menu")->name('header');
});
Auth::routes();
