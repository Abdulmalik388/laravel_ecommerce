@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Checkout</h2>
    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf

        <h4>Billing Details</h4>
        <div class="row">
            
            <div class="col-md-6">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6 mt-3">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="col-md-6 mt-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="col-md-4 mt-3">
                <label>City</label>
                <input type="text" name="city" class="form-control" required>
            </div>
            <div class="col-md-4 mt-3">
                <label>State</label>
                <input type="text" name="state" class="form-control">
            </div>
            <div class="col-md-4 mt-3">
                <label>Zip Code</label>
                <input type="text" name="zip" class="form-control">
            </div>
        </div>

        <h4 class="mt-5">Shipping Method</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="shipping_method" value="standard" checked>
            <label class="form-check-label">Standard Shipping</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="shipping_method" value="express">
            <label class="form-check-label">Express Shipping</label>
        </div>

        <h4 class="mt-5">Payment Method</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" value="cod" checked>
            <label class="form-check-label">Cash on Delivery</label>
        </div>

        

        <button class="btn btn-primary mt-4">Place Order</button>
    </form>
</div>
@endsection
