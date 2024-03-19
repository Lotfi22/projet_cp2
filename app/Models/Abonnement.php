<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Abonnement extends Model
{
    use HasFactory , SoftDeletes;
    public static function inserer(Request $request)
    {
              return DB::insert("insert into abonnements(type_abonnement,nbr_seances,tarif)
                    values('$request->type_abonnement','$request->nbr_seances','$request->tarif')");

    }

    /* suppression physique:
    public static function supprimer($id_abonnement)
    {
        return DB::delete("delete from abonnements where id = \"$id_abonnement\" ");

    }*/

    public static function supprimer($id_abonnement)
    {

        $abonnement=Abonnement::find($id_abonnement);
        $abonnement->delete() ;

        // code...
    }


    public static function misajour(Request $request)
    {
        return DB::update("
        UPDATE abonnements
        SET type_abonnement = '$request->type_abonnement',
            nbr_seances = '$request->nbr_seances',
            tarif = '$request->tarif'
        WHERE id = '$request->id' ");

    }

}
