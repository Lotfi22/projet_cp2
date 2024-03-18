<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB  ;
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

        session()->flash('notification.message' , 'Facture '.$id_facture.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }
    public function update(Request $request)
    {
        
        Facture::misajour($request);

        session()->flash('notification.message' , 'Facture '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }
    //
}
