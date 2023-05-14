<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// without this, the code throws an error saying that it cannot find ProductController
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

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
// }); sanctum is lightweight, use passport
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Commented out the line that was suggested in the tutorial
// Route::apiResource('/products', 'ProductController');
Route::apiResource('products', ProductController::class);

Route::group(['prefix'=>'products'],function(){
    Route::apiResource('/{product}/reviews',ReviewController::class);
});