<?php

namespace App\Http\Controllers;
use App\Product;
use App\Cart;
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
        $user = User::where('role_id','2')->get();
        return view('admin.create_product',['users'=>$user]);
    }

    public function manage_product(){
        $product = Product::All();
        return view('admin.manage_product',['product' => $product]);
    }
    public function payment(){
        $carts = Cart::latest()->paginate(2);
        $number = $carts->currentPage() * 2;
        $number -=2;
        return view('admin.payment',compact('carts','number'));
    }
    public function shipping(){
        return view('admin.shipping');
    }
}
