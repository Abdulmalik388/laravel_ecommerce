
   @extends('layouts.app')
   @section('content')
         <!-- end header section -->
      <!-- slider section -->
<section class="slider_section position-relative ">
  <!-- background image restored -->
  <div class="slider_bg_box">
    <img src="images/slider-bg.jpg" alt="" class="img-fluid hero-bg">
  </div>

  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-6">
              <div class="detail-box">
                <h1>
                  <span>Sale 20% Off</span><br>
                  On Everything
                </h1>
                <p>Get Your Desired Wears at Affordable Prices And 20% off</p>
                <div class="btn-box mt-3">
                  <a href="{{ route('products.index') }}" class="btn1">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- your other slides -->
      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-6">
              <div class="detail-box">
                <h1>
                  <span>New Arrivals</span><br>
                  Fresh Collections
                </h1>
                <p>Discover our latest arrivals with amazing discounts.</p>
                <div class="btn-box mt-3">
                  <a href="{{ route('products.index') }}" class="btn1">Explore</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-6">
              <div class="detail-box">
                <h1>
                  <span>Exclusive Offers</span><br>
                  Limited Time Only
                </h1>
                <p>Don’t miss out on our limited-time offers for top products.</p>
                <div class="btn-box mt-3">
                  <a href="{{ route('products.index') }}" class="btn1">Grab Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- carousel indicators -->
    <div class="container">
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol>
    </div>
  </div>
</section><br><br>
      
    <!-- Why Section -->
<section class="why_section py-5 position-relative">
  <div class="why-overlay"></div>
  <div class="container position-relative">
    <div class="heading_container text-center mb-5">
      <h2 class="fw-bold text-white display-6">Why Shop With Us</h2>
      <p class="text-light mt-2">We’re more than just a store — we deliver trust, speed, and quality.</p>
    </div>

    <div class="row g-4">
      <!-- Fast Delivery -->
      <div class="col-md-4">
        <div class="why-box glass-box text-center p-4 rounded-4 h-100">
          <div class="icon mb-3 text-primary fs-1 animate-bounce">
            <i class="bi bi-truck"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-white">Fast Delivery</h5>
          <p class="text-light">Get your orders delivered within 1–3 working days. Always reliable and on time.</p>
        </div>
      </div>

      <!-- Free Shipping -->
      <div class="col-md-4">
        <div class="why-box glass-box text-center p-4 rounded-4 h-100">
          <div class="icon mb-3 text-success fs-1 animate-bounce">
            <i class="bi bi-box-seam"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-white">Free Shipping</h5>
          <p class="text-light">Enjoy free shipping on all your orders — because you deserve it.</p>
        </div>
      </div>

      <!-- Best Quality -->
      <div class="col-md-4">
        <div class="why-box glass-box text-center p-4 rounded-4 h-100">
          <div class="icon mb-3 text-warning fs-1 animate-bounce">
            <i class="bi bi-award"></i>
          </div>
          <h5 class="fw-semibold mb-2 text-white">Best Quality</h5>
          <p class="text-light">Unmatched quality, trusted by many satisfied customers.</p>
        </div>
      </div>
    </div>
  </div>
</section><br><br>
      
 
      
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
              
              
             
              
              
              
          @foreach($products as $product)
    <div class="col-sm-6 col-md-4 col-lg-4 div-product">
                  <div class="box div-product">
                     <div class="option_container">
                        <div class="options">
                        <form method="POST" action="{{ route('cart.add') }}">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width: 80px;">
    <button class="btn btn-sm btn-success">Add to Cart</button>
</form>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                     <img src="{{ asset($product->image) }}"  alt="{{ $product->name }}">
                     </div>
                     <div class="detail-box">
                        <h5 class="text-dark fw-semibold">
                          {{$product->name}}
                        </h5>
                        <h6>
                           ${{$product->price}}
                        </h6>
                     </div>
                  </div>
               </div>

          @endforeach
          
           
            </div>
            <div class="btn-box">
               <a href="{{ route('products.index') }}">
               View All products
               </a>
            </div>
         </div>
      </section>
      <!-- end product section -->

   
      <!-- end subscribe section -->
      <!-- client section -->
      <section class="client_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Customer's Testimonial
               </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client.jpg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                              Anna Trevor
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                           I’m extremely impressed with the product quality and fast delivery! The entire shopping experience was smooth and professional. I’ll definitely be coming back for more.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client_2.webp" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                           Daniel R.
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                           Amazing service and great value for money! The packaging was neat, and the product looked exactly as shown. Highly recommend this store to anyone looking for quality and reliability.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="box col-lg-10 mx-auto">
                        <div class="img_container">
                           <div class="img-box">
                              <div class="img_box-inner">
                                 <img src="images/client_3.jpeg" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="detail-box">
                           <h5>
                           Michael O.
                           </h5>
                           <h6>
                              Customer
                           </h6>
                           <p>
                           Great customer service and amazing value for money. The checkout process was smooth, and my order arrived earlier than expected!
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                  <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
    

      @endsection
  