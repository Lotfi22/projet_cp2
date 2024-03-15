<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class CoachController extends Controller
{
    public function index()
    {

        $coachs = DB::select("select * from coachs");

        return view('coachs.index',compact('coachs'));
    }


    
    public function create(Request $request)
    {
        
        DB::insert("insert into coachs(nom, prenom, date_naissance, id_qr, genre, nbr_telephone, nbr_telephone_urgence, adress, email)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->id_qr','$request->genre', '$request->nbr_telephone', '$request->nbr_telephone_urgence', '$request->adress', '$request->email')");

        return back();

    }


}




        //dd("well done");
