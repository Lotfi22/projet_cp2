<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class AdherantsController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }



    public function index()
    {

        $adherants = DB::select("select * from adherants");

        return view('adherants.index',compact('adherants'));


        //return view('adherants.create');

    }

    
    public function create(Request $request)
    {
        
        DB::insert("insert into adherants(nom, prenom, date_naissance, id_qr, genre, num_tel, num_tel_urgence, dossier_medical, adresse, email, type_abonnement)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->id_qr','$request->genre', '$request->num_tel', '$request->num_tel_urgence', '$request->dossier_medical', '$request->adresse', '$request->email', '$request->type_abonnement')");

        return back();


    }


}










































//        dd("meow");