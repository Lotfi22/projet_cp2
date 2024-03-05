<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function index()
    {

        return view('factures.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("ani lha9t");

        // code...
    }
    //
}
