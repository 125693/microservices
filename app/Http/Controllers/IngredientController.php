<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index()
    {
        return view('ingredients.index');
    }

    public function records()
    {
        $records = Ingredient::all();
        return $records;
    }
}
