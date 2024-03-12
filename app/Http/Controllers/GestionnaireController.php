<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GestionnaireController extends Controller
{
    public function index() {
        $gestionnaires = DB::select("select * from gestionnaires");         
        return view('gestionnaires.index',compact('gestionnaires'));
        //return view('gestionnaires.create');
    }
    public function create(Request $request)
    {
        DB::insert("insert into gestionnaires(nom,prenom,date_naissance,genre,num_tel,num_tel_urgence,email,adresse,id_qr)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->genre','$request->num_tel','$request->num_tel_urgence','$request->email','$request->adresse','$request->id_qr')");

        return back();
        //dd("ajouter_gestionnaire");
        // code...
    }
    //
}
