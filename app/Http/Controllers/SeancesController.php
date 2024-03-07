<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeancesController extends Controller
{
        public function index()
    {
        
        return view('seances.create');

    }

<<<<<<< HEAD
    public function create (Request $request)
=======
    public function create (request $request)
>>>>>>> f6d2bcba3c357ae977ad44d93b93958cd81a5682
    {
        dd("why do when you can don't");
    }
}

