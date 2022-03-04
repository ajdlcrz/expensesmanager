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

Route::get('/', function () {
    return redirect('/dashboard');
});
Route::post('/roles','App\Http\Controllers\RolesController@store')->name('submit_role');
Route::get('/roles','App\Http\Controllers\RolesController@index')->name('list');
Route::get('/edit/{id}','App\Http\Controllers\RolesController@edit')->name('edit_role');
Route::post('/update/{id}','App\Http\Controllers\RolesController@update')->name('update_role');
Route::get('/delete/{id}','App\Http\Controllers\RolesController@destroy')->name('delete_role');

Route::post('/users','App\Http\Controllers\UserController@store')->name('submit_user');
Route::get('/users','App\Http\Controllers\UserController@index')->name('list_users');
Route::get('/edit1/{id}','App\Http\Controllers\UserController@edit')->name('edit_user');
Route::post('/update1/{id}','App\Http\Controllers\UserController@update')->name('update_user');
Route::get('/delete1/{id}','App\Http\Controllers\UserController@destroy')->name('delete_user');

Route::post('/expensescategories','App\Http\Controllers\CategoryController@store')->name('submit_category');
Route::get('/expensescategories','App\Http\Controllers\CategoryController@index')->name('list_category');
Route::get('/edit2/{id}','App\Http\Controllers\CategoryController@edit')->name('edit_category');
Route::post('/update2/{id}','App\Http\Controllers\CategoryController@update')->name('update_category');
Route::get('/delete2/{id}','App\Http\Controllers\CategoryController@destroy')->name('delete_category');

Route::post('/expenses','App\Http\Controllers\ExpenseController@store')->name('submit_expense');
Route::get('/expenses','App\Http\Controllers\ExpenseController@index')->name('list_expense');
Route::get('/edit3/{id}','App\Http\Controllers\ExpenseController@edit')->name('edit_expense');
Route::post('/update3/{id}','App\Http\Controllers\ExpenseController@update')->name('update_expense');
Route::get('/delete3/{id}','App\Http\Controllers\ExpenseController@destroy')->name('delete_expense');

Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('list_modules');






