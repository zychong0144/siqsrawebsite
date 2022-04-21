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

Route::get('/Home', function () {
    return view('home');
});


Route::get('/Members', function () {
    return view('member');
});

Route::get('/Publications', function () {
    return view('publication');
});

Route::get('/TeachingProfile', function () {
    return view('teachingprofile');
});

Route::get('/Photo', function () {
    return view('photo');
});

Route::get('/Activities', function () {
    return view('activity');
});

Route::get('/ResearchStudents', function () {
    return view('researchstudent');
});

Route::get('/login' , function() {
    return view('login');
});

Route::get('/register' , function() {
    return view('register');
});