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

        $evenements = Evenement::all();        
        
        return view('evenements.index',compact('evenements'));
    }

    public function create(Request $request)
    {
        Evenement::inserer($request);

           session()->flash('notification.message' , 'Événement '.$request->id.' Ajoutée avec succés');

           session()->flash('notification.type' , 'success');

        return back();
    }

    public function delete($id_evenement)
    {
        
        Evenement::supprimer($id_evenement);

        session()->flash('notification.message' , 'Événement '.$id_evenement.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

    }

    public function update(Request $request)
    {
        Evenement::misajour($request);

        session()->flash('notification.message' , 'Événement '.$request->id_evenement.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();
    }

    public function viewdeleted()
    {
        $deletedevenements = Evenement::onlyTrashed()->get();
       
        return view('evenements.restore', compact('deletedevenements'));

    }

    public function restore($id_evenement)
    {

        evenement::restored($id_evenement);

        session()->flash('notification.message' , 'Événement '.$id_evenement.' restore avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();

    }

}

