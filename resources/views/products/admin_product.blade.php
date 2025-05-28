@extends('layouts.admin')

@section('content')

    <h2>Product List</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Add New Product</a>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    <table class="table table-bordered">
        <thead class="table-dark text-center">
            <tr >
               <th>Name</th><th>Price</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
    <tr>
     
        <td class="text-center">{{ $product->name }}</td>
        <td class="text-center">${{ $product->price }}</td>
        
        <td class="text-center">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>

            <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

        </tbody>
    </table>
@endsection
