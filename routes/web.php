<?php

use Illuminate\Support\Facades\Route;

# DASHBOARD
Route::get('/dashboard', function(){return view('dashboard');})->name('dashboard');
Route::get('/login', function(){return view('login');})->name('login');
Route::get('/register', function(){return view('register');})->name('register');
Route::get('/table',function(){return view('table');})->name('table');
Route::get('/user',function(){return view('user');})->name('user');
Route::get('/starter-page',function(){return view('starter-page');})->name('starter-page');
Route::get('/contact',function(){return view('contact');})->name('contact');


#frontend
Route::get('/', function () {return view('frontend');})->name('/');
Route::get('/mining-tool',function(){return view('services');})->name('mining-tool');
Route::get('/team',function(){return view('team');})->name('team');
Route::get('/blog',function(){return view('blog');})->name('blog');
Route::get('/blog-detail',function(){return view('blog-details');})->name('blog-detail');
Route::get('/about', function(){return view('about');})->name('about');
Route::get('/404', function(){return view('404');})->name('404');
Route::get('/portfolio',function(){return view('portfolio');})->name('portfolio');
Route::get('/portfolio-details',function(){return view('portfolio-details');})->name('portfolio-details');


Route::get('/regresi-liniear',function(){return view('mining/regresi-liniear');})->name('regresi-liniear');
Route::get('/decision-tree',function(){return view('decision-tree');})->name('decision-tree');
Route::get('/knearst-neighbors',function(){return view('knearst-neighbors');})->name('knearst-neighbors');
Route::get('/neural-networks',function(){return view('neural-networks');})->name('neural-networks');
Route::get('/support-vector-machine',function(){return view('support-vector-machine');})->name('support-vector-machine');
Route::get('/naive-bayes',function(){return view('naive-bayes');})->name('naive-bayes');
Route::get('/kmeans-clustering',function(){return view('kmeans-clustering');})->name('kmeans-clustering');
Route::get('/random-forest',function(){return view('random-forest');})->name('random-forest');

