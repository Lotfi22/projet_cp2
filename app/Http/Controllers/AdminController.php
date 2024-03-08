<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //$this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!Auth::guard('admin')->check()){return redirect('/admin/login');}

        return view('admins.home');
    }

    public function create(Request $request)
    {

        dd("ani lha9t");

        // code...
    }


    //
}
