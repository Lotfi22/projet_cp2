<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\Facades\Image;
use BaconQrCode\Writer as QrCodeWriter; // Import the QrCodeWriter class
use BaconQrCode\Encoder\Encoders;
class TestController extends Controller


//NB : THIS FILE SHOULD BE DELETED LATER, ITS JUST FOR INITIAL TEST

{
    public function afaf()
    {

        dd('afaf \'s routes ' );

        // code...
    }

    public function chaima()
    {

        dd('chaima \'s routes ' );

        // code...
    }

    public function imene()
    {

        dd('imene \'s routes ' );

        // code...
    }

    public function meriem()
    {

        dd('meriem \'s routes ' );

        // code...
    }

    public function rahma()
    {

        dd('rahma \'s routes ' );

        // code...
    }

    public function selma()
    {

        dd('selma \'s routes ' );

        // code...
    }

        

    public function generate(Request $request)
    {

        Qrcode::encoding("UTF-8")
        ->color(0,0,0)
        ->backgroundColor(245, 234, 62)
        ->size(200)
        ->generate("Test",'../public/codes-qr/admins/3.svg');

        dd("done");
        //
    }





    //
}
