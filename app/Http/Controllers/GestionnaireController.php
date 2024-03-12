<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function create(Request $request)
    {

        dd("ajouter_gestionnaire");
        // code...
    }
    //
}
