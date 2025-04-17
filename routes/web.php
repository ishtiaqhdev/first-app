<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('public_portal','public_portal');
Route::view('important_links', 'important_links');
Route::view('travel_instructions', 'travel_instructions');