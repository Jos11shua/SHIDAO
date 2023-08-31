<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/listing', function () {
    return view('listing');
})->name('listing');

Route::get('/dashbord', function () {
    return view('dashbord');
})->name('dashbord');

Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/annonces', function () {
    return view('annonces');
})->name('annonces');

Route::get('/commentaire', function () {
    return view('commentaire');
})->name('commentaire');

Route::get('/signet', function () {
    return view('signet');
})->name('signet');

Route::get('/add_annonces', function () {
    return view('add_annonces');
})->name('add_annonces');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/user_profil', function () {
    return view('user_profil');
})->name('user_profil');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/add_annonces2', function () {
    return view('add_annonces2');
})->name('add_annonces2');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/dashbord_add', function () {
    return view('dashbord_add');
})->name('dashbord_add');












