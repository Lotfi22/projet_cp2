<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;


class Sport extends Model
{
    use HasFactory,SoftDeletes;

    
    public static function add(Request $request)
    {
        DB::insert("insert into sports(nom,description)
        values('$request->nom','$request->description')");
    }

    public static function supprimer($id_sport)
    {

        $sport=Sport::find($id_sport);
        $sport->delete() ;

        // code...
    }

    public static function misajour(Request $request)
    {


        return DB::update
           ("
                UPDATE sports
                SET
                    nom = '$request->nom',
                    description = '$request->description'
                WHERE id = $request->id
             ");

        // code...
    }

    /**/
}
