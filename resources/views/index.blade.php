@extends("layouts.app")
@push('styles')
<link href="{{asset('css\style.css')}}" rel="stylesheet">
<style>
   .going-card {
        transition: 1s;
    }
    #card-left, #card-right {
        opacity: 0;
    }
    #card-left {
        transform: translateX(-100%);
    }
    #card-right {
        transform: translateX(100%);
    }
</style>
@endpush


@section('content')
<section class="text-center mt-3 banner-container">
   <div class="container">
      <h5>Be a <span style="color: #B11F2D;">Youth Ambassador</span> and Say <span
         style="color: #B11F2D;">YES</span> to <br> Studying in the <span style="color: #B11F2D;">United
            States!</span></h5>
            
            <p>The U.S. Department of State collaborates with American Councils for International Education and their
               partner in-country non-profit organizations to implement the YES Program, with participating
               students coming from 37 different countries.</p>
               
               <a href="#" class="button">APPLY NOW</a>
               <div class="row circle-image">
                  <div class="col-md-3 col-6" data-100="transform: translateX(0%); opacity: 1;"
                  data-500="transform: translateX(-100%); opacity: 0;" style="transition: 1s;">
                  <img src="images/Group 36.png" class="img-fluid2" alt="Student 1">
               </div>
               <div class="col-md-3 col-6" data-100="transform: translateX(0%); opacity: 1;"
               data-500="transform: translateX(-100%); opacity: 0;" style="transition: 1s;">
               <img src="images/Group 33.png" class="img-fluid2 mt-5" alt="Student 2">
            </div>
            <div class="col-md-3 col-6" data-100="transform: translateX(0%); opacity: 1;"
            data-500="transform: translateX(100%); opacity: 0;" style="transition: 1s;">
            <img src="images/Group 34.png" class="img-fluid2 mt-5" alt="Student 3">
         </div>
         <div class="col-md-3 col-6" data-100="transform: translateX(0%); opacity: 1;"
         data-500="transform: translateX(100%); opacity: 0;" style="transition: 1s;">
         <img src="images/Group 35.png" class="img-fluid2" alt="Student 4">
      </div>
   </div>
</div>
</section>

<section>
   <div class="container">
      <div class="row">
         <div class="col-lg-11 offset-1">
            <img src="images\YES 24-25 Updated Logo Strip.png " alt="Flag" class="img-fluid3">
         </div>
      </div>
      <h3 class="mt-5 title-card">GOING STRONG AHEAD!</h3>
      <div class="row card-box mt-3">
         <div class="col-md-3">
            <div class="going-card" id="card-left">
               <h4>117</h4>
               <p>Total Number of Cities</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="going-card">
               <h4>1453</h4>
               <p>Total Number of Alumni</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="going-card" id="card-right">
               <h4>22</h4>
               <p>Total Number of Years</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="disclaimer">
   <div class="disclaimer-container">
      <h3>yes disclaimer</h3>
      <p class="text-center mb-0">SIE/YES Pakistan is not responsible for any information obtained or
         communication from any fake website or Facebook page. Please refer to the information on the official
         website www.yespak.org or Facebook page facebook.com/YESProgramPakistanOfficial. All questions should be
         asked on the Facebook page or sent to info@yespk.org.</p>
      </div>
   </section>
   
   @push('scripts')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="{{asset('js\nav.js')}}"></script>
   <script src="{{asset('js\carousel.js')}}"></script>
   <script src="{{asset('js\animation.js')}}"></script>
   <script src="{{asset('js\cardanimation.js')}}"></script>
   <script>
      gsap.registerPlugin(ScrollTrigger);
         
         gsap.to("#card-left", {
             x: 10,
             opacity: 1,
             scrollTrigger: {
                 trigger: "#card-left",
                 start: "top center",
                 end: "bottom center",
                 scrub: true,
                 markers: false,
                         toggleActions: "play none none reverse"
             }
         });
         
         gsap.to("#card-right", {
             x: -10,
             opacity: 1,
             scrollTrigger: {
                 trigger: "#card-right",
                 start: "top center",
                 end: "bottom center",
                 scrub: true,
                 markers: false
             }
         });
         
         </script>
   @endpush 
 
   @endsection
       
   @section('title')
   home
   @endsection
  
  
   
  
  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   