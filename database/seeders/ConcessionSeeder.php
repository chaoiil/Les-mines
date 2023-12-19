<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concession;

class ConcessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        concession::create([
            "name"=>"La mine en or",
            "siret"=>"01234567896541",

        ]);

        concession::create([
            "name"=>"La mine de France",
            "siret"=>"0618086316",

        ]);
        concession::create([
            "name"=>"La mine Rennaise",
            "siret"=>"0618086316869",

        ]);
        concession::create([
            "name"=>"La Mine Celebres",
            "siret"=>"06186314528656",

        ]);
    }
}
