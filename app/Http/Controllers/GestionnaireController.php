<?php

namespace App\Http\Controllers;

use App\Models\Gestionnaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GestionnaireController extends Controller
{

    public function __construct()
    {
        $this->middleware('gestionnaire_log:gestionnaire');
    }


    public function index() {
        $gestionnaires = Gestionnaire::all(); 
        return view('gestionnaires.index',compact('gestionnaires'));
        
    }

    public function create(Request $request)
    {
        Gestionnaire::add($request);
        session()->flash('notification.message' , 'Gestionnaire '.$request->nom.' Ajoutée avec succés');

       session()->flash('notification.type' , 'success');
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
        return response()->json($gestionnaire ?? "Message");
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
    //
}
