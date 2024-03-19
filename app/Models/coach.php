<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Coach extends Model
{
    use HasFactory;

  
      public static function inserer(Request $request)
    {
           
        return DB::insert("insert into coachs(nom, prenom, date_naissance, id_qr, genre, nbr_telephone, nbr_telephone_urgence, adress, email)
                    values('$request->nom','$request->prenom','$request->date_naissance','$request->id_qr','$request->genre', '$request->nbr_telephone', '$request->nbr_telephone_urgence', '$request->adress', '$request->email')");


        

        // code...
    }


    public static function modifier(Request $request)
    {

        return DB::update("
        UPDATE coachs
        SET nom ='$request->nom',
            prenom = '$request->prenom',
            date_naissance = '$request->date_naissance',
            id_qr = '$request->id_qr',
            genre = '$request->genre', 
            nbr_telephone = '$request->nbr_telephone', 
            nbr_telephone_urgence = '$request->nbr_telephone_urgence', 
            adress = '$request->adress', 
            email = '$request->email'
        WHERE id = '$request->id'
    ");

    }



    public static function supprimer($id_coach)
    {

        return DB::delete("delete from coachs where id = \"$id_coach\" ");

    }
}

