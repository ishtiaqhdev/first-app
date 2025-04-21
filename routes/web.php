<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('public_portal','public_portal');
Route::view('important_links', 'important_links');
Route::view('travel_instructions', 'travel_instructions');
Route::view('news', 'news');
Route::view('gallery', 'gallery');
Route::view('services', 'services');
Route::view('2017_act', '2017_act');
Route::view('press_release', 'press_release');
Route::view('rules', 'rules');
