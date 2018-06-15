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
      $cart->subtotal = $product->price * $request->qnt;
      $cart->save();
      $products = Product::all();
      return view('categories',['products' => $products]);
    }
    public function view1(){
      $products = Product::all();

      return view('categories',['products' => $products]);
    }
    public function view2(){
      $id = Auth::user()->id;
      $carts = Cart::where('id_user','=',$id)->get();
      $total = 0;
      foreach($carts as $cart){
        $total = $total + $cart->subtotal;
      }
      return view('checkout',compact('carts','total'));
    }
    public function view(){
      $id = Auth::user()->id;
      $carts = Cart::where('id_user','=',$id)->get();
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
