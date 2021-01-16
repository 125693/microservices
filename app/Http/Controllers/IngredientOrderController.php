<?php

namespace App\Http\Controllers;

use App\Models\IngredientOrder;

class IngredientOrderController extends Controller
{
    public function records()
    {
        $records = IngredientOrder::with(['ingredient'])->get();
        return $records;
    }
}
