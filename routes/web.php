<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/private-policy', function () {
    return view('private_policy');
});




Route::get('/blog', function () {
    return view('blog.list');
});

Route::get('/blog/why-copywriting', function () {
    return view('blog.why-copywriting');
});

Route::get('/blog/why-own-marketing-agency', function () {
    return view('blog.why-own-marketing-agency');
});

Route::get('/blog/what-is-copywriting', function () {
    return view('blog.what-is-copywriting');
});

Route::get('/blog/running-social-media-accounts', function () {
    return view('blog.running-social-media-accounts');
});

Route::get('/blog/running-social-media-ads', function () {
    return view('blog.running-social-media-ads');
});

Route::get('/blog/running-google-ads', function () {
    return view('blog.running-google-ads');
});