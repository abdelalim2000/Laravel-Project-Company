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

//home page route
Route::get('/', 'HomeController@homeView')->name('home');

//Blog View
Route::get('/blog', 'BlogController@index')->name('blog');

//employees page route
Route::get('/employees', "EmployeeController@index")->name("employees");

//Create employee route
Route::get('/create', "EmployeeController@create")->name('create');
Route::post('/employees', "EmployeeController@store")->name("store");

//Edit Employee page
Route::get('/edit/{id}', "EmployeeController@edit")->name('edit');
Route::put('/employees/{id}','EmployeeController@update')->name('update');

//Delete Employee
Route::delete('/employees/{id}','EmployeeController@destroy')->name('delete');

//Show Employee page
Route::get('/employees/{id}', 'EmployeeController@show')->name('view');

