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
      $max_carts = Cart::where('transaction_status','=',0)
      ->where('id_product','=', $id)->where('checkout_status','=',0)->get();
      // jika produk blm ada di cart
      if ($max_carts->isEmpty()){
        $cart = New Cart;
        $cart->id_user = Auth::user()->id;
        $cart->id_product = $id;
        $cart->qnt = $request->qnt;
        $cart->id_seller = $product->id_user;
        $cart->subtotal = $product->price * $request->qnt;
        $cart->save();
      }
      else{
        $total=0;
        foreach($max_carts as $max_cart){
          $total = $total+$max_cart->qnt;
        }
        if($product->stock-$total>= $request->qnt){
          foreach($max_carts as $max_cart){
            Cart::where('id','=',$max_cart->id)->update(['qnt'=>$max_cart->qnt + $request->qnt]);
            Cart::where('id','=',$max_cart->id)->update(['subtotal'=>$max_cart->subtotal + $request->qnt*$product->price]);
          }
        }
      }

      $products = Product::all();
      return redirect()->back()->with(['products' => $products]);
    }
    public function kirim_barang($id)
    {
      Cart::where('id_seller','=',Auth::user()->id)->update(['transaction_status'=>2]);
      $carts = Cart::where('id_seller','=',$id)->where('checkout_status','=',1)->get();
      return view('notifikasi',compact('carts'));
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
    public function updateStatus($id)
    {
      Cart::where('transaction_id','=',$id)->update(['transaction_status'=> 1]);
      $transaction = Cart::where('transaction_id','=',$id)->get();
      foreach($transaction as $tr){
        $item = Product::find($tr->id_product);
        $item->update(['purchase'=>$item->purchase+ $tr->qnt]);
        $item->update(['stock'=>$item->stock-$tr->qnt]);
      }
      $trans = Cart::where('transaction_status','=',0)->select('transaction_id','date_insert','id_user','transaction_status')->distinct()->paginate(10);
      $number = $trans->currentPage() * 2;
      $number -=2;
      return view('admin.payment',compact('trans','number'));
    }
    public function notifikasi_view(){
      $id = Auth::user()->id;
      if (Auth::user()->role_id == 2){
        $carts = Cart::where('id_seller','=',$id)->where('checkout_status','=',1)->get();
        return view('notifikasi',compact('carts'));
      }
      return view('notifikasi');
    }
    public function notifikasi_pembeli()
    {
      return view('notifikasi_pembeli');
    }

    public function submit()
    {
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

    public function viewCheckout(){
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
    public function selesai($transaction_id, $id_seller){
        Cart::where('transaction_id','=',$transaction_id)
        ->where('id_seller','=',$id_seller)
        ->update(['transaction_status'=> 3]);
       $id = Auth::user()->id;
       $carts = Cart::where('id_user','=',$id)->get();
        return view('notifikasi_pembeli',compact('carts'));
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
