<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;

class ProductController extends Controller
{
    public function index()
    {
      $product = Product::all();
      return view('admin.manage_product', ['product'=>$product]);
    }

    public function view()
    {
      return view('admin.create_product');
    }

    public function show($id)
    {
      $product = Product::find($id);
      return view('admin.single_product', ['product'=>$product]);
    }

    public function create(Request $request)
    {
      $product = new Product;
      $product->id_user = $request->id_user;
      $product->product_name = $request->product_name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->variant = $request->variant;
      $product->photo_product = $requets->photo_product;
      $product->stock = $request->stock;
      $product->purchase = $request->purchase;
      $product->viewer = $request->viewer;
      $product->save();

      return redirect('admin.view_product');
    }

    public function edit($id)
    {
      $product = Product::find($id);
      return view('admin.edit_product', ['product'=>$product]);
    }

    public function update(Request $request, $id)
    {
      $product = Product::where('id', $id)->get();
      $product->product_name = $request->product_name;
      $product->stock = $request->stock;
      $user->save();

      return redirect('admin.view_product');
    }

    public function delete($id)
    {
      $product = Product::find($id);
      $product->delete();
      return redirect('admin.view_product');
    }
}
