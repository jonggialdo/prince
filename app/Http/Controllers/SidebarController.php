<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function manage_user(){
        return view('admin.manage_user');
    }
    public function manage_user(){
        return view('admin.manage_user');
    }
}

