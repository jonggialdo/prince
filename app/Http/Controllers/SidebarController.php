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

    public function payment(){
        $trans = Cart::where('transaction_status','=',0)->select('transaction_id','date_insert','id_user','transaction_status')->distinct()->paginate(10);
        $number = $trans->currentPage() * 2;
        $number -=2;
        return view('admin.payment',compact('trans','number'));
    }
    public function shipping(){
        $trans = Cart::where('transaction_status','=',2)->select('transaction_id','date_insert','id_user','transaction_status')->distinct()->paginate(10);
        $number = $trans->currentPage() * 10;
        $number -=10;
        return view('admin.shipping',compact('trans','number'));
    }

    public function completed(){
        $trans = Cart::select('transaction_id','date_insert','id_user','transaction_status')
        ->where('transaction_status','=',3)
        ->distinct()->paginate(10);
        $number = $trans->currentPage() * 10;
        $number -=10;
        return view('admin.completed',compact('trans','number'));
    }
}
