@extends('layouts.app')
@section('content')
@section('title', 'Cart')

<div class="container mt-5">
    <h2 class="mb-4">Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($cartItems->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td><img src="{{ asset($item->product->image) }}" width="70"></td>
                        <td>
                            <form method="POST" action="{{ route('cart.update', $item->id) }}">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control d-inline" style="width: 80px;">
                                <button class="btn btn-sm btn-primary">Update</button>
                            </form>
                        </td>
                        <td>${{ number_format($item->product->price, 2) }}</td>
                        <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                        <td>
                            <form method="POST" action="{{ route('cart.remove', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h4>Subtotal: ${{ number_format($subtotal, 2) }}</h4>


<a href="{{ route('pages.checkout') }}" class="btn btn-primary">Proceed to Checkout</a>

    @else
        <p>Your cart is empty.</p>
    @endif
</div>
@endsection
