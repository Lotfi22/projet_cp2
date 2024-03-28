<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;




class Gestionnaire extends Authenticatable
{
    use HasFactory , SoftDeletes;

    protected $guard='gestionnaire';

    public static function add(Request $request)
    { 
        $password = Hash::make($request->password); 
        $gest = new Gestionnaire();
        $gest->nom = $request->nom;
        $gest->prenom = $request->prenom;
        $gest->date_naissance = $request->date_naissance;
        $gest->genre = $request->genre;
        $gest->email = $request->email;
        $gest->num_tel = $request->num_tel;
        $gest->num_tel_urgence = $request->num_tel_urgence;
        $gest->password = $request->password;
        $gest->adresse = $request->adresse;

        $saved = $gest->save();

        return $gest;
    }

    public static function modifier (Request $request, $id){
        
        $gestionnaire = Gestionnaire::find($id);
        $password = Hash::make($request->password);

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

            $gestionnaire->password = $password;

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
   public static function verifier_password($request){
        
    $oldHashedPassword = $request->old_password;
    $newPassword = $request->new_password;    
    // Vérifier si le hachage de l'ancien mot de passe correspond au hachage du nouveau mot de passe
    if (Hash::check($newPassword, $oldHashedPassword)) {
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false]);
    }
    
    

}}

