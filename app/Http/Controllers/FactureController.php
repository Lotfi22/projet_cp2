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

        $factures = Facture::all(); 
        return view('factures.index', compact('factures'));

        // code...
    }

    public function viewdeleted()
    {
        $deletedfactures = Facture::onlyTrashed()->get();
       
        return view('factures.restore', compact('deletedfactures'));

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
    public function delete1($id_facture)
    {

        Facture::supprimer($id_facture);

        session()->flash('notification.message' , 'Facture '.$id_facture.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }
    public function restore1($id_facture)
    {

        Facture::restored($id_facture);

        session()->flash('notification.message' , 'Facture '.$id_facture.' restore avec succés');

        session()->flash('notification.type' , 'success'); 

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
    public function delete(Request $request)
    {


        $id_facture=($request->id_facture);
        
        $facture = Facture::find($id_facture);
        
        Facture::supprimer($id_facture);
        
        $facture = ($facture->getAttributes());
        
        return response()->json($facture ?? "Message");

        // code...
    }
    public function restore(Request $request)
    {
        $id_facture = $request->id_facture;
        $facture = Facture::withTrashed()->find($id_facture);

        if ($facture) {

            $facture->restore();
            $facture = ($facture->getAttributes()); 
        } 
    return response()->json($facture ?? "Facture introuvable!");
    }
    //
}
