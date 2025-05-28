<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }
    public function home()
    {
        $products = Product::all();
        return view('pages.welcome', compact('products'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function product()
    {
        return view('pages.product');
    }
    public function testimonial()
    {
        return view('pages.testimonial');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
   
}
