<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresenceController extends Controller
{

    public function index()
    {

        return view('presences.create');
        
    }

    public function create(Request $request)
    {

        dd("ani l7a9t");

    }
}
