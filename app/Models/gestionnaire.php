<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gestionnaire extends Model
{
    use HasFactory , SoftDeletes;
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
            return $gestionnaire; 
        } else {
            return null;
        }

    }
    public static function supprimer($id_gestionnaire)
    {
        $gestionnaire = Gestionnaire::find($id_gestionnaire);
        $gestionnaire->delete();
        // code...
    }
    
    public static function restaurer($id_gestionnaire)
   {
    $id_gestionnaire = Gestionnaire::withTrashed()->find($id_gestionnaire);
    $id_gestionnaire->restore(); // 
    // Additional logic...
   }
}

