<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {

        return view('salles.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("ani lha9t");

        // code...
    }
    //
}
