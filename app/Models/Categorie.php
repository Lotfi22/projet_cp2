<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory , SoftDeletes;
    public static function inserer(Request $request)
    {
         return DB::insert("insert into categories(nom,description,age_min,age_max)
              values('$request->nom','$request->description','$request->age_min','$request->age_max')");

    }

       /*supression physique:
       public static function supprimer($id_categorie)
    {
        return DB::delete("delete from categories where id = \"$id_categorie\" ");

    }*/
    public static function supprimer($id_categorie)
    {

        $categorie=Categorie::find($id_categorie);
        $categorie->delete() ;

        // code...
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


}
