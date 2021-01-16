<?php

namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function recipes()
    {
        return view('orders.recipes');
    }
    public function ingredients()
    {
        return view('orders.ingredients');
    }
}
