<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            transition: all 0.4s ease-in-out;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .product-card .btn {
            transition: all 0.3s ease;
        }

        .product-card .btn:hover {
            transform: scale(1.05);
        }

        .product-card input[type="number"] {
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="container mt-5">
            <h1 class="text-center mb-5 text-primary fw-bold">Our Products</h1>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($products as $product)
                    <div class="col">
                        <div class="card product-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <img src="{{ asset($product->image) }}" class="card-img-top mx-auto d-block p-3"
                                alt="{{ $product->name }}" style="height: 250px; object-fit: contain;">

                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold text-dark">{{ $product->name }}</h5>
                                <p class="card-text text-muted fs-5 mb-4">${{ number_format($product->price, 2) }}</p>

                                <form method="POST" action="{{ route('cart.add') }}"
                                    class="d-flex justify-content-center align-items-center gap-2">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="number" name="quantity" value="1" min="1" class="form-control form-control-sm"
                                        style="width: 70px;">
                                    <button class="btn btn-sm btn-success px-3">Add to Cart</button>
                                    <a href="#" class="btn btn-sm btn-primary px-3">Buy Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</body>

</html>