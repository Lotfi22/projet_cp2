<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class Seance extends Model
{
    use HasFactory  , SoftDeletes;


    public static function inserer (Request $request)
    {
        DB::insert("insert into seances(heure_debut,heure_fin,id_groupe,id_salle)
                    values('$request->heure_debut','$request->heure_fin','$request->id_groupe','$request->id_salle')");
    }

    public static function misajour(Request $request)
    {
        
        return DB::update

        ("
            UPDATE seances
            SET
                heure_debut = '$request->heure_debut',
                heure_fin = '$request->heure_fin',
                id_groupe = '$request->id_groupe',
                id_salle = '$request->id_salle',
            WHERE id = $request->id
        ");
    }
    
    public static function supprimer1($id_seance)
    {
        return DB::delete("delete from seances where id = \"$id_seance\" ");
    }

    public static function supprimer($id_seance)
    {
        $seance=seance::find($id_seance);    
        $seance->delete() ;    
    }

    public static function restored($id_seance)
    {
     $seance = Seance::withTrashed()->find($id_seance);
     $seance->restore(); 
    }
}




