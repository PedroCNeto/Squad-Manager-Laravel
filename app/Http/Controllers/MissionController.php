<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Squad;
use App\Models\Mission;

class MissionController extends Controller
{
    public function index() {
        
        $search = request('search');

        if($search){
            $missions = Mission::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        }
        else{
            $missions = Mission::all();
        }


        return view('index', ['missions' => $missions, 'search' => $search]);
    }

    public function createmissionpage(){
        $squads = Squad::all();

        $search = request('search');

        if($search){
            $missions = Mission::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        }
        else{
            $missions = Mission::all();
        }


        return view('createmission', ['squads' => $squads, 'missions' => $missions, 'search' => $search]);
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
        Squad::findOrFail($squadId)->startMission();

        return redirect('createmission')->with('msg', "Mission created successfully!");

    }

    public function show($id){

        $mission = Mission::findOrFail($id);
        return view('show.missionshow', ['mission' => $mission]);
    }

    public function end($id){
        $mission = Mission::findOrFail($id);
        $mission->update(['status' => 0]);

        Squad::findOrFail($mission->squad->id)->endMission();

        return redirect('../createmission')->with('msg', "Mission successfully ended");
    }
}
