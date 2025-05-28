@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mb-4">All Orders</h2>

        @if($orders->count())
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Location</th>
                    
                    <th>Status</th>
                    <th>Ordered At</th>
                    <th>Action</th>  <!-- New column -->
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->location }}</td>
                    
                    <td>{{ ucfirst($order->status) }}</td>
                    <td>{{ $order->created_at->format('d M Y, h:i A') }}</td>
                    <td>
    
    <a href="{{ route('admin.edit', $order->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Delete this order?');">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
    </form>
</td>

                </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No orders found.</p>
        @endif
    </div>
@endsection
