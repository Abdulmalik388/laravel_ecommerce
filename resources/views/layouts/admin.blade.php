<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #048fc1ff;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #0975e1ff;
            padding-top: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: background 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #0e32b6ff;
        }

        .sidebar h4 {
            color: #ccc;
            text-align: center;
        }

        .content-area {
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
        }
        
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            @include('admin.partials.sidebar')
        </div>

        <!-- Content -->
        <div class="col-md-10 content-area">
            @yield('content')
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
