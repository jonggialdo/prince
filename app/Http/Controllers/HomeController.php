<?php

namespace App\Http\Controllers;

use Illuminate\HTML\HtmlServicePr2ovider;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Cart;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sum_user = 0;
        $sum_product = 0;
        $sum_transaction = 0;
        $sum_seller = 0;

        $user = Auth::user();
        $products = Product::all();
        if (is_null($user))  return view('index', compact('products'));
        if ($user->role_id == 3 or $user->role_id == 2){
            return view('index',compact('user','products'));
        }
        if ($user->role_id == 1){

            $count_user = DB::table('users')->where('role_id','=','3')->get();
            $count_transaction = DB::table('carts')->where('transaction_id','=','3')->get();
            $count_seller = DB::table('users')->where('role_id','=','2')->get();

            foreach($count_user as $user){
              $sum_user++;
            }

            foreach($products as $product){
              $sum_product++;
            }

            foreach($count_transaction as $transaction){
              $sum_transaction++;
            }

            foreach($count_seller as $seller){
              $sum_seller++;
            }

            return view('admin.index',compact('user','sum_user','sum_transaction','sum_product','sum_seller'));
        }
    }
    public function index1(){
        $products = Product::all();
        return view('/',compact('products'));   
    }
}
