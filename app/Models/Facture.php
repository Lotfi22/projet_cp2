<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facture extends Model
{
    use HasFactory  , SoftDeletes;

    public static function supprimer1($id_facture)
    {
        return DB::delete("delete from factures where id = \"$id_facture\" ");

    }

    public static function supprimer($id_facture)
    {

        $facture=Facture::find($id_facture);
        $facture->delete() ;

        // code...
    }

    public static function restored($id_facture)
   {
    $facture = Facture::withTrashed()->find($id_facture);
    $facture->restore(); // 

    // Additional logic...
   }
    public static function inserer(Request $request)
    {



        return DB::insert("insert into factures(ht,tva,versement,droit_timbre,etat_paiement,id_gestionnaire)

                    values('$request->ht','$request->tva','$request->versement','$request->droit_timbre','$request->etat_paiement','$request->id_gestionnaire')");
            



        // code...
    }
    public static function misajour(Request $request)
    {


        return DB::update
           ("
                UPDATE factures
                SET
                    ht = '$request->ht',
                    tva = '$request->tva',
                    versement = '$request->versement',
                    droit_timbre = '$request->droit_timbre',
                    etat_paiement = '$request->etat_paiement',
                    id_gestionnaire = '$request->id_gestionnaire'
                WHERE id = $request->id
             ");

        // code...
    }

}
