<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sous_categorieController extends Controller
{
    public function index()
    {

        return view('sous_categories.create');

        // code...
    }

    public function create(Request $request)
    {

        dd("balerion la terreur noire");

        // code...
    }
}
