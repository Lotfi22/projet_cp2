<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Abonnement;


class AbonnementController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }


    public function index()
    {

        $abonnements = DB::select("select * from abonnements");

        return view('abonnements.index',compact('abonnements'));

        // code...
    }

    public function create(Request $request)
    {
        Abonnement::inserer($request);
             session()->flash('notification.message' , 'Abonnement '.$request->type_abonnement.' Ajouté avec succés');

             session()->flash('notification.type' , 'success');

        return back();

        // code...
    }


    public function delete($id_abonnement)
    {

        Abonnement::supprimer($id_abonnement);

        session()->flash('notification.message' , 'Abonnement '.$id_abonnement.' supprimer avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }


    public function update(Request $request)
    {
        Abonnement::misajour($request);

        session()->flash('notification.message' , 'Abonnement '.$request->id_abonnement.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }
    //
}
