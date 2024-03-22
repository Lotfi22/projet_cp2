<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Seance;
use App\Models\Groupe;
use App\Models\Salle;

class SeanceController extends Controller
{
    public function index()
    {
        $seances = Seance::all();
        $groupes = Groupe::all();
        $salles = salle::all();

        return view('seances.index',compact('seances','groupes','salles'));


    }

    public function create (Request $request)
    {
        DB::insert("insert into seances(heure_debut,heure_fin,id_groupe,id_salle)
                    values('$request->heure_debut','$request->heure_fin','$request->id_groupe','$request->id_salle')");

        session()->flash('notification.message' , 'Seance '.$request->id.' Ajoutée avec succés');

        session()->flash('notification.type' , 'success');

        return back();
        
}
    public function delete($id_seance)
    {
        
        seance::supprimer($id_seance);

        session()->flash('notification.message' , 'seance '.$id_seance.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

    }

    public function update( Request $request,$id)
    {
        $seance = Seance::modifier($request, $id);

        if ($seance) {
            session()->flash('notification.message', 'Seance ' . $id . ' modifié avec succès');
            session()->flash('notification.type', 'warning');
        } else {
            session()->flash('notification.message', 'Seance non trouvé');
            session()->flash('notification.type', 'error');
        }
    
        return back();
    }

}


