<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Cart;
use Auth;
class CartController extends Controller
{
    //
    public function add(Request $request,$id)
    {
      $product = Product::find($id);
      $cart = New Cart;
      $cart->id_user = Auth::user()->id;
      $cart->id_product = $id;
      $cart->qnt = $request->qnt;
      $cart->id_seller = $product->id_user;
      $cart->subtotal = $product->price * $request->qnt;
      $cart->save();
      $products = Product::all();
      return view('categories',['products' => $products]);
    }
    public function details($id)
    {
      $carts = Cart::where('transaction_id','=',$id)->get();
      $total = 0;
      foreach($carts as $cart){
        $total = $total + $cart->subtotal;
      }
      return view('notifikasi_penjual',['carts' => $carts,'total' => $total]);
    }
    public function view1(){
      $products = Product::all();

      return view('categories',['products' => $products]);
    }
    public function viewCheckout(){
      $products = Product::all();

      return view('categories',['products' => $products]);
    }
    public function notifikasi_view(){
      $id = Auth::user()->id;
      if (Auth::user()->role_id == 2){
        $carts = Cart::where('id_seller','=',$id)->where('checkout_status','=',1)->get();
        return view('notifikasi',compact('carts'));
      }
      return view('notifikasi');
    }
    public function submit(){
      $id = Auth::user()->id;
      $mx = Cart::max('transaction_id');
      $mx = $mx + 1;
      $now = \Carbon\Carbon::now();
      Cart::where('id_user','=',$id)->where('checkout_status','=',0)->update(['transaction_id' => $mx]);
      Cart::where('id_user','=',$id)->where('checkout_status','=',0)->update(['date_insert' => $now]);
      Cart::where('id_user','=',$id)->where('checkout_status','=',0)->update(['checkout_status' => 1]);
      $carts = Cart::where('id_user','=',$id)->where('checkout_status','=',1)->orderBy('transaction_id','asc')->get();
      return view('notifikasi',compact('carts'));
    }
    public function view2(){
      $id = Auth::user()->id;
      $carts = Cart::where('id_user','=',$id)->where('checkout_status','=',0)->get();
      $total = 0;
      foreach($carts as $cart){
        $total = $total + $cart->subtotal;
      }
      return view('checkout',compact('carts','total'));
    }
    public function view(){
      $id = Auth::user()->id;
      $carts = Cart::where('id_user','=',$id)->where('checkout_status','=',0)->get();
      $total = 0;
      foreach($carts as $cart){
        $total = $total + $cart->subtotal;
      }
      echo $total;
      return view('cart',compact('carts','total'));
    }
    public function delete(Cart $cart)
    {
      $cart->delete();
      $id = Auth::user()->id;
      $carts = Cart::where('id_user','=',$id)->get();
      $total = 0;
      foreach($carts as $cart){
        $total = $total + $cart->subtotal;
      }
      return view('cart',compact('carts','total'));
    }
}
