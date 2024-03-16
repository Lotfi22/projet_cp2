<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Groupe extends Model
{
    use HasFactory;
    
    public static function add(Request $request)
    {
        DB::insert("insert into groupes(nom,id_coach,id_sport,id_abonnement,capacite)
                    values('$request->nom','$request->id_coach','$request->id_sport','$request->id_abonnement','$request->capacite')");
    }

    public static function groupes()
    {
        return DB::select("select * from groupes");
    }
    public static function coachs()
    {
        return DB::select("select * from coachs");
    }
    public static function sports()
    {
        return DB::select("select * from sports");
    }
    public static function abonnements()
    {
        return DB::select("select * from abonnements");
    }
}

