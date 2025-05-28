@extends('layouts.admin')

@section('content')
    <h2>Edit Product</h2>
    <form method="POST" action="{{ route('admin.products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
