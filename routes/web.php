<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RecipeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/ingredients/history', function () {
    return view('ingredients.history');
});

Route::get('recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('orders_recipes', [OrderController::class, 'recipes'])->name('orders.recipes');
Route::get('orders_ingredients', [OrderController::class, 'ingredients'])->name('orders.ingredients');
Route::get('ingredients', [IngredientController::class, 'index'])->name('ingredients.index');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
