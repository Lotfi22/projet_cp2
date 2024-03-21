<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SportsController extends Controller
{

    public function index()
    {

        $sports = Sport::all();
        return view('sports.index',compact('sports'));

    }
    
    //
    public function create(Request $request)
    {

        DB::insert("insert into sports(nom,description)
                    values('$request->nom','$request->description')");

        return back();

        // code...
    }
    public function delete($id_sport)
    {

        Sport::supprimer($id_sport);

        session()->flash('notification.message' , 'Sport '.$id_sport.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }

    public function update(Request $request)
    {
        
        Sport::misajour($request);

        session()->flash('notification.message' , 'Sport '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }



}