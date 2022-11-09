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

Route::get('/', function () {
    return view('index');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/destination', function () {
    return view('destination');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/welcome', function () {
    return view('welcome');
});
