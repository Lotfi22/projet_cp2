<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Qr;
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
        $this->middleware('admin_log:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    
    public function index()
    {
        return view('admins.home');
    }
    public function index_1() {
        $admins = Admin::all(); 
        return view('admins.index',compact('admins'));
        
    }
    public function create(Request $request)
    {
        $admin = Admin::add($request);

        if ($admin) 
        {
            $qrCodeData = 'Id ' . $admin->id  ; 
            $qr = Qr::add($qrCodeData);
            $admin->id_qr = $qr->id; 
            $admin->save();
            session()->flash('notification.message', 'Admin ' . $request->nom . ' Ajouté avec succès');
            session()->flash('notification.type', 'success');
        } 

        return back();
    }
    public function update( Request $request,$id)
    {
        $admin = Admin::modifier($request, $id);

        if ($admin) {
            session()->flash('notification.message', 'admin ' . $id . ' modifié avec succès');
            session()->flash('notification.type', 'warning');
        } else {
            session()->flash('notification.message', 'admin non trouvé');
            session()->flash('notification.type', 'error');
        }
    
        return back();
        // code...
    }
    public function delete( Request $request )
    {
        $id_admin=($request->id_admin);
        $admin = Admin::find($id_admin);
        Admin::supprimer($id_admin);
        $admin = ($admin->getAttributes());
        return response()->json($admin ?? "admin introuvable");
        // code...
    }
    public function viewdeleted()  {

        $deletedadmins = Admin::onlyTrashed()->get();
        return view('admins.restore', compact('deletedadmins'));  
      }
      public function restore(Request $request)
{
    $id_admin = $request->id_admin;
    $admin = Admin::withTrashed()->find($id_admin);

    if ($admin) {

        $admin->restore();
        $admin = ($admin->getAttributes()); 
    } 
    return response()->json($admin ?? "admin introuvable!");
    
}

public function check_password(Request $request)
{
       
     $response=Admin::verifier_password($request);
     return $response;
    
    
}
}