<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mine;

class MineController extends Controller
{
    public function indexMine(int $id)
    {
        $mine = Mine::find($id);
        return view('mine',['mine'=>$mine]);
    }
}
