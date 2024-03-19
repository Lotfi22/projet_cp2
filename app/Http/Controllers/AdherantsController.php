<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Adherant;


class AdherantsController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }



    public function index()
    {

        $adherants = Adherant::all(); 
        return view('adherants.index', compact('adherants'));

        // code...
    }

    
    public function create(Request $request)
    {
        
        Adherant::inserer($request);

        session()->flash('notification.message' , 'Adhérant '.$request->nom.' Ajouté avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();


    }

    public function update(Request $request)
    {
        
        Adherant::modifier($request);

        session()->flash('notification.message' , 'Adhérant '.$request->id.' Modifié avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }


    

    public function delete($id_adherant)
    {
        
        Adherant::supprimer($id_adherant);

        session()->flash('notification.message' , 'Adhérant '.$id_adherant.' Supprimé avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }


}










































//        dd("meow");