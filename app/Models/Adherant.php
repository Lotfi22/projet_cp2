<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Adherant extends Model
{
    use HasFactory;
    
    
    public static function inserer(Request $request)
    {
           
        return DB::insert("insert into adherants(nom, prenom, date_naissance, id_qr, genre, num_tel, num_tel_urgence, dossier_medical, adresse, email, type_abonnement)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->id_qr','$request->genre', '$request->num_tel', '$request->num_tel_urgence', '$request->dossier_medical', '$request->adresse', '$request->email', '$request->type_abonnement')");

        

        // code...
    }


    public static function modifier(Request $request)
    {

        return DB::update("
        UPDATE adherants
        SET nom = '$request->nom',
            prenom = '$request->prenom',
            date_naissance = '$request->date_naissance',
            id_qr = '$request->id_qr',
            genre = '$request->genre',
            num_tel = '$request->num_tel',
            num_tel_urgence = '$request->num_tel_urgence',
            dossier_medical = '$request->dossier_medical',
            adresse = '$request->adresse',
            email = '$request->email',
            type_abonnement = '$request->type_abonnement'
        WHERE id = '$request->id'
    ");

    }



    public static function supprimer($id_adherant)
    {

        return DB::delete("delete from adherants where id = \"$id_adherant\" ");

    }






}
