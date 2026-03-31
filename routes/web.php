<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/service', 'service');
Route::view('/showcase', 'showcase');
Route::view('/blog', 'blog');