<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Product;
use Auth;
use App\Role;
use App\VerifyUser;

class UserController extends Controller
{
  public function index(){
    $id_admin = 1;
    $users = User::where('role_id','=',2)->latest()->paginate(2);
    $number = $users->currentPage() * 2;
    $number -=2;
    //dd($users);
    return view('admin.manage_user2', compact('number', 'id_admin', 'users'));
  }

  public function create(Request $request)
  {
    $user = new User;
    $user->role_id = 2;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->gender = $request->gender;
    $user->no_telp = $request->no_telp;
    $user->address = $request->address;
    $user->save();
    return redirect()->route('admin.manage_user')->withSuccess('New user is created');
  }

  public function update(Request $request, $id)
  {
    $user = User::where('id', $id)->first();
    //dd($request);
  //  $user->role_id = $request->role_id;
    $user->name = $request->name;
    $user->email = $request->email;

    $user->password = bcrypt($request->password);
    $user->gender = $request->gender;
    $user->no_telp = $request->no_telp;
    $user->address = $request->address;
    $user->save();
    $id_admin = 1;
    $users = User::where('role_id', '!=', $id_admin)->paginate(2);
    $number = 0;
    return view('admin.manage_user2',compact('users','number') )->withSuccess('User has been edited.');
  }

  public function delete(User $user)
  {
    $user->delete();
    return redirect()->route('admin.manage_user')->withSuccess('User has been deleted.');
  }

  public function displayProduct()
  {
    $id = Auth::user()->id;
    if (Auth::user()->role_id == 2){
      $products =Product::where('id_user','=',$id)->latest()->paginate(2);
      $number = $products->currentPage() * 2;
      return view('productuser',compact('products','number'));
    }
    return view('index');
  }

  public function updateProduct(Request $request, $id)
  {
    $product = Product::where('id', $id)->first();
    $product->stock = $request->stock;
    $product->save();

    $id = Auth::user()->id;
    $products = Product::where('id_user','=',$id)->paginate(2);
    $number = 0;

    return view('productuser', compact('products','number'))->withSuccess('Stock has been updated  ');
  }
}
