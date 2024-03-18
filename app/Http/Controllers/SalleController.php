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


    public function index()
    {

        $salles = DB::select("select * from salles");

        return view('salles.index',compact('salles'));

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
    public function delete($id_salle)
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


