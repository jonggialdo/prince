<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
        public function index() {
			$products = Product::latest()->where('id_user','=',$users)->paginate(10);
      		$number = $products->currentPage() * 2;
      		$number -=2;

			return view('categories', compact('number','products'));
		}
}
