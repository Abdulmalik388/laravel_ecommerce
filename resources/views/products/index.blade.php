<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .product-card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
            border-radius: 10px;
        }

        .product-card:hover {
            transform: scale(1.03);
        }

        .card-img-top {
            width: 50%;
            height: auto; /* ✅ Let image resize naturally */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            text-align:center;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
            text-align:center;
        }
        
    </style>
</head>

<body>
@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5 text-primary">Our Products</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($products as $product)
            <div class="col">
                <div class="card product-card h-100">
                <img src="{{ asset($product->image) }}" class="card-img-top mx-auto d-block" alt="{{ $product->name }}">

                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ number_format($product->price, 2) }}</p>
                         
            <div class="d-grid gap-2">
            <form method="POST" action="{{ route('cart.add') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width: 80px;">
    <button class="btn btn-sm btn-success">Add to Cart</button>
</form>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
</body>
</html>
