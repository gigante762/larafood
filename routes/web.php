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

/* Please atention on the routes order */


/* Details Plans */
Route::get('admin/plans/{url}/details/create','Admin\DetailsPlanController@create')->name('details.plan.create');
Route::post('admin/plans/{url}/details','Admin\DetailsPlanController@store')->name('details.plan.store');
Route::get('admin/plans/{url}/details','Admin\DetailsPlanController@index')->name('details.plan.index');


/* Plans */
Route::any('admin/plans/search','Admin\PlanController@search')->name('plans.search');
Route::resource('admin/plans','Admin\PlanController');


/* Dashboard home */
Route::get('/admin','Admin\PlanController@index')->name('admin.index');

/* Home */
Route::get('/', function () {
    return view('welcome');
});
