<?php

namespace App\Http\Controllers;

use App\Models\Gestionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Qr;
use Illuminate\Support\Facades\Hash;



class GestionnaireController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('gestionnaire_log:gestionnaire');
    // }
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }

    public function index() {
        $gestionnaires = Gestionnaire::all(); 
        return view('gestionnaires.index',compact('gestionnaires'));   
    }

    public function create(Request $request)
    {
        $gest = Gestionnaire::add($request);

        if ($gest) 
        {
            $qrCodeData = 'Id ' . $gest->id  ; 
            $qr = Qr::add($qrCodeData);
            $gest->id_qr = $qr->id; 
            $gest->save();
            session()->flash('notification.message', 'Gestionnaire ' . $request->nom . ' Ajouté avec succès');
            session()->flash('notification.type', 'success');
        } 

        return back();
    }
    public function delete1( $id_gestionnaire )
    {

        Gestionnaire::supprimer($id_gestionnaire);

        session()->flash('notification.message' , 'gestionnaire'.$id_gestionnaire.' supprimer avec succés');

        session()->flash('notification.type' ,'warning'); 
        return back();


        // code...
    }
    public function delete( Request $request )
    {
       
        $id_gestionnaire=($request->id_gestionnaire);
        $gestionnaire = Gestionnaire::find($id_gestionnaire);
        Gestionnaire::supprimer($id_gestionnaire);
        $gestionnaire = ($gestionnaire->getAttributes());
        return response()->json($gestionnaire ?? "Gestionnaire introuvable");
        // code...
    }
    
    public function update( Request $request,$id)
    {
        $gestionnaire = Gestionnaire::modifier($request, $id);

        if ($gestionnaire) {
            session()->flash('notification.message', 'Gestionnaire ' . $id . ' modifié avec succès');
            session()->flash('notification.type', 'warning');
        } else {
            session()->flash('notification.message', 'Gestionnaire non trouvé');
            session()->flash('notification.type', 'error');
        }
    
        return back();
        // code...
    }
    public function restore(Request $request)
{
    $id_gestionnaire = $request->id_gestionnaire;
    $gestionnaire = Gestionnaire::withTrashed()->find($id_gestionnaire);

    if ($gestionnaire) {

        $gestionnaire->restore();
        $gestionnaire = ($gestionnaire->getAttributes()); 
    } 
    return response()->json($gestionnaire ?? "Gestionnaire introuvable!");
    
}
    public function viewdeleted()  {

        $deletedgestionnaires = Gestionnaire::onlyTrashed()->get();
        return view('gestionnaires.restore', compact('deletedgestionnaires'));  
      }
    //
    public function check_password(Request $request)
{
       
     $response=Gestionnaire::verifier_password($request);
     return $response;
    
    
}
}
