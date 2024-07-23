<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // return ('this is About');
    return view ('about');
});

Route::get('/contact', function () {
    // return ('this is About');
    return view ('contact');
});

Route::get('/pricing', function () {
    // return ('this is About');
    return view ('pricing');
});


Route::get('/faq', function () {
    // return ('this is About');
    return view ('faq');
});

Route::get('/bloghome', function () {
    // return ('this is About');
    return view ('bloghome');
});

Route::get('/blogpost', function () {
    // return ('this is About');
    return view ('blogpost');
});

Route::get('/portfoliooverview', function () {
    // return ('this is About');
    return view ('portfoliooverview');
});

Route::get('/portfolioitem', function () {
    // return ('this is About');
    return view ('portfolioitem');
});

Route::get('/welcome', function () {
    // return ('this is About');
    return view ('welcome');
});


