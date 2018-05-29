<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;

class ProductController extends Controller
{
    public function manage_product()
    {
      $id_admin = 1;
      $products = Product::latest()->paginate(10);
      $number = $products->currentPage() * 2;
      $number -=2;
      //dd($users);
      return view('admin.manage_product', compact('number', 'id_admin', 'products'));
    }
    public function index()
    {
      //dd($product);
      $product = Product::find($id);
      return view('admin.manage_product',['products'=>$product]);
    }

    public function view()
    {
      return view('admin.create_product');
    }

    public function create(Request $request)
    {
      //   'photo_product' => $request->photo_product,
      //   'stock'                 => $request->stock,
      //   'purchase'           => $request->purchase,
      //   'viewer'               => $request->viewer,
      // ]);
      //
      // $photo_product = $request->file('photo_product')->store('photo_product');
      // $request->product()->update([
      //   'photo_product' => $photo_product
      // ]);

      $product = new Product;
      $product->id_user = $request->id_user;
      $product->product_name = $request->product_name;
      $product->description = $request->description;
      $product->price = $request->price;
      // $product->photo_product = $request->photo_product;
      if ($request->hasFile('photo_product'))
      {
            $file = $request->file('photo_product');
            $name = $file->getClientOriginalName();
            $product->photo_product = $name;
            $file->move(public_path().'/images/', $name);
      }
      $product->stock = $request->stock;
      $product->save();

      $id_admin = 1;
      $products = Product::latest()->paginate(10);
      $number = $products->currentPage() * 2;
      $number -=2;
      //dd($users);
      return view('admin.manage_product', compact('number', 'id_admin', 'products'));
    }

    public function show($id)
    {
      $product = Product::find($id);
      return view('admin.single_product', ['products'=>$product]);
    }

    public function edit($id)
    {
      $product = Product::find($id);
      return view('admin.edit_product', ['products'=>$product]);
    }

    public function update(Request $request, $id)
    {
      $product = Product::where('id', $id)->first();
     // dd($request);
      $product->id_user = $request->id_user;
      $product->product_name = $request->product_name;
      $product->description = $request->description;
      $product->price = $request->price;
      // $product->photo_product = $request->photo_product;
      if ($request->hasFile('photo_product'))
      {
            $file = $request->file('photo_product');
            $name = $file->getClientOriginalName();
            $product->photo_product = $name;
            $file->move(public_path().'/images/', $name);                     
      }   
      $product->stock = $request->stock;
      $product->save();

      $id_admin = 1;
      $products = Product::latest()->paginate(10);
      $number = $products->currentPage() * 2;
      $number -=2;
      //dd($users);
      return view('admin.manage_product', compact('number', 'id_admin', 'products'));
    }

    public function delete(Product $product)
    {
      $product->delete();
      return redirect('admin.view_product');
    }
}
