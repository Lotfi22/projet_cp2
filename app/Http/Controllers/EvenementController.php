<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB  ;
use App\Models\Evenement;

class EvenementController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }

    public function index()
    {
        $evenements = Evenement::all(); 

        return view('evenements.index', compact('evenements'));
    }

    public function viewdeleted()
    {
        $deletedevenements = Evenement::onlyTrashed()->get();
       
        return view('evenements.restore', compact('deletedevenements'));
    }
   
    public function create(Request $request)
    {
        Evenement::inserer($request);

        session()->flash('notification.message' , 'Evenement '.$request->id.' Ajoutée avec succés');

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

    public function restore($id_evenement)
    {
        Evenement::restored($id_evenement);

        session()->flash('notification.message' , 'Evenement '.$id_evenement.' restore avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();
    }

    public function update(Request $request)
    {
        Evenement::misajour($request);

        session()->flash('notification.message' , 'Evenement '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();
    }

}
