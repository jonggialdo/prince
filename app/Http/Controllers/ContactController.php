<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ContactController extends Controller
{
    //
    public function index() {
		return view('contact');
	}
}
