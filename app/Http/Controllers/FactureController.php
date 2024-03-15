<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FactureController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }


    public function index()
    {

        $factures = DB::select("select * from factures");

        return view('factures.index',compact('factures'));

        // code...
    }

    public function create(Request $request)
    {   
        //($request->all());
        
        DB::insert("insert into factures(ht,tva,versement,droit_timbre,etat_paiement,id_gestionnaire)
                    
                    values('$request->ht','$request->tva','$request->versement','$request->droit_timbre','$request->etat_paiement','$request->id_gestionnaire')");

        return back();

        // code...
    }
    //
}
