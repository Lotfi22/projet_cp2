<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use app\Models\Admin;


class AdminLoginController extends Controller
{
//redicrected to admin it means if 

    // It defines the path where the user will be redirected after successfully logging in or registering. 
    protected $redirectTo = '/admin';


   //. This ensures that unauthenticated users (guests) can only access certain actions, typically those related to authentication, such as logging in.
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }
    //In this case, it returns the admin guard using Laravel's Auth::guard() method.
    // determining whether a user is authenticated for a given request. They verify the user's credentials,
    protected function guard()
    {

        return Auth::guard('admin');
    }    

    // from the name its clear that itnreturns the auth admin view
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
