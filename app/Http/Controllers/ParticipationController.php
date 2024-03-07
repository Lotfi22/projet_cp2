<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    
        public function index()
        {
    
            return view('participations.create');
    
        }
    
        public function create(Request $request)
        {
    
            dd("ani l7a9t");
        
        }  
}
