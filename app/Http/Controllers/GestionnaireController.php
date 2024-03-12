<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;


class GestionnaireController extends Controller
{
    public function index() {
        $gestionnaires = DB::select("select * from gestionnaires");         
        return view('gestionnaires.index',compact('gestionnaires'));
        //return view('gestionnaires.create');
    }
=======
use DB;
class GestionnaireController extends Controller
{
        public function __construct()
        {
            $this->middleware('admin_log:admin');
        }

   
        public function index()
         {
            $gestionnaires = DB::select("select * from gestionnaires");        
        
            return view('gestionnaires.index',compact('gestionnaires'));
         }
>>>>>>> 8149d367afa4450e05f6bb5e5842a8ce5f3d9bc7
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
