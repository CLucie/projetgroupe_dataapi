<?php

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


Route::get('/', function () {
    return view('template');
});

Route::get('/', function () {
    return view('accueil');
});
<<<<<<< HEAD

Route::get('/', function () {
    return view('modale');
=======
Route::get('/musee', function () {
    return view('musee');
});
Route::get('/departement', function () {
    return view('departement');
>>>>>>> master
});