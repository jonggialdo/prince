<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
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
        $user = Auth::user();
        $products = Product::all();
        if (is_null($user))  return view('auth.login');
        if ($user->role_id == 3 or $user->role_id == 2){
            return view('index',compact('user','products'));
        }
        if ($user->role_id == 1){
            return view('admin.index',compact('user'));
        }
    }
    public function index1(){
        $products = Product::all();
        return view('/',compact('products'));   
    }
}
