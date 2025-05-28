<head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="{{asset("css/font-awesome.min.css")}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset("css/style.css")}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset("css/responsive.css")}}" rel="stylesheet" />
   </head>
   <!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
   <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
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
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        
header{
    margin-right: 60px;
    background-color:white;
}
 .dashboard{
    margin-top: 4px;
    color: rgb(0, 0, 0);
 }       

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-card {
            padding: 20px;
            max-width: 400px;
            width: 100%;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        li{
            font-size: 15px;
        }
        nav {
            width: 100%;
        }
       </style>
</head>
<div class="hero_area ">
         <!-- header section strats -->
         <header class="header_section sticky-top">
            <div class="">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{ route('pages.welcome') }}"><img width="250" src="{{asset("images/logo.png")}}" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('pages.welcome') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="{{ route('pages.about') }}">About</a></li>
                              <li><a href="{{ route('pages.testimonial') }}">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('pages.contact') }}">Contact</a>
                        </li>
                       
                        <ul class="navbar-nav ms-auto">
    @if(session('is_admin_logged_in'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
        </li>
    
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.login') }}">Admin Login</a>
        </li>
    @endif
</ul>

                        @if (Route::has('login'))
                        @auth
                       
                        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
                    @else
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">login</a>
                        </li>
                        @if (Route::has('register'))

                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @endauth
@endif
                        
<li class="nav-item">
    <a class="nav-link position-relative" href="{{ route('pages.cart') }}">
        Cart
        @auth
            @php
                $cartCount = \App\Models\Cart::where('user_id', auth()->id())->sum('quantity');
            @endphp
            @if($cartCount > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $cartCount }}
                </span>
            @endif
        @endauth
    </a>
</li>

                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>