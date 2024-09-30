<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('HomePage');
});

Route::get('/login', function () {
    return Inertia::render('Login');
});

Route::get('/register', function () {
    return Inertia::render('Register');
});

Route::get('/forgot-password', function () {
    return Inertia::render('ForgotPassword');
});

Route::get('/create-password', function () {
    return Inertia::render('CreateNewPassword');
});

Route::get('/change-password-successful', function () {
    return Inertia::render('PasswordChanged');
});

Route::get('/congratulation', function () {
    return Inertia::render('Congratulation');
});

