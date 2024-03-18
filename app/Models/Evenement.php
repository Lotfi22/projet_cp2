<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Evenement extends Model
{
    use HasFactory;
    public static function add (Request $request)
    {
        DB::insert("insert into evenements(nom,date_debut,date_fin,description,lieu)
                    values('$request->nom','$request->date_debut','$request->date_fin','$request->description','$request->lieu')");

    }

    public static function modifier (Request $request, $id){
        
        $evenement = Evenement::find($id);

        if ($evenement) {
            // Mettre à jour les attributs du evenement avec les valeurs du formulaire
            $evenement->nom = $request->nom;
            $evenement->date_debut = $request->date_debut;
            $evenement->date_fin = $request->date_fin;
            $evenement->description = $request->description;
            $evenement->lieu = $request->lieu;

            // Sauvegarder les modifications
            $evenement->save();

            return $evenement; // Vous pouvez retourner le evenement mis à jour si nécessaire
        } else {
            return null;
        }

    }
    public static function supprimer($id_evenement)
    {
        return DB::delete("delete from evenements where id = \"$id_evenement\" ");
        // code...
    }
}




