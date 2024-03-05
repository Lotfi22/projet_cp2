<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {

        return view('sports.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("ani lha9t");

        // code...
    }


    public function lotfi()
    {

        dd('Lotfi \'s routes ' );

        // code...
    }

    public function afaf()
    {

        dd('afaf \'s routes ' );

        // code...
    }

    public function chaima()
    {

        dd('chaima \'s routes ' );

        // code...
    }

    public function imene()
    {

        dd('imene \'s routes ' );

        // code...
    }

    public function meriem()
    {

        dd('meriem \'s routes ' );

        // code...
    }

    public function rahma()
    {

        dd('rahma \'s routes ' );

        // code...
    }

    public function selma()
    {

        dd('selma \'s routes ' );

        // code...
    }

    //
}
