<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


class UserController extends Controller
{
  public function manage_user(){
    $number = 0;
    $id_admin = 1;
    $users = User::All()->where('role_id', '!=', $id_admin);
    //dd($users);
    return view('admin.manage_user2', compact('number', 'id_admin', 'users'));
}

  public function index()
  {
    $user = User::all();
    dd($user);
    return view('admin.manage_user', ['users'=>$user]);
  }

  public function view()
  {
    return view('admin.manage_user');
  }

  public function show($id)
  {
    $user = User::find($id);
    return view('admin.manage_user',['user' => $user] );
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

    return redirect('admin.manage_user2');
  }

  public function edit($id)
  {
    $user = User::find($id);
    return view('admin.manage_user2',['user' => $user] );
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
    return view('admin.manage_user2',compact('users','number') );
    // return redirect();
  }

  public function delete($id)
  {
    $user = User::find($id);
    $user->delete();
    return redirect('userview');
  }
}
