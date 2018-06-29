<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Auth;
use App\User;
use App\Cart;

class ProductController extends Controller
{
    public function manage_product()
    {
      $id_admin = 1;

      $users = DB::table('users')->pluck('id')->all();

      $products = Product::latest()->where('id_user','=',$users)->paginate(10);
      $number = $products->currentPage() * 10;
      $number -=10;

      return view('admin.manage_product', compact('number', 'id_admin', 'products'));
    }

    public function viewCreate()
    {
      $user = User::where('role_id','2')->get();
      return view('admin.create_product',['users'=>$user]);
    }

    public function viewUser()
    {
      $products = Product::latest()->paginate(10);

      return view('categories',['products' => $products]);
    }

    public function create(Request $request)
    {
      // $where = $request->id_user;

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
      $product->category = $request->category;
      $product->save();

      $id_admin = 1;
      $products = Product::latest()->paginate(10);
      $number = $products->currentPage() * 10;
      $number -=10;
      //dd($users);
      return view('admin.manage_product', compact('number', 'id_admin', 'products'));
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
      $number = $products->currentPage() * 10;
      $number -=10;
      //dd($users);
      return view('admin.manage_product', compact('number', 'id_admin', 'products'));
    }

    public function delete(Product $product)
    {
      $product->delete();
      return redirect('manage-product');
    }


}
