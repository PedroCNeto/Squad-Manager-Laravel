<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Squad;
use App\Models\Mission;

class MissionController extends Controller
{
    public function index() {
        $missions = Mission::all();

        return view('index', ['missions' => $missions]);
    }

    public function createmissionpage(){
        $squads = Squad::all();
        $missions = Mission::all();

        return view('createmission', ['squads' => $squads, 'missions' => $missions]);
    }

    public function store(Request $request){

        $name= $request->input('namemission');
        $local = $request->input('placemission');
        $squadId = $request->input('squad_id');

        $mission = Mission::create(['name' => $name , 'local' => $local, 'squad_id' => $squadId, 'status' => 1]);

        return redirect('createmission')->with('msg', "Mission created successfully!");

    }
}
