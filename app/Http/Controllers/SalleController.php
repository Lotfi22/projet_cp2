<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Salle;

class SalleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }

    public function delete(Request $request)
    {


        $id_salle=($request->id_salle);
        
        $salle = Salle::find($id_salle);
        
        Salle::supprimer($id_salle);
        
        $salle = ($salle->getAttributes());
        
        return response()->json($salle ?? "Message");

        // code...
    }
    public function restore1($id_salle)
    {

        Salle::restored($id_salle);

        session()->flash('notification.message' , 'Salle '.$id_salle.' restore avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();

        // code...
    }
    public function viewdeleted()
    {
        $deletedsalles = Salle::onlyTrashed()->get();
       
        return view('salles.restore', compact('deletedsalles'));

        // code...
    }
     public function restore(Request $request)
    {
        $id_salle = $request->id_salle;
        $salle = Salle::withTrashed()->find($id_salle);

        if ($salle)
         {

            $salle->restore();
            $salle = ($salle->getAttributes()); 
        } 
    return response()->json($salle ?? "Salle introuvable!");
    }

    public function index()
    {

        $salles = Salle::all(); 
        return view('salles.index', compact('salles'));

        // code...
    }

    public function create(Request $request)
    {
          Salle::inserer($request);

           session()->flash('notification.message' , 'Salle '.$request->id.' Ajoutée avec succés');

           session()->flash('notification.type' , 'success');

                    return back();

        // code...
    }
    public function delete1($id_salle)
    {

        Salle::supprimer($id_salle);

        session()->flash('notification.message' , 'Salle '.$id_salle.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }
    public function update(Request $request)
    {
        
        Salle::misajour($request);

        session()->flash('notification.message' , 'Salle '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }
    //
}


