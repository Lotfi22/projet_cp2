<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;


class Facture extends Model
{
    use HasFactory;
    public static function supprimer($id_facture)
    {


        return DB::delete("delete from factures where id = \"$id_facture\" ");

        

        // code...
    }
    public static function inserer(Request $request)
    {

       
              return DB::insert("insert into factures(ht,tva,versement,droit_timbre,etat_paiement,id_gestionnaire)
                    
                    values('$request->ht','$request->tva','$request->versement','$request->droit_timbre','$request->etat_paiement','$request->id_gestionnaire')");


        

        // code...
    }
    
}
