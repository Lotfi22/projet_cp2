<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionnaireController extends Controller
{
    public function index() {
        return view('gestionnaires.create');
    }
    public function create(Request $request)
    {

        dd("ajouter_gestionnaire");
        // code...
    }
    //
}
