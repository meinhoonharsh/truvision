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

// "/, gallery, faqs, about, contact"

Route::view('/', 'pages.home')->name('home');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/faqs', 'pages.faqs')->name('faqs');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
