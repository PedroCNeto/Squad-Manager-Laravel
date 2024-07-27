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
        $missions = Mission::with('squad')->get();

        return view('createmission', ['squads' => $squads, 'missions' => $missions]);
    }

    public function store(Request $request){

        $name= $request->input('namemission');
        $local = $request->input('placemission');
        $squadId = $request->input('squad_id');
        $supports = $request->input('items');

        $img = ""; 
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('images/missionsImg'), $imageName);

            $img = $imageName;
        }
        else{
            $img = "squad.jpg";
        }


        $mission = Mission::create(['name' => $name , 'local' => $local, 'squad_id' => $squadId, 'status' => 1, 'img' => $img, 'supports' => $supports]);

        return redirect('createmission')->with('msg', "Mission created successfully!");

    }

    public function show($id){

        $mission = Mission::findOrFail($id);
        return view('show.missionshow', ['mission' => $mission]);
    }
}
