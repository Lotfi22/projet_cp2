<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {

        return view('categories.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("je ne cours pas deriere la vedette la vedette vient vers moi");

        // code...
    }

}