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

// Главная +
Route::get('/', 'HomeController@index');

// Наши Проекты +
Route::get('/workshop', 'HomeController@workshop');

// Дети +
Route::get('/child', 'HomeController@child');

// Наша Команда +
Route::get('/team', 'HomeController@team');
Route::get('/team/{team}', 'TeamController@teamMas');

// Расписание +
Route::get('/schedule', 'HomeController@schedule');

// Галерея +
Route::get('/gallery', 'HomeController@gallery');

// Профиль Учителя +
Route::get('/teach/{id}', 'HomeController@profile');

Route::post('/mail', 'HomeController@mail');