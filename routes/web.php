<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

// Add artikel global
// Route::get('/add', function() {
//     return view('add');
// });
// Route::get('/tes', 'HomeController@home');

Route::get('/', 'WebsiteController@index');

Route::get('/add', 'ArtikelController@add');

Route::get('/show', 'ArtikelController@show'); // Show list artikel list
Route::post('/add_process', 'ArtikelController@add_process'); // Post article method
Route::get('/edit/{id}', 'ArtikelController@edit'); // Untuk edit artikel
Route::post('/edit_process', 'ArtikelController@edit_process'); // Edit proses pada form action
Route::get('/delete/{id}', 'ArtikelController@delete'); // Hapus artikel
// Route::get('/detail/{id}', 'ArtikelController@detail'); // Detail artikel
Route::get('/news-info/{slug}', 'ArtikelController@detail');

// Administrator routes
Route::get('/admin', 'ArtikelController@show_by_admin'); // Rout untuk admin

