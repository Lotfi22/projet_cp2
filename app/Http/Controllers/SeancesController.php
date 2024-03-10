<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeancesController extends Controller
{
        public function index()
    {
        
        return view('seances.create');

    }

    public function create (request $request)
    {
        dd("why do when you can don't");
    }
}

