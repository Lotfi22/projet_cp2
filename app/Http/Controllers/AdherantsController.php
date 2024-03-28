<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qr;
use DB;
use App\Models\Adherant;


class AdherantsController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }



    public function index()
    {

        $adherants = Adherant::all(); 
        return view('adherants.index', compact('adherants'));

        // code...
    }

    
    public function create(Request $request)
    {
        $adherent = Adherant::add($request);

        if ($adherent) 
        {
            $qrCodeData = 'Id ' . $adherent->id  ; 
            $qr = Qr::add($qrCodeData);
            $adherent->id_qr = $qr->id; 
            $adherent->save();
            session()->flash('notification.message', 'Adherent ' . $request->nom . ' Ajouté avec succès');
            session()->flash('notification.type', 'success');
        } 

        return back();
    }


    public function update(Request $request)
    {
        
        Adherant::modifier($request);

        session()->flash('notification.message' , 'Adhérant '.$request->id.' Modifié avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }


    

    public function delete(Request $request)
    {
        
        $id_adherant=($request->id_adherant);
        $id_qr=($request->id_qr);

        $adherant = Adherant::find($id_adherant);
        Adherant::supprimer($id_adherant);
     
        $adherant = ($adherant->getAttributes());
        return response()->json($adherant ?? "Adhérant introuvable!");
    }

    public function viewdeleted()
    {

        $deletedadherants = Adherant::onlyTrashed()->get();
       
        return view('adherants.restore', compact('deletedadherants'));

        // code...
    }

    public function restore(Request $request)
    {
        $id_adherant = $request->id_adherant;
        $adherant = Adherant::withTrashed()->find($id_adherant);

        if ($adherant) {

            $adherant->restore();
            $adherant = ($adherant->getAttributes()); 
        } 
    return response()->json($adherant ?? "Adherant introuvable!");
    }

    
    public function profile($id_adherant)
    {    

        $adherant = Adherant::find($id_adherant);
        return view('adherants.profile', compact('adherant'));
    }




}











































//        dd("meow");