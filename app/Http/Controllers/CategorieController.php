<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    public function index()
    {

        $categories = DB::select("select * from categories");

        return view('categories.index',compact('categories'));

        // code...
    }

    public function create(Request $request)
    {
        dd("je ne cours pas deriere la vedette la vedette vient vers moi");
        // code...
    }


    //
}
