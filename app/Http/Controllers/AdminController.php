<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Add this if you're using the users() method
use App\Models\product;
use App\Models\Order;
use App\Models\OrderItem;
class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        // Hardcoded credentials
        if ($username === 'admin' && $password === 'admin123') {
            session(['is_admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('is_admin_logged_in');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function editUser($id)
{
    $user = User::findOrFail($id);
    return view('admin.users.edit', compact('user'));
}

// Update user
public function updateUser(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->only('name', 'email'));
    return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
}

// Delete user
public function deleteUser($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
}
public function deleteProduct($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.admin_product')->with('success', 'Product deleted successfully!');
}
public function admin_product()
{
    return view('products.admin_product');
}
public function listProducts()
{
    $products = Product::all();
    return view('products.admin_product', compact('products'));
}
// Show the edit form
public function editProduct($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

// Handle the update
public function updateProduct(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
      
    ]);

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
    
    ]);

    return redirect()->route('products.admin_product')->with('success', 'Product updated successfully!');
}


    public function index()
    {
        $orders = OrderItem::latest()->get();
        return view('admin.orders', compact('orders'));
    }
    public function show($id)
{
    $order = OrderItem::findOrFail($id);
    return view('admin.orders.show', compact('order'));
}

public function destroy($id)
{
    $order = OrderItem::findOrFail($id);
    $order->delete();

    return redirect()->route('admin.orders')->with('success', 'Order deleted successfully.');
}
public function edit($id)
{
    $order = OrderItem::findOrFail($id);
    return view('admin.edit', compact('order'));
}

public function update(Request $request, $id)
{
    $order = OrderItem::findOrFail($id);

    $request->validate([
        'status' => 'required|string|in:pending,processing,completed,cancelled',
    ]);

    $order->status = $request->status;
    $order->save();

    return redirect()->route('admin.orders')->with('success', 'Order updated successfully.');
}

}


