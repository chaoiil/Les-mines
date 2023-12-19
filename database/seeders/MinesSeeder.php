<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mine;

class MinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mine::create([
            "name"=>"Lithium",
            "longitude"=>10.145,
            "latitude"=>10.4121,
            "concession_id"=>1
    
        ]);
        Mine::create([
            "name"=>"La pepite",
            "longitude"=>1.14585,
            "latitude"=>54.45221,
            "concession_id"=>1
    
        ]);
        
    }
}
            
