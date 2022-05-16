<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\continents;
use App\Models\countries;
use App\Models\departments;
use App\Models\municipalities;
use App\Models\cities;
use App\Models\neighborhoods;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        continents::create([
            "name" => "America"
        ]);
        continents::create([
            "name" => "Europa"
        ]);
        countries::create([
            "name" => "Colombia",
            "id_cont" => 1
        ]);
        countries::create([
            "name" => "Peru",
            "id_cont" => 1
        ]);
        departments::create([
            "name" => "Atlantico",
            "id_pais" => 1
        ]);
        departments::create([
            "name" => "Cesar",
            "id_pais" => 1
        ]);
        municipalities::create([
            "name" => "Barranquilla",
            "id_dep" => 1
        ]);
        municipalities::create([
            "name" => "Malambo",
            "id_dep" => 2
        ]);
        cities::create([
            "name" => "soledad",
            "id_mun" => 1
        ]);
        neighborhoods::create([
            "name" => "Miramar",
            "id_ciudad" => 1
        ]);
        
        
    }
}
