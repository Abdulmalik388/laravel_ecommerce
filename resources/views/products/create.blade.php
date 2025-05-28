@extends('admin.dashboard')
@section('content')


<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 30px;
            text-align: center;
            color: #343a40;
        }
        button {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Add New Product</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" id="price" class="form-control" step="0.01" name="price" required>
            </div>

            <div class="mb-4">
                <label for="image" class="form-label">Image:</label>
                <input type="file" id="image" class="form-control" name="image">
            </div>

            <button  type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
@endsection