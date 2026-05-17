<?php

use Illuminate\Support\Facades\Route;

Route::view('/',          'pages.home')->name('home');
Route::view('/profil',    'pages.profil')->name('profil');
Route::view('/program',   'pages.program')->name('program');
Route::view('/kesiswaan', 'pages.kesiswaan')->name('kesiswaan');
Route::view('/ppdb',      'pages.ppdb')->name('ppdb');
Route::view('/kontak',    'pages.kontak')->name('kontak');
Route::view('/event',     'pages.event')->name('event');
