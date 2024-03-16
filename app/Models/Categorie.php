<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public static function inserer(Request $request)
    {
         return DB::insert("insert into categories(nom,description,age_min,age_max)
              values('$request->nom','$request->description','$request->age_min','$request->age_max')");

    }


    public static function supprimer($id_categorie)
    {
        return DB::delete("delete from categories where id = \"$id_categorie\" ");

    }

    public static function misajour(Request $request)
    {
        return DB::update("
        UPDATE categories
        SET nom = '$request->nom',
            description = '$request->description',
            age_min = '$request->age_min',
            age_max = '$request->age_max'
        WHERE id = '$request->id'
                   ");

    }

    use HasFactory;
}
