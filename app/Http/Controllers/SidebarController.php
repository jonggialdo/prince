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
        return view('admin.create_product');
    }

    public function manage_product(){
        $product = Product::find(3);
        return view('admin.manage_product',['product' => $product]);
    }
    public function payment(){
        $trans = Cart::select('transaction_id','date_insert','id_user','transaction_status')->distinct()->paginate(10);
        $number = $trans->currentPage() * 2;
        $number -=2;
        return view('admin.payment',compact('trans','number'));
    }
    public function shipping(){
      $shipped = 2;

      $trans = Cart::select('transaction_id','date_insert','id_user','transaction_status')
      ->where('transaction_status','=', $shipped)
      ->distinct()->paginate(10);
      $number = $trans->currentPage() * 2;
      $number -=2;

      return view('admin.shipping',compact('trans','number'));

    }
    public function completed(){
        $trans = Cart::select('transaction_id','date_insert','id_user','transaction_status')
        ->where('transaction_status','=',3)
        ->distinct()->paginate(10);
        $number = $trans->currentPage() * 2;
        $number -=2;
        return view('admin.completed',compact('trans','number'));
    }
}
