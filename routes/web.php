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
// Shoppinglists
Route::get('/', 'ShoppingListController@index');
Route::get('/lists/{shopping_list}', 'ShoppingListController@show');
Route::post('/', 'ShoppingListController@store');
Route::get('/lists/{shopping_list}/edit', 'ShoppingListController@edit')->name('shopping_list_edit');
Route::delete('/lists/{shopping_list}', 'ShoppingListController@destroy');

// Products from shoppinglist
Route::post('/lists/{id}', 'ProductController@store');
Route::get('/lists/{shopping_list}/{product}/edit', 'ProductController@edit')->name('product_edit');
Route::delete('/lists/{shopping_list}/{product}', 'ProductController@destroy')->name('product_delete');

// Categories
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('category_edit');
Route::post('/categories', 'CategoryController@store');
Route::delete('/categories/{category}', 'CategoryController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
