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

use Faker\Guesser\Name;

Route::get('/', function (){
    return view('welcome');
});
Route::get('/action', function (){
    return view('pages.action');
})->name('action');
Route::get('/about', function (){
    return view('pages.about');
})->name('about');
Route::get('/join', function (){
    return view('pages.join');
})->name('join');
Route::get('/news', function (){
    return view('pages.news');
})->name('news');
Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');

Route::get('/customer','pageController@showCustomer');



