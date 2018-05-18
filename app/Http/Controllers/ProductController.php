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
      $products = Product::latest()->paginate(2);
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
      $product = Product::find($id);
      return view('admin.create_product',['products'=>$product]);
    }

    public function create(Request $request)
    {

      // $request = $request->create([
      //   'id_user'              => $request->id_user,
      //   'product_name'  => $request->product_name,
      //   'description'       => $request->description,
      //   'price'                 => $request->price,
      //   'variant'              => $request->variant,
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
      $product->variant = $request->variant;
      // $product->photo_product = $request->photo_product;
      if ($request->hasFile('photo_product'))
      {
            $file = $request->file('photo_product');
            $name = $file->getClientOriginalName();
            $product->photo_product = $name;
            $file->move(public_path().'/images/', $name);                     
      }   
      $product->stock = $request->stock;
      $product->purchase = $request->purchase;
      $product->viewer = $request->viewer;
      $product->save();
      return redirect('admin.view_product',['products'=>$product]);
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
      $product = Product::where('id', $id)->get();
      $product->id_user = $request->id_user;
      $product->product_name = $request->product_name;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->variant = $request->variant;
      // $product->photo_product = $request->photo_product;
      if ($request->hasFile('photo_product'))
      {
            $file = $request->file('photo_product');
            $name = $file->getClientOriginalName();
            $product->photo_product = $name;
            $file->move(public_path().'/images/', $name);                     
      }   
      $product->stock = $request->stock;
      $product->purchase = $request->purchase;
      $product->viewer = $request->viewer;
      $user->save();
      return redirect('admin.view_product',['products'=>$product]);
    }

    public function delete($id)
    {
      $product = Product::find($id);
      $product->delete();
      return redirect('admin.view_product');
    }
}
