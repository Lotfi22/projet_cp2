<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function index()
    {
        return view('groupes.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("yaaaaay");

        // code...
    }


    //
}