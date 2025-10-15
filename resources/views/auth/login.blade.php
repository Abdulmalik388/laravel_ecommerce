{{-- resources/views/auth/login.blade.php --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login — Luxe Market</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{
      --accent-1: #5a351f;
      --accent-2: #8a5a3b;
      --gold: #d69f2f;
    }

    body, html {
      height: 100%;
      margin: 0;
      font-family: "Poppins", system-ui, sans-serif;
      color: #fff;
    }

    /* animated background */
    .bg-massive {
      position: fixed;
      inset: 0;
      z-index: -2;
      background: linear-gradient(120deg, var(--accent-1), var(--accent-2), #7b4b2c);
      background-size: 300% 300%;
      animation: bgFlow 12s ease-in-out infinite;
    }

    .bg-orb {
      position: fixed;
      z-index: -1;
      pointer-events: none;
    }
    .orb-left {
      top: -12%;
      left: -8%;
      width: 900px;
      height: 900px;
      background: radial-gradient(circle at 30% 30%, rgba(214,159,47,0.25), rgba(138,90,59,0.0) 40%);
      filter: blur(120px);
      animation: floatSlow 14s ease-in-out infinite;
    }
    .orb-right {
      right: -6%;
      bottom: -10%;
      width: 700px;
      height: 700px;
      background: radial-gradient(circle at 60% 60%, rgba(214,159,47,0.18), rgba(90,50,30,0.0) 45%);
      filter: blur(100px);
      animation: floatSlowReverse 18s ease-in-out infinite;
    }

    @keyframes bgFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    @keyframes floatSlow {
      0% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-35px) scale(1.03); }
      100% { transform: translateY(0) scale(1); }
    }
    @keyframes floatSlowReverse {
      0% { transform: translateY(0) scale(1); }
      50% { transform: translateY(30px) scale(0.98); }
      100% { transform: translateY(0) scale(1); }
    }

    .center-wrap {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 3rem 1rem;
    }

    .glass-card {
      width: 100%;
      max-width: 520px;
      background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 20px;
      padding: 36px;
      box-shadow:
        0 6px 30px rgba(0,0,0,0.45),
        0 0 40px rgba(214,159,47,0.07) inset;
      backdrop-filter: blur(8px) saturate(1.1);
    }

    .brand-badge {
      display:inline-block;
      padding: 8px 14px;
      border-radius: 999px;
      background: rgba(214,159,47,0.95);
      color: #2b1a14;
      font-weight:700;
      letter-spacing: 0.4px;
      box-shadow: 0 6px 30px rgba(214,159,47,0.12);
    }

    .page-title {
      font-weight: 800;
      font-size: 1.9rem;
      margin-top: 10px;
      margin-bottom: 4px;
      color: #fff;
      text-shadow: 0 6px 30px rgba(0,0,0,0.6);
    }
    .page-sub {
      color: rgba(255,255,255,0.85);
      margin-bottom: 18px;
    }

    .form-control {
      background: rgba(255,255,255,0.04);
      border: 1px solid rgba(255,255,255,0.09);
      color: #fff;
      padding: 12px 14px;
      border-radius: 12px;
      transition: box-shadow 0.2s, transform 0.12s;
    }
    .form-control:focus {
      box-shadow: 0 8px 30px rgba(214,159,47,0.12);
      border-color: rgba(214,159,47,0.9);
      transform: translateY(-1px);
    }

    .form-label {
      color: rgba(255,255,255,0.95);
      font-weight: 600;
    }

    .btn-gold {
      background: linear-gradient(90deg, #ffdd7a, #d69f2f);
      color: #2b1a14;
      font-weight: 700;
      border-radius: 12px;
      padding: 10px 20px;
      border: none;
      box-shadow: 0 8px 30px rgba(214,159,47,0.18);
    }
    .btn-gold:hover {
      transform: translateY(-3px) scale(1.01);
      box-shadow: 0 14px 40px rgba(214,159,47,0.25);
    }

    .text-muted-light { color: rgba(255,255,255,0.75); }
    .invalid-feedback { color: #ffd6a8; background: rgba(255,255,255,0.03); padding: 8px 10px; border-radius: 8px; }

    .card-footer-light {
      margin-top: 18px;
      color: rgba(255,255,255,0.9);
      text-align: center;
      font-size: 0.95rem;
    }

    @media (max-width: 576px) {
      .glass-card { padding: 22px; border-radius: 16px; }
      .page-title { font-size: 1.5rem; }
    }
  </style>
</head>

<body>
  <div class="bg-massive"></div>
  <div class="bg-orb orb-left"></div>
  <div class="bg-orb orb-right"></div>

  <div class="center-wrap">
    <div class="glass-card">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <div>
          <span class="brand-badge">LUXE</span>
          <div class="page-title">Welcome back</div>
          <div class="page-sub">Log in to continue your premium shopping.</div>
        </div>
        <div class="text-end d-none d-md-block">
          <small class="text-muted-light">New here?</small><br>
          <a href="{{ route('register') }}" class="btn btn-link text-gold fw-bold" style="color:rgba(255,235,200,0.95); text-decoration: none;">Create account</a>
        </div>
      </div>

      <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input id="email" name="email" type="email" value="{{ old('email') }}" required
                 class="form-control @error('email') is-invalid @enderror" />
          @error('email') <div class="invalid-feedback mt-2">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input id="password" name="password" type="password" required
                 class="form-control @error('password') is-invalid @enderror" />
          @error('password') <div class="invalid-feedback mt-2">{{ $message }}</div> @enderror
        </div>

        <div class="d-flex align-items-center justify-content-between mb-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember">
            <label class="form-check-label text-muted-light" for="remember">Remember me</label>
          </div>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-gold fw-semibold" style="color:var(--gold); text-decoration:none;">Forgot password?</a>
          @endif
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-gold">
            Login &nbsp; <i class="bi bi-arrow-right-short"></i>
          </button>
        </div>
      </form>

      <div class="card-footer-light">
        Protected & secure — your credentials are safe with Luxe Market.
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
