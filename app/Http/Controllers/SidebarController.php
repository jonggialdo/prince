<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function create_user(){
        return view('admin.create_user');
    }

    public function create_product(){
        return view('admin.create_product');
    }

    public function manage_product(){
        $product = Product::find(3);
        return view('admin.manage_product',['product' => $product]);
    }
    public function payment(){
        return view('admin.payment');
    }
    public function shipping(){
        return view('admin.shipping');
    }
}
