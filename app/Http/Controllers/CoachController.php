<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Coach;


class CoachController extends Controller
{

     public function __construct()
    {
        $this->middleware('admin_log:admin');
    }



    public function index()
    {

<<<<<<< HEAD
        $coaches = Coach::all(); 
        return view('coaches.index', compact('coaches'));
=======
        $coaches = DB::select("select * from coaches");

        return view('coaches.index',compact('coaches'));


>>>>>>> 5f6496b2d1cd7ac9727dff99990522b3d695fd3d

        // code...
    }

    
    public function create(Request $request)
    {
        
        Coach::inserer($request);

        session()->flash('notification.message' , 'Coach '.$request->nom.' Ajouté avec succés');

        session()->flash('notification.type' , 'success'); 

        return back();


    }

    public function update(Request $request)
    {
        
        Coach::modifier($request);

        session()->flash('notification.message' , 'Coach '.$request->id.' Modifié avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }


    

    public function delete($id_coach)
    {
        
        Coach::supprimer($id_coach);

        session()->flash('notification.message' , 'Coach '.$id_coach.' Supprimé avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }




}





