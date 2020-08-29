<?php
Route::get('/', 'HomeController@home');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('signin', 'PagesController@signin');