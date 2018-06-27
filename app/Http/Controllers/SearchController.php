<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;
use App\User;
use App\Cart;

class SearchController extends Controller
{
  public function searchFP(Request $request)
  {
    $searchdata =  $request->searchFP;

    $datas = DB::table('products')
    ->where('product_name', 'like', '%' . $searchdata . '%')
    ->get( );

    return view('search', compact('searchdata','datas'));
  }

  public function searchProductAdmin(Request $request)
  {
    $searchinput = $request->searchProductAdmin;
    dd($searchinput);
    if($searchinput == "")
    {
      $datas = Product::paginate(5);

      return view('admin.contoh', compact('datas'));

    }
    else
    {
      $datas = Product::where('product_name','like','%' . $searchinput . '%')->paginate(3);
      $datas->appends($req->only('product'));
      dd($datas);
      return view('admin.contoh', compact('datas'));

    }
  }
  //
  // public function searchUserAdmin()
  // {
  //
  // }
}
