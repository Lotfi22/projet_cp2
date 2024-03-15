<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Groupe;
class GroupeController extends Controller
{
    public function index()
    {
        $groupes = Groupe::groupes();
        $coachs = Groupe::coachs();
        $sports = Groupe::sports();
        $abonnements = Groupe::abonnements();

        return view('groupes.index',compact('groupes','coachs','sports','abonnements'));

        // code...
    }

    public function create(Request $request)
    {
        Groupe::add($request);

        return back();
    }


    //
}