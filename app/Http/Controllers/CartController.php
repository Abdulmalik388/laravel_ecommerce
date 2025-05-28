<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Show user's cart (with items)
    public function cart()
    {
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();
    
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item->product->price * $item->quantity;
        }
    
        return view('pages.cart', compact('cartItems', 'subtotal'));
    }
    

    // Add product to cart
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $userId = Auth::id();
        $productId = $request->product_id;
        $quantity = $request->quantity;

        // Check if product already in cart
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

        if ($cartItem) {
            // Update quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // Create new cart item
            Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Update quantity in cart
    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::findOrFail($id);

        // Verify ownership by Auth user
        if ($cartItem->user_id !== Auth::id()) {
            abort(403);
        }

        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    // Remove product from cart
    public function removeFromCart($id)
    {
        $cartItem = Cart::findOrFail($id);

        if ($cartItem->user_id !== Auth::id()) {
            abort(403);
        }

        $cartItem->delete();

        return redirect()->back()->with('success', 'Product removed from cart.');
    }
    public function subtotal()
{
    $userId = Auth::id();
    $cartItems = Cart::where('user_id', $userId)->with('product')->get();

    $subtotal = 0;

    foreach ($cartItems as $item) {
        $subtotal += $item->product->price * $item->quantity;
    }

    return view('pages.cart', compact('cartItems', 'subtotal'));
}

}
