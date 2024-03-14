<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Categorie;

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


       session()->flash('notification.message' , 'Catégorie '.$request->nom.' Ajoutée avec succés');

       session()->flash('notification.type' , 'success'); 

       return back();

        // code...
    }

    public function delete($id_categorie)
    {
        
        Categorie::supprimer($id_categorie);

        session()->flash('notification.message' , 'Catégorie '.$id_categorie.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }


    //
}
