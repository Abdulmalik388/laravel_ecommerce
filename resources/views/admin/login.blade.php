<!-- resources/views/admin/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Monoton&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ff00cc, #3333ff, #00ffcc, #ffcc00);
            min-height: 100vh;
            animation: bgmove 10s infinite alternate;
        }
        @keyframes bgmove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        .crazy-card {
            background: rgba(255,255,255,0.95);
            border-radius: 30px 5px 30px 5px;
            box-shadow: 0 0 40px 10px #ff00cc88, 0 0 10px #3333ff88;
            padding: 2.5rem 2rem;
            border: 4px dashed #ff00cc;
            transform: rotate(-2deg) scale(1.03);
            transition: transform 0.2s;
            width: 50%;
            margin-left: 100px;
        }
        .crazy-card:hover {
            transform: rotate(2deg) scale(1.07);
            box-shadow: 0 0 60px 20px #00ffcc88, 0 0 20px #ffcc0088;
        }
        h3 {
            font-family: 'Monoton', cursive;
            color: #ff00cc;
            text-shadow: 2px 2px 0 #3333ff, 4px 4px 10px #00ffcc;
            letter-spacing: 2px;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        label {
            font-family: 'Orbitron', sans-serif;
            color: #3333ff;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }
        .form-control {
            border: 2px solid #ffcc00;
            border-radius: 15px;
            background: #fffbe7;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.1rem;
            color: #3333ff;
            box-shadow: 0 0 10px #ffcc0088;
        }
        .form-control:focus {
            border-color: #ff00cc;
            box-shadow: 0 0 20px #ff00cc88;
        }
        .btn-primary {
            background: linear-gradient(90deg, #ff00cc, #3333ff, #00ffcc, #ffcc00);
            border: none;
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            border-radius: 20px;
            box-shadow: 0 0 10px #ff00cc88;
            transition: background 0.3s, transform 0.2s;
        }
        .btn-primary:hover {
            background: linear-gradient(270deg, #ffcc00, #00ffcc, #3333ff, #ff00cc);
            transform: scale(1.1) rotate(-2deg);
            box-shadow: 0 0 30px #3333ff88;
        }
        .alert-danger {
            background: linear-gradient(90deg, #ff3333, #ffcc00);
            color: #fff;
            border-radius: 10px;
            font-family: 'Orbitron', sans-serif;
            font-size: 1.1rem;
            text-align: center;
            box-shadow: 0 0 10px #ff333388;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="col-md-8 offset-md-2">
        <div class="crazy-card">
            <h3>Admin Login</h3>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
