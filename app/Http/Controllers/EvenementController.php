<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EvenementController extends Controller
{
    public function index() {
        $evenements = DB::select("select * from evenements");        
        
        return view('evenements.index',compact('evenements'));
        //return view('evenements.create');
    }
    public function create (Request $request)
    {
        DB::insert("insert into evenements(nom,date_debut,date_fin,description,lieu)
                    values('$request->nom','$request->date_debut','$request->date_fin','$request->description','$request->lieu')");

        return back();
        

        // code...
    }
    //
}
