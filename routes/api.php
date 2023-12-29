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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', function (Request $request) {
    return "Get all categories";
});
Route::post('/categories', function (Request $request) {
    return "Create 1 category";
});
Route::patch('/categories/{categoryId}', function (Request $request) {
    return "Update 1 category";
});
Route::delete('/categories/{categoryId}', function (Request $request) {
    return "Delete 1 category";
});


Route::get('/products', function (Request $request) {
    return "Get all products";
});
Route::post('/products', function (Request $request) {
    return "Create 1 product";
});
Route::patch('/products/{productId}', function (Request $request) {
    return "Update 1 product";
});
Route::delete('/products/{productId}', function (Request $request) {
    return "Delete 1 product";
});

Route::get('/categories/{categoryId}/products', function (Request $request) {
    return "Delete 1 product";
});