<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class DatabaseController extends Controller
{
    public function migrate()
    {
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }
}
