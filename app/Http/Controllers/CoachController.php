<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {

        return view('coachs.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("well done");

        // code...
    }


    //
}