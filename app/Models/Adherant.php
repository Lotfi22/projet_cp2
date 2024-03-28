<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Adherant extends Model
{
    
    use HasFactory, SoftDeletes;
    
    
    public static function add(Request $request)
    {
        $adherent = new Adherant();
        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->date_naissance = $request->date_naissance;
        $adherent->genre = $request->genre;
        $adherent->email = $request->email;
        $adherent->num_tel = $request->num_tel;
        $adherent->num_tel_urgence = $request->num_tel_urgence;
        $adherent->dossier_medical = $request->dossier_medical;
        $adherent->adresse = $request->adresse;
        $adherent->type_abonnement = $request->type_abonnement;

        $saved = $adherent->save();

        return $adherent;
    }


    public static function modifier(Request $request)
    {

        return DB::update("
        UPDATE adherants
        SET nom = '$request->nom',
            prenom = '$request->prenom',
            date_naissance = '$request->date_naissance',
            id_qr = '$request->id_qr',
            genre = '$request->genre',
            num_tel = '$request->num_tel',
            num_tel_urgence = '$request->num_tel_urgence',
            dossier_medical = '$request->dossier_medical',
            adresse = '$request->adresse',
            email = '$request->email',
            type_abonnement = '$request->type_abonnement'
        WHERE id = '$request->id'
    ");

    }



    public static function supprimer($id_adherant)
    {

        $adherant=Adherant::find($id_adherant);    
        $adherant->delete() ;
         
        
    }


    public static function restaurer($id_adherant)
    {

    $id_adherant = Adherant::withTrashed()->find($id_adherant);
    $id_adherant->restore(); // 

    }

    // public function presences()
    // {
    //     return $this->hasMany(Presence::class);
        
    // }





}
