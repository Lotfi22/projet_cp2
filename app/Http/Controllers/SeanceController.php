<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB  ;
use App\Models\Seance;
use App\Models\Groupe;
use App\Models\Salle;

class SeanceController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }

    public function index()
    {
        $seances = Seance::all();

        $groupes = Groupe::all();

        $salles = salle::all();

        return view('seances.index',compact('seances','groupes','salles'));
    }

    public function viewdeleted()
    {
        $deletedseances = Seance::onlyTrashed()->get();
       
        return view('seances.restore', compact('deletedseances'));
    }
   
    public function create(Request $request)
    {
        Seance::inserer($request);

        session()->flash('notification.message' , 'Séance '.$request->id.' Ajoutée avec succés');

        session()->flash('notification.type' , 'success');

        return back();
    }

    public function delete($id_seance)
    {
        Seance::supprimer($id_seance);

        session()->flash('notification.message' , 'Séance '.$id_seance.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();
    }
    
    public function restore($id_seance)
    {

        Seance::restored($id_seance);

        session()->flash('notification.message' , 'Séance '.$id_seance.' restore avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();
    }

    public function update(Request $request)
    {
        Seance::misajour($request);

        session()->flash('notification.message' , 'Séance '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();
    }

}




