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

        DB::insert("insert into abonnements(type_abonnement,nbr_seances,tarif)
                    values('$request->type_abonnement','$request->nbr_seances','$request->tarif')");

             session()->flash('notification.message' , 'Abonnement '.$request->nom.' Ajouté avec succés');

             session()->flash('notification.type' , 'success');

        return back();

        // code...
    }

}
