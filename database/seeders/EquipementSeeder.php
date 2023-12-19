<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equiêment;

class EquipementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $equipement=new Equipement();
            $equipement->name = 'Caterpillar c20';
            $equipement->lenght = 34.21;
            $equipement->widht = 12.10;
            $equipement->height = 5.02;
            $equipement->using_for = "vehicule pour deplacer le minerai";
            $equipement->save();
        }

    
}
