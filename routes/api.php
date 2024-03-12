<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/task/:taskId', function (Request $request) {
    return "this is a task 1";

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    // Routes that require admin authentication
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::post('/admin/product/create', 'ProductController@store')->name('admin.product.store');
    Route::put('/admin/product/{id}', 'ProductController@update')->name('admin.product.update');
    Route::delete('/admin/product/{id}', 'ProductController@destroy')->name('admin.product.destroy');
    // Add more routes as needed
});


