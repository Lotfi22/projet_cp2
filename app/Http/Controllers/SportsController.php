<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SportsController extends Controller
{

    public function index()
    {

        $sports = DB::select("select * from sports");
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


}