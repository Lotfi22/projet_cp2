<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class CategorieController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }


    public function index()
    {

        $categories = DB::select("select * from categories");

        return view('categories.index',compact('categories'));

        // code...
    }

    public function create(Request $request)
    {

        DB::insert("insert into categories(nom,description,age_min,age_max)
                    values('$request->nom','$request->description','$request->age_min','$request->age_max')");

        return back();

        // code...
    }


    //
}
