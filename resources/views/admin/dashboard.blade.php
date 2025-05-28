@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Welcome, Admin!</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Manage your product inventory.</p>
                    <a href="{{ route('products.admin_product') }}" class="btn btn-light btn-sm">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <p class="card-text">View and manage orders.</p>
                    <a href="{{ route('admin.orders') }}" class="btn btn-light btn-sm">View Orders</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning text-dark shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Manage registered users.</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-dark btn-sm">View Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
            <div class="card bg-secondary text-white shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Add Products</h5>
                    <p class="card-text">Add new products to the available one.</p>
                    <a href="{{ route('products.create') }}" class="btn btn-light btn-sm">Add products</a>
                </div>
            </div>
        </div>
@endsection
