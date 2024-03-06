<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index()
    {

        return view('abonnements.create');

        // code...
    }


    public function create(Request $request)
    {

        dd("gloire et sacrifice");

        // code...
    }

   
}
