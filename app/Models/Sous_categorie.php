<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Sous_categorie extends Model
{
    use HasFactory;


    public static function get_all_sous_categories($id_categorie)
    {


        $Sous_categories =  DB::select(" select * from sous_categories where id_categorie = '$id_categorie' ");


        return $Sous_categories;

        // code...
    }

    public static function ajouter($id_categorie,$request)
    {

        return DB::insert("insert into sous_categories (nom,description,id_categorie,id_sport) values(\"$request->nom\",\"$request->description\",'$id_categorie',1)");

        // code...
    }



    //
}
