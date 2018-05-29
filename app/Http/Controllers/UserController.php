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
  public function manage_user(){
    $id_admin = 1;
    $users = User::latest()->paginate(2);
    $number = $users->currentPage() * 2;
    $number -=2;
    //dd($users);
    return view('admin.manage_user2', compact('number', 'id_admin', 'users'));
  }

  public function index()
  {
    $user = User::all();
    dd($user);
    return view('admin.manage_user2', ['users'=>$user]);
  }

  public function show($id)
  {
    $user = User::find($id);
    return view('admin.single_user',['users' => $user] );
  }

  public function view()
  {
    $products = Product::all();
    return view('categories',['products' => $products]);
  }

  public function create(Request $request)
  {
    $user = new User;
  //  $user->role_id = $request->role_id;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->gender = $request->gender;
    $user->no_telp = $request->no_telp;
    $user->address = $request->address;
    $user->save();

    return redirect()->route('admin.manage_user')->withSuccess('New user is created');
  }

  public function edit($id)
  {
    $user = User::find($id);
    return redirect()->route('admin.manage_user');
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
    $users = User::All()->where('role_id', '!=', $id_admin);
    $number = 0;
    return view('admin.manage_user2',compact('users','number') )->withSuccess('User has been edited.');
  }

  public function delete(User $user)
  {
    $user->delete();
    return redirect()->route('admin.manage_user')->withSuccess('User has been deleted.');
  }
}
