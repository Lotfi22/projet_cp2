<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salle extends Model
{
    use HasFactory  , SoftDeletes;
    public static function supprimer($id_salle)
    {
        return DB::delete("delete from salles where id = \"$id_salle\" ");

    }
    public static function supprimer1($id_salle)
    {

        $salle=Salle::find($id_salle);
        $salle->delete() ;

        // code...
    }

    public static function inserer(Request $request)
    {


      
        return DB::insert("insert into salles(capacite,nb_machine,superficie)

                    values('$request->capacite','$request->nb_machine','$request->superficie')");




        // code...
    }
    public static function misajour(Request $request)
    {


        return DB::update
           ("
                UPDATE salles
                SET
                    capacite = '$request->capacite',
                    nb_machine = '$request->nb_machine',
                    superficie = '$request->superficie'
                WHERE id = $request->id
             ");

        // code...
    }

}

