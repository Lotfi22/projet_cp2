<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;



class Groupe extends Model
{
    use HasFactory , SoftDeletes;
    
    public static function add(Request $request)
    {
        DB::insert("insert into groupes(nom,id_coach,id_sport,id_abonnement,capacite)
                    values('$request->nom','$request->id_coach','$request->id_sport','$request->id_abonnement','$request->capacite')");
    }

    public static function supprimer($id_groupe)
    {

        $groupe=Groupe::find($id_groupe);
        $groupe->delete() ;

        // code...
    }

    public static function misajour(Request $request)
    {


        return DB::update
           ("
                UPDATE groupes
                SET
                    nom = '$request->nom',
                    id_coach = '$request->id_coach',
                    id_coach = '$request->id_coach',
                    id_sport = '$request->id_sport',
                    id_abonnement = '$request->id_abonnement',
                    capacite = '$request->capacite'
                WHERE id = $request->id
             ");

        // code...
    }
}

