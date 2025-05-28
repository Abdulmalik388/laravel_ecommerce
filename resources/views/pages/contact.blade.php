
@extends('layouts.app')
@section('content')
@section('title', 'Contact-us')
   <body class="sub_page">
    
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="{{ route('submiteForm') }}" method="POST">
                     @csrf
                        
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" name="message" required></textarea>
                           <input type="submit" value="Submit" />
                        
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      

<center>


    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                    <h3>You can also Contact us via Whatsapp</h3>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <section id="contact">
        <h2>Contact Us</h2>
        <p>Reach out to us for inquiries or support:</p>
        <p>Email:abdulmaliklawal388@gmail.com </p>
        <p>Whatsapp:08081168026</p>
        <p>Phone:07026361685 </p>
        <p>Address: Suite A6 amori shopping complex, orelope bus stop egbeda</p>
        <a href="https://wa.me/2348081168026?text=Hello%20mrAbdulmalik%%2C%20I%20would%20like%20to%20inquire%20about%20your%20services."
            target="_blank" style="
       display: inline-flex; 
       align-items: center; 
       background-color: #25D366; 
       color: white; 
       text-decoration: none; 
       font-size: 16px; 
       font-weight: bold; 
       padding: 10px 20px; 
       border-radius: 5px; 
       cursor: pointer; 
       transition: background-color 0.3s ease;">
            <span style="
        width: 20px; 
        height: 20px; 
        background-image: url('https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg'); 
        background-size: cover; 
        margin-right: 10px;">
            </span>
            Message Us on WhatsApp
        </a>


    </section><br><br><br><br>
</center>


@endsection
