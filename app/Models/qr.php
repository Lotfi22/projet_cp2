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

        $data = explode("," , $qrCodeData);

        $id_admin = $data[1];

        Qrcode::encoding("UTF-8")
        ->color(0,0,0)
        ->backgroundColor(245, 234, 62)
        ->size(200)
        ->generate($qrCodeData,'../public/codes-qr/adherants/'.$qrCodeData.'.svg');
        
        $qr = new Qr();
        $qr->img = '/codes-qr/adherants/'.$qrCodeData.'.svg';
        $saved = $qr->save();

        $last_qr_id = Qr::latest()->first()->id;

        DB::update("update adherants set id_qr = $last_qr_id where id = $id_admin");
        
        return true;
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
