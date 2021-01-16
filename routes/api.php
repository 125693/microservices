<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\IngredientOrderController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RecipeOrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('recipes')->group(function () {
    Route::get('records', [RecipeController::class, 'records']);
    Route::get('random', [RecipeController::class, 'random']);
});

Route::prefix('orders')->group(function () {
    Route::prefix('recipes')->group(function () {
        Route::post('create', [RecipeOrderController::class, 'create']);
        Route::get('records', [RecipeOrderController::class, 'records']);
    });
    Route::prefix('ingredients')->group(function () {
        Route::get('records', [IngredientOrderController::class, 'records']);
    });
});

Route::prefix('ingredients')->group(function () {
    Route::get('records', [IngredientController::class, 'records']);
});

Route::get('migrate', [DatabaseController::class, 'migrate']);
