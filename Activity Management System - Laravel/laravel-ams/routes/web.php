<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Route;

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/dashboard', function () {
    return view('dash');
})->name('dashboard');

Route::post('/delete-activity', function () {
    // Handle delete activity logic here
})->name('delete-activity');

Route::get('/instinfo', function () {
    return view('instinfo');
})->name('instinfo');

Route::post('/deleteinstinfo', function () {
    // Handle delete instructor information logic here
})->name('deleteinstinfo');

Route::post('/update-instructor', function () {
    // Handle update instructor information logic here
})->name('update-instructor');
