<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function index() {
    	$id = Auth::user()->id;
    	$user = User::find($id);
		return view('profile',['user' => $user]);
	}
	public function update(Request $request)
  	{
	    $user = User::where('id', Auth::user()->id)->first();
	  //  $user->role_id = $request->role_id;
	    $user->name = $request->name;
	    $user->email = $request->email;
	    $user->no_telp = $request->no_telp;
	    $user->address = $request->address;
	    $user->save();
	    return view('profile',['user' => $user]);
	    // return redirect();
  	}
}
