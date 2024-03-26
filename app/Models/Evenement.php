<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class Evenement extends Model
{
    use HasFactory  , SoftDeletes;

    public static function inserer (Request $request)
    {
        DB::insert("insert into evenements(nom,date_debut,date_fin,description,lieu)
                    values('$request->nom','$request->date_debut','$request->date_fin','$request->description','$request->lieu')");

    }

    public static function misajour(Request $request)
    {
        
        return DB::update

        ("
            UPDATE evenements
            SET
                nom = '$request->nom',
                date_debut = '$request->date_debut',
                date_fin = '$request->date_fin',
                description = '$request->description',
                lieu = '$request->lieu',
            WHERE id = $request->id
        ");
    }

    public static function supprimer1($id_evenement)
    {
        return DB::delete("delete from evenements where id = \"$id_evenement\" ");
    }

    public static function supprimer($id_evenement)
    {

        $evenement=Evenement::find($id_evenement);    
        $evenement->delete() ;
         
    }

    public static function restored($id_evenement)
    {
     $evenement = Evenement::withTrashed()->find($id_evenement);
     $evenement->restore(); 
    }
}










