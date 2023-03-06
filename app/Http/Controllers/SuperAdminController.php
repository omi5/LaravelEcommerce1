<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SuperAdminController extends Controller
{
    public function dashboard(){
        $this->AdminAuthCheck();
        return view('admin.dashboard');
    }

    public function logout(){
        Session::flush();
        return Redirect::to('/adminform');
    }

    public function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return view('admin.dashboard');
        }
        else{
            return Redirect::to('/adminform')->send();
        }
    }
}
