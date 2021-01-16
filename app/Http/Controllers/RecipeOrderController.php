<?php

namespace App\Http\Controllers;

use App\Jobs\Kitchen;
use App\Models\RecipeOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecipeOrderController extends Controller
{
    public function create(Request $request)
    {
        $record = RecipeOrder::create(['recipe_id' => $request->id]);
        Kitchen::dispatch($record);
        return $record;
    }

    public function records()
    {
        $records = RecipeOrder::with(['recipe'])->get();
        return $records;
    }
}
