<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pokemon::create([
            'name' => 'Bulbizarre',
            'type' => 'Plante',
            'niveau' => 5,
        ]);

        Pokemon::create([
            'name' => 'Salamèche',
            'type' => 'Feu',
            'niveau' => 5,
        ]);

        Pokemon::create([
            'name' => 'Carapuce',
            'type' => 'Eau',
            'niveau' => 5,
        ]);
    }
}
