<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function welcome()
    {
        $products = Product::take(3)->get();
        return view('welcome', compact('products'));
    }
}
