<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Squad;

class SquadController extends Controller
{
    
    public function index() {
        $squads = Squad::all();

        return view('index', ['squads' => $squads]);
    }

    public function createsquadpage(){
        $squads = Squad::all();

        return view('createsquad', ['squads' => $squads]);
    }

    public function store(Request $request){

        $name= $request->input('namesquad');
        $rank = $request->input('ranksquad');
    
        $squad = Squad::create(['name' => $name , 'rank' => $rank, 'status' => 0]);

        return redirect('createsquad')->with('msg', "Squad created successfully!");

    }
}
