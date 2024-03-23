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


    public static function add (Request $request)
    {
        DB::insert("insert into seances(heure_debut,heure_fin,id_groupe,id_salle)
                    values('$request->heure_debut','$request->heure_fin','$request->id_groupe','$request->id_salle')");

    }

    public static function modifier (Request $request, $id){
        
        $seance = seance::find($id);

        if ($seance) {
            // Mettre à jour les attributs du seance avec les valeurs du formulaire
            $seance->heure_debut = $request->heure_debut;
            $seance->heure_fin = $request->heure_fin;
            $seance->id_groupe = $request->id_groupe;
            $seance->id_salle = $request->id_salle;

            // Sauvegarder les modifications
            $seance->save();

            return $seance; // Vous pouvez retourner la seance mis à jour si nécessaire
        } else {
            return null;
        }

    }
    public static function supprimer($id_seance)
    {
        return DB::delete("delete from seances where id = \"$id_seance\" ");
    }

    
    public static function supprimer1($id_seance)
    {

        $seance=seance::find($id_seance);    
        $seance->delete() ;
         
    }
}




