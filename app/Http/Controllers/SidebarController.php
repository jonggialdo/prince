<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function create_user(){
        return view('admin.create_user');
    }
    public function manage_user(){
        return view('admin.manage_user2');
    }
    public function create_product(){
        return view('admin.create_product');
    }
    public function manage_product(){
        return view('admin.manage_product');
    }
}

