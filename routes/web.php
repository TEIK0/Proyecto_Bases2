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
    return view('content.menu');
})->name('mainw');

Route::get('/LogIn', function() {
    return view('content.LogIn');
})->name('log');

Route::get('/SigIn', function() {
    return view('content.SigIn');
})->name('sig');

Route::get('/NewArtist', function() {
    return view('content.AddArtist');
})->name('newa');

Route::get('/NewPiece', function() {
    return view('content.AddPiece');
})->name('newp');

