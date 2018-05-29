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
      $cart->id_user = $product->id_user;
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
    public function view(){
      $cart = Cart::all();
      return view('cart',['carts' => $cart]);
    }
}
