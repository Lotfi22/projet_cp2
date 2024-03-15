<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facture;

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
         Facture::inserer($request);

           session()->flash('notification.message' , 'Facture '.$request->id.' Ajoutée avec succés');

           session()->flash('notification.type' , 'success');

                    return back();

        // code...
    }
    public function delete($id_facture)
    {

        Facture::supprimer($id_facture);

        session()->flash('notification.message' , 'Fatégorie '.$id_facture.' supprimer avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }
    //
}
