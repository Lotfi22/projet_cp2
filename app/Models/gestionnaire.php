<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Gestionnaire extends Model
{
    use HasFactory;
    public static function add (Request $request)
    {
        DB::insert("insert into gestionnaires(nom,prenom,date_naissance,genre,email,num_tel,num_tel_urgence,adresse,id_qr)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->genre','$request->email','$request->num_tel','$request->num_tel_urgence','$request->adresse','$request->id_qr')");

    }

    public static function modifier (Request $request, $id){
        
        $gestionnaire = Gestionnaire::find($id);

        if ($gestionnaire) {
            // Mettre à jour les attributs du gestionnaire avec les valeurs du formulaire
            $gestionnaire->nom = $request->nom;
            $gestionnaire->prenom = $request->prenom;
            $gestionnaire->date_naissance = $request->date_naissance;
            $gestionnaire->genre = $request->genre;
            $gestionnaire->email = $request->email;
            $gestionnaire->adresse = $request->adresse;
            $gestionnaire->num_tel = $request->num_tel;
            $gestionnaire->num_tel_urgence = $request->num_tel_urgence;

            // Sauvegarder les modifications
            $gestionnaire->save();

            return $gestionnaire; // Vous pouvez retourner le gestionnaire mis à jour si nécessaire
        } else {
            return null;
        }

    }
    public static function supprimer($id_gestionnaire)
    {
        return DB::delete("delete from gestionnaires where id = \"$id_gestionnaire\" ");
        // code...
    }
}


