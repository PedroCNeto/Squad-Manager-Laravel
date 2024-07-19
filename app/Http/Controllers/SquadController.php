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

}
