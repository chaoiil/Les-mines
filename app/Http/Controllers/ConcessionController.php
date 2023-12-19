<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concession;

class ConcessionController extends Controller
{
    public function index($id)
    {
        $concession = Concession::find($id);
        return view('concession',['concession'=>$concession]);
        
    }

    public function showAll()
    {
        $concessions = concession::all();
        return view('show-all',['concessions'=>$concessions]);
    }

    public function showForm()
    {
        return view('concession-create');
    }

    public function create(Request $request)
    {
        $concession = new Concession();
        $concession->name=$request->name;
        $concession->siret=$request->siret;
        $concession->save();
    
        return view('create-succes');
        
    }

}
