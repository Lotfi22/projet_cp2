<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use app\Models\Admin;


class AdminLoginController extends Controller
{
//redicrected to admin it means if 

    // It defines the path where the user will be redirected after successfully logging in or registering. 
    protected $redirectTo = '/admin';



   //. This ensures that unauthenticated users (guests) can only access certain actions, typically those related to authentication, such as logging in.
    public function __construct()
    //This constructor method is used to initialize the controller and set up middleware for handling incoming HTTP requests
    {
<<<<<<< HEAD
       $this->middleware('guest:admin', ['except' => 'logout']);
=======
        $this->middleware('guest:admin', ['except' => 'logout']);
        /*'guest:admin': This is the name of the middleware being applied,
        The 'guest' middleware typically checks if the user is not authenticated */

        //['except' => 'logout'] : middleware should be applied to all controller methods except for the logout method
>>>>>>> 8149d367afa4450e05f6bb5e5842a8ce5f3d9bc7
    }

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
