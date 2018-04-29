<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AccountController extends Controller
{
    public function getSignOut() {
		Auth::logout();
		return redirect()->route('login');
	}
    //
}
