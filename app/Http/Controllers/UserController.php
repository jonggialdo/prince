<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


class UserController extends Controller
{


  public function index()
  {
    $user = User::all();
    return view('admin.manage_user', ['users'=>$user]);
  }

  public function view()
  {
    return view('admin.create_user');
  }

  public function show($id)
  {
    $user = User::find($id);
    return view('admin.single_user',['user' => $user] );
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

    return redirect('view_user');
  }

  public function edit($id)
  {
    $user = User::find($id);
    return view('admin.edit_user',['user' => $user] );
  }

  public function update(Request $request, $id)
  {
    $user = User::where('id', $id)->get();
  //  $user->role_id = $request->role_id;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
    $user->gender = $request->gender;
    $user->no_telp = $request->no_telp;
    $user->address = $request->address;
    $user->save();

    // return redirect();
  }

  public function delete($id)
  {
    $user = User::find($id);
    $user->delete();
    return redirect('userview');
  }
}
