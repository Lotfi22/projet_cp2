<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use app\Models\Admin;


class AdminLoginController extends Controller
{

    protected $redirectTo = '/admin';



    public function __construct()
    //This constructor method is used to initialize the controller and set up middleware for handling incoming HTTP requests
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
        /*'guest:admin': This is the name of the middleware being applied,
        The 'guest' middleware typically checks if the user is not authenticated */

        //['except' => 'logout'] : middleware should be applied to all controller methods except for the logout method
    }
    

    protected function guard()
    {
        return Auth::guard('admin');
        /* a guard is like a digital bouncer for your application, checking IDs at the door
        , controlling who gets in, and making sure everyone follows the rules once they're inside */
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
