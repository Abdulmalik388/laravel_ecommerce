<?php

namespace App\Http\Controllers;
use App\Models\OrderInfo;
use Illuminate\Http\Request;

class OrderInfoController extends Controller
{
    public function showCheckout()
    {
        return view('pages.checkout');
    }
    
   
    public function processCheckout(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'shipping_method' => 'required',
            'payment_method' => 'required',
        ]);
        // Store the data using Eloquent's create method
        OrderInfo::create($validatedData);

        // Optional: Redirect or return a success response
        return redirect()->route('pages.orders')->with('');

    }
    
}
