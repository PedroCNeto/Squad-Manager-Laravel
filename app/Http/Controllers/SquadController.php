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

        $img = "";
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('images/squadsImg'), $imageName);

            $img = $imageName;
        }
        else{
            $img = "squad.jpg";
        }
    
        $squad = Squad::create(['name' => $name , 'rank' => $rank, 'status' => 0, 'img' => $img]);

        return redirect('createsquad')->with('msg', "Squad created successfully!");

    }

    public function show($id){

        $squad = Squad::findOrFail($id);

        return view('show.squadshow', ['squad' => $squad]);
    }
}
