<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
use App\Models\Seance;

class PresenceController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('admin_log:admin');
    }

    public function index()
    {
        $presences = Presence::all();

        return view('presences.index', compact('presences'));
    }
    
    public function home($id_seance)
    {
        $presences = (presence::get_all_presences($id_seance));

        $seance=Seance::find($id_seance);

        return view('presences.index',compact('presences','seance'));
    }

}
