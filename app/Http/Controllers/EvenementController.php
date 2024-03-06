<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index() {
        return view('evenements.create');
    }
    public function create (Request $request)
    {

        dd("ajouter_evenement");

        // code...
    }
    //
}
