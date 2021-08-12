<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', 'FrontEndController@index');
Route::get('/bootstrap', 'FrontEndController@bootstrap');
Route::get('/blog', 'FrontEndController@blog');
Route::get('/blog/{slug}', 'FrontEndController@blogdetail');

//  ARTIKEL ROUTES
Route::get('/add', 'ArtikelController@add');
Route::get('/show', 'ArtikelController@show'); // Show list artikel list
Route::post('/add_process', 'ArtikelController@add_process'); // Post article method
Route::get('/edit/{id}', 'ArtikelController@edit'); // Untuk edit artikel
Route::post('/edit_process', 'ArtikelController@edit_process'); // Edit proses pada form action
Route::get('/delete/{id}', 'ArtikelController@delete'); // Hapus artikel
Route::get('/artikel/{slug}', 'ArtikelController@detail');
Route::get('/artikel', 'ArtikelController@index'); // Rout untuk manage artikel

// ADMIN DASHBOARD ROUTES
// Route::get('/admin', 'AdminDashboardController@index');

Route::get('/admin', 'AdminController@index');

// Users
Route::get('/users', 'UserController@index');
Route::get('/profile', 'UserController@profile');

Route::get('/form-register', 'formRegisterController@index');