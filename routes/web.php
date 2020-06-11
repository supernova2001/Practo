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

Route::get('/home','mentormind@show');
Route::get('tests-page','mentormind@save');
Route::post('bookings-page','mentormind@store');
Route::post('submit','mentormind@submitting');
Route::get('bookings-page','mentormind@bookings');
Route::get('admin','mentormind@show_data');
Route::view('show','frontend/show');

