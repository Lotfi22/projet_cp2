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
    public static function supprimer($id_facture)
    {

<<<<<<< HEAD
        $facture=Facture::find($id_facture);
        $facture->delete() ;

=======
        $facture=Facture::find($id_facture);    
        $facture->delete() ;
         
>>>>>>> e1a42e1b8fd0b1885bea1cfbe07c3d003cb9f955
        // code...
    }
    public static function inserer(Request $request)
    {


        dd();
        return DB::insert("insert into factures(ht,tva,versement,droit_timbre,etat_paiement,id_gestionnaire)

                    values('$request->ht','$request->tva','$request->versement','$request->droit_timbre','$request->etat_paiement','$request->id_gestionnaire')");




        // code...
    }
    public static function misajour(Request $request)
    {

<<<<<<< HEAD

        return DB::update
           ("
                UPDATE factures
                SET
=======
       
        return DB::update
           ("
                UPDATE factures
                SET 
>>>>>>> e1a42e1b8fd0b1885bea1cfbe07c3d003cb9f955
                    ht = '$request->ht',
                    tva = '$request->tva',
                    versement = '$request->versement',
                    droit_timbre = '$request->droit_timbre',
                    etat_paiement = '$request->etat_paiement',
                    id_gestionnaire = '$request->id_gestionnaire'
                WHERE id = $request->id
             ");
<<<<<<< HEAD

=======
        
>>>>>>> e1a42e1b8fd0b1885bea1cfbe07c3d003cb9f955

        // code...
    }

}
