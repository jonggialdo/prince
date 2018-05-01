<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class UserController extends Controller
{
  public function index()
  {
    $user = User::all();
    return view('admin/manage_user', ['user'=>$user]);
  }

  public function view()
  {
    return view('admin/create_user');
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
    $user->photo_user = $request->photo_user;
    $user->save();

    return redirect('view_user');
  }

}
