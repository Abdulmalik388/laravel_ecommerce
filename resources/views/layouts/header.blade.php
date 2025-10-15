<head> <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type=""> <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> <!-- font awesome style -->
    <link href="{{asset("css/font-awesome.min.css")}}" rel="stylesheet" /> <!-- Custom styles for this template -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet" /> <!-- responsive style -->
    <link href="{{asset("css/responsive.css")}}" rel="stylesheet" />
</head>
<!doctype html>
<html class="no-js" lang="zxx">
<style>
   body {
  margin: 0;
  background: linear-gradient(270deg, #3e1d6d, #6b2b3a, #a85f2f, #b266ff);
  background-size: 800% 800%;
  animation: juiceFlow 12s ease infinite;
}

#contact{
    margin: 20px;
    padding: 20px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    color: #fff;
}
.full{
    width: 60%;
    margin-left: 20%;
   
}
.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    color: #161414ff;
    font-size: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  
}
@keyframes juiceFlow {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}


    @keyframes gradientFlow {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Glass/blur navbar */
    .glass-navbar {
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.3);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .glass-navbar.scrolled {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-nav .nav-link {
        color: #111 !important;
        font-weight: 600;
        margin: 0 10px;
        transition: all 0.3s ease-in-out;
        position: relative;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -3px;
        left: 0;
        background: #7a4dff;
        transition: width 0.3s;
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    .navbar-nav .nav-link:hover {
        color: #7a4dff !important;
    }

    .btn-signup {
        background: linear-gradient(135deg, #7a4dff, #9b6cff);
        border: none;
        color: #fff !important;
        padding: 8px 16px;
        border-radius: 25px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-signup:hover {
        background: linear-gradient(135deg, #5e37d1, #7a4dff);
        transform: translateY(-2px);
    }

    .dropdown-menu {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        animation: fadeUp 0.3s ease;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cart-badge {
        font-size: 11px;
        position: absolute;
        top: 0;
        right: 0;
    }
     .slider_section {
    position: relative;
    overflow: hidden;
  }

  .slider_bg_box {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
  }

  .hero-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(60%);
  }

  .detail-box {
    position: relative;
    z-index: 2;
    color: #fff;
    padding-top: 150px;
    animation: fadeInUp 1.2s ease;
  }

  .detail-box h1 {
    font-size: 3rem;
    line-height: 1.2;
    font-weight: 700;
  }

  .detail-box span {
    color: #ffcc00;
  }

  .btn1 {
    display: inline-block;
    background: #ff9800;
    color: #fff;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .btn1:hover {
    background: #e68900;
    transform: translateY(-3px);
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .why_section {
  background: 
   
    url('images/why-section.jpeg') no-repeat center center/cover;
  position: relative;
  overflow: hidden;
}

.why-overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  
  background: rgba(0, 0, 0, 0.25);
}

.glass-box {
  background: rgba(255, 255, 255, 0.12);
  border: 1px solid rgba(255, 255, 255, 0.25);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  transition: all 0.4s ease-in-out;
}

.glass-box:hover {
  transform: translateY(-10px);
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

.animate-bounce {
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}
.option {
  font-size: 2.5rem;
  font-weight: bold;
  color: #fff;
  text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
}
.div-product {
  border-radius: 10px;
  height: 70%;
}
.logo{
  width: 140px;
  height: 120px;
}

</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory --> <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css"> <!-- <link rel="stylesheet" href="css/responsive.css"> -->

</head>
<header class="header_section sticky-top bg-white">
    <div class="glass-navbar">
        <nav class="navbar navbar-expand-lg custom_nav-container py-3">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('pages.welcome') }}">
                <img width="220" class="logo" src="{{ asset('images/logo.png') }}" alt="Logo" />
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler border-0 text-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('pages.welcome') }}">Home</a>
                    </li>



                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pages.contact') }}">Contact</a></li>

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                                </form>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-signup" href="{{ route('register') }}">
                                        Sign Up <i class="fa fa-arrow-right ms-1"></i>
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif

                    <li class="nav-item position-relative">
                        <a class="nav-link" href="{{ route('pages.cart') }}">
                            <i class="fa fa-shopping-cart me-1"></i> Cart
                            @auth
                                @php $cartCount = \App\Models\Cart::where('user_id', auth()->id())->sum('quantity'); @endphp
                                @if ($cartCount > 0)
                                    <span class="badge bg-danger rounded-pill cart-badge">{{ $cartCount }}</span>
                                @endif
                            @endauth
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.glass-navbar');
        if (window.scrollY > 30) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
   
 

</script>