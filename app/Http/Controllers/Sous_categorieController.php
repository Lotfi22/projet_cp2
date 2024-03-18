<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sous_categorie;
use App\Models\Categorie;

class Sous_categorieController extends Controller
{
    public function index()
    {

        return view('sous_categories.create');

        // code...
    }

    public function create($id_categorie,Request $request)
    {

        Sous_categorie::ajouter($id_categorie,$request);

        session()->flash('notification.message' , 'Sous Catégorie '.$request->nom.' Ajoutée avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();

        // code...
    }

    public function home($id_categorie)
    {

        $sous_categories = (sous_categorie::get_all_sous_categories($id_categorie));

        $categorie=Categorie::find($id_categorie);

        return view('sous_categories.index',compact('sous_categories','categorie'));

        // code...
    }

    //
}
