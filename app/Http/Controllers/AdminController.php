<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
 

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }
    

    public function show_dashboard(Request $request){

        $admin_email = $request->email;
        $admin_password =md5( $request->password);

        $login = Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

        // echo "<pre>";
        // print_r($login);
        // die;
        if($login){
            Session::put('admin_id' , $login->admin_id);
            Session::put('admin_name' ,$login->admin_name);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Email and password Invalid!');
            return Redirect::to('/adminform');
        }
    }

    
}
