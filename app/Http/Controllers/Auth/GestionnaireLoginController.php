<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionnaireLoginController extends Controller
{

    public function __construct()
    {

       $this->middleware('guest:gestionnaire', ['except' => 'logout']);

       //
    }


    public function login(Request $request)
    {

        // Attente d'authentification

        if(Auth::guard('gestionnaire')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            // Si c'est réussi, redirection vers le dashboard
            return redirect()->intended(route('gestionnaire.home'));
        }
            // sinon redirection vers le login
            return redirect()->back()->withInput($request->only('email','remember'));
    }


    public function showLoginForm()
    {
        return view('auth.gestionnaire-login');
    }


    //
}
