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

        $categories = Categorie::all();

        return view('categories.index',compact('categories'));

        // code...
    }


    public function create(Request $request)
    {

        Categorie::inserer($request);
         
        session()->flash('notification.message' , 'Catégorie '.$request->nom.' Ajoutée avec succés');

        session()->flash('notification.type' , 'success');

       return back();

        // code...
    }


    public function delete1($id_categorie)
    {

        Categorie::supprimer($id_categorie);

        session()->flash('notification.message' , 'Catégorie '.$id_categorie.' supprimer avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }

    public function update(Request $request)
    {
        Categorie::misajour($request);

        session()->flash('notification.message' , 'Catégorie '.$request->id_categorie.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }

    public function delete(Request $request)
    {


        $id_categorie=($request->id_categorie);
        
        $categorie = Categorie::find($id_categorie);
        
        Categorie::supprimer($id_categorie);
        
        $categorie = ($categorie->getAttributes());
        
        return response()->json($categorie ?? "Message");

        // code...
    }

    //
}
