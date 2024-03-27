<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Groupe;
use App\Models\Coach;
use App\Models\Sport;
use PHPUnit\TextUI\XmlConfiguration\Group;

class GroupeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }
    public function index()
    {
        $groupes = Groupe::all();
        $coaches = Coach::all();
        $sports = Sport::all();
        $abonnements = Abonnement::all();

        return view('groupes.index',compact('groupes','coaches','sports','abonnements'));

        // code...
    }

    public function create(Request $request)
    {
        Groupe::add($request);

        return back();
    }

    public function delete($id_groupe)
    {

        Groupe::supprimer($id_groupe);

        session()->flash('notification.message' , 'Groupe '.$id_groupe.' supprimer avec succés');

        session()->flash('notification.type' , 'warning'); 

        return back();

        // code...
    }

    public function update(Request $request)
    {
        
        Groupe::misajour($request);

        session()->flash('notification.message' , 'Groupe '.$request->id.' Modifier avec succés');

        session()->flash('notification.type' , 'warning');

        return back();

        // code...
    }

    //hed la fonction mzel mrahich tmchi
    public function show($id)
{
    $coach_record = Coach::findOrFail($id);

    return view('groupes.index', compact('coach_record'));
}

    //
}