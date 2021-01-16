<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create(['name' => 'Arroz a la cubana']);
        Recipe::create(['name' => 'Arroz con pollo']);
        Recipe::create(['name' => 'Cuy al Horno']);
        Recipe::create(['name' => 'Aguadito']);
        Recipe::create(['name' => 'Pollo a la brasa']);
        Recipe::create(['name' => 'Papa a la Huancaina']);

    }
}
