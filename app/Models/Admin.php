<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;



class Admin extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $guard='admin';


    public static function add (Request $request)
    {
          $password = Hash::make($request->password);
        DB::insert("insert into admins(nom,prenom,date_naissance,genre,email, password,num_telephone,num_urgence,adresse,id_qr)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->genre','$request->email','$password','$request->num_telephone','$request->num_urgence','$request->adresse','$request->id_qr')");

    }
    public static function modifier (Request $request, $id){
        
        $admin = Admin::find($id);
        $password = $request->password;
       //dd($password);
if ($password != $admin->password && $password != null){
    $password = Hash::make($request->password);

      }else{ 
        $password= $admin->password ;}
        if ($admin) {
            // Mettre à jour les attributs du admin avec les valeurs du formulaire
            
            $admin->nom = $request->nom;
            $admin->prenom = $request->prenom;
            $admin->date_naissance = $request->date_naissance;
            $admin->genre = $request->genre;
            $admin->email = $request->email;
            $admin->adresse = $request->adresse;
            $admin->num_telephone = $request->num_tel;
            $admin->num_urgence = $request->num_tel_urgence;
            $admin->password = $password;

            // Sauvegarder les modifications
            $admin->save();
            return $admin; 
        } else {
            return null;
        }

    }
    public static function supprimer($id_admin)
    {
        $admin =  Admin::find($id_admin);
        $admin->delete();
        // code...

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
    }
}
