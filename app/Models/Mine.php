<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mines;

class Mine extends Model
{
    use HasFactory;

    public function concession()
    {
        return $this -> belongsTo(Concession::class);
    }

    public function Equipement()
    {
        return $this->BelongsToMany(Equipement::class);
    }
}