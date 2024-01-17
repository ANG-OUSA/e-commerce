<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
    Route::controller(CategoriesController::class)->group(function(){
    Route::get("/categories","GetCategory");
    Route::post("/categories","PostCategory");
    Route::get("/categories/{categoryId}","GetCategoryById");
    Route::patch("/categories/{categoryId}","UpdateCategory");
    Route::delete("/categories/{categoryId}","DeleteCategory");
});
    Route::controller(ProductsController::class)->group(function(){
    Route::get("/product","GetProduct");
    Route::post("/product","PostProduct");
    Route::get("/product/{productId}","GetProductById");
    Route::patch("/product/{productId}","UpdateProduct");
    Route::delete("/product/{productId}","DeleteProduct");
});
