<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        return view('recipes.index');
    }

    public function records()
    {
        $records = Recipe::with(['ingredients'])->get();
        return $records;
    }

    public function random()
    {
        $record = Recipe::inRandomORder()->first();
        return $record;
    }

}
