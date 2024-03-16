<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return back();

        // code...
    }

}
