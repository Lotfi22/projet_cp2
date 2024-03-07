<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class QrController extends Controller
{
    public function index() {
        
        return view('qrs.create');
      

    }
    public function create(Request $request)
    {

        dd("ajouter_qr");
        // code...
    }
    //
}
