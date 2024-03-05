<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admins.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("ani lha9t");

        // code...
    }


    //
}
