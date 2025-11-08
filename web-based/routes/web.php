<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/settings', function () {
    return view('settings');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/documents', function () {
    return view('documents');
});
Route::get('/blotter', function () {
    return view('blotter');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/announcements', function () {
    return view('announcements');
});
Route::get('/verify', function () {
    return view('verify');
});
Route::get('/document', function () {
    return view('document');
});
Route::get('/admin/home', function () {
    return view('admin.home');
});
Route::get('/admin/settings', function () {
    return view('admin.settings');
});
Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/announcements', function () {
    return view('admin.announcements');
});
Route::get('/admin/appointment', function () {
    return view('admin.appointment');
});
Route::get('/admin/verifications', function () {
    return view('admin.verifications');
});
Route::get('/admin/blotters', function () {
    return view('admin.blotters');
});
Route::get('/about', function () {
    return view('about');
});

