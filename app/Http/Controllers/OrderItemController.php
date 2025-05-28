<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    public function showForm()
    {
        return view('pages.orders');
    }

   public function submit(Request $request)
{
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email',
        'address'  => 'required|string',
        'location' => 'required|string',
    ]);

    $cart = session('cart', []);

    // Prevent empty cart submission
  

   
    OrderItem::create([
        'customer_name' => $request->name,
        'email'         => $request->email,
        'address'       => $request->address,
        'location'      => $request->location,
        
        'status'        => 'pending',
    ]);

    // ✅ Clear cart after saving order
    return redirect()->route('pages.welcome')->with('success', 'Order placed successfully!');
}
  

}
