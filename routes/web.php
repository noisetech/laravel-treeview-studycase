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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category-subcategory/list', 'CategoryController@index')->name('category-subcategory.list');
Route::post('category-subcategory/save-nested-categories', 'CategoryController@saveNestedCategories')->name('category-subcategory.save-nested-categories');

Route::get('category-subcategory/create', 'CategoryController@create')->name('category-subcategory.create');
Route::post('category-subcategory/save', 'CategoryController@store')->name('category-subcategory.store');
Route::get('category-subcategory/edit/{category_id}', 'CategoryController@edit')->name('category-subcategory.edit');
Route::get('category-subcategory/remove/{category_id}', 'CategoryController@remove')->name('category-subcategory.remove');
