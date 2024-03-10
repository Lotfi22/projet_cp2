<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdherantsController extends Controller
{
    public function index()

    {
        
        return view('adherants.create');

    }

    public function create (request $request)
    {

        dd("meow");

    }

}
