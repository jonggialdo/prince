<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function create_user(){
        return view('admin.create_user');
    }
    public function manage_user(){
        return view('admin.manage_user');
    }
}

