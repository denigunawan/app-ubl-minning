<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('frontend');})->name('/');

Route::get('/emining/tentang', function(){return view('tentang-emining');})->name('tentang-emining');
Route::get('/emining/analytic', function(){return view('anayltic');})->name('analytic');


# DASHBOARD
Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard');
Route::get('/login', function(){return view('login');})->name('login');
Route::get('/register', function(){return view('register');})->name('register');
Route::get('/services',function(){return view('services');})->name('services');
Route::get('/table',function(){return view('table');})->name('table');
Route::get('/user',function(){return view('user');})->name('user');
Route::get('/team',function(){return view('team');})->name('team');
Route::get('/starter-page',function(){return view('starter-page');})->name('starter-page');
Route::get('/blank',function(){return view('blank');})->name('blank');
Route::get('/contact',function(){return view('contact');})->name('contact');

