<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Evenement;


class EvenementController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }

    public function index() 
    {

        $evenements = DB::select("select * from evenements");        
        
        return view('evenements.index',compact('evenements'));

    }

    public function create (Request $request)
    {
        DB::insert("insert into evenements(nom,date_debut,date_fin,description,lieu)
                    values('$request->nom','$request->date_debut','$request->date_fin','$request->description','$request->lieu')");

        session()->flash('notification.message' , 'Evenement '.$request->nom.' Ajoutée avec succés');

        session()->flash('notification.type' , 'success');

        return back();
        
}
    public function delete($id_evenement)
    {
        
        Evenement::supprimer($id_evenement);

        session()->flash('notification.message' , 'Evenement '.$id_evenement.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

    }

}

