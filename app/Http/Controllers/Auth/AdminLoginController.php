<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use app\Models\Admin;


class AdminLoginController extends Controller
{

    protected $redirectTo = '/admin';


    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    protected function guard()
    {

        return Auth::guard('admin');
    }    


    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
 
        
        // Attente d'authentification 
        
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            // Si c'est réussi, redirection vers le dashboard
            return redirect()->intended(route('admin.home'));
        }        
            // sinon redirection vers le login
            return redirect()->back()->withInput($request->only('email','remember'));
    }


    protected function loggedOut(Request $request)
    {
        return redirect()->route('admin.login');
    }    

    //
}
