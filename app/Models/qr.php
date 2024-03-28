<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;


class Qr extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['img']; // Assuming 'img' stores the QR code data (base64 encoded string)
    public static function add($qrCodeData)
    {


        $qrCode = QrCode::generate($qrCodeData); 
        $qr = new Qr();
        $qr->img = $qrCode;
        $saved = $qr->save();

        return $qr;
    }

    public static function supprimer($id_qr)
    {

        $qr=Qr::find($id_qr);
        $qr->delete() ;

        // code...
    }
    public static function restored($id_qr)
    {
     $qr = Qr::withTrashed()->find($id_qr);
     $qr->restore(); // 
 
     // Additional logic...
    }

}
