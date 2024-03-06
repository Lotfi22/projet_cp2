<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
 
        $validator = Validator::make($request->all(),[
        'username' => 'required|min:6',
        'password' => 'required|min:6'
        
        ]);

        if($validator->fails())
        {

            return redirect()->back()->withInput($request->only('username'))->withErrors($validator);
        }
      
        // Attente d'authentification 
        
        if(Auth::guard('admin')->attempt(['email' => $request->username, 'password' => $request->password], $request->remember))
        {
            // Si c'est réussi, redirection vers le dashboard
            return redirect()->intended(route('admin.home'));
        }        
            // sinon redirection vers le login
            return redirect()->back()->withInput($request->only('email','remember'));
    }

    //
}
