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
        DB::insert("insert into evenements(date_eve)
                    values('$request->date_eve')");

        return back();
        

        // code...
    }
    //
}
