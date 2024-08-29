<!doctype html>
<html lang="en">
<head>
    <title>Yesprogram- @yield('title','website')</title>
    <link href="{{asset('css\bootstrap.css')}}" rel="stylesheet" >
    <link href="{{asset('css\footer.css')}}" rel="stylesheet">
    <link href="{{asset('css\header.css')}}" rel="stylesheet">
    <link href="{{asset('css\style.css')}}" rel="stylesheet">
    <link href="{{asset('css\about.css')}}" rel="stylesheet">
     <link href="{{asset('css\contact.css')}}" rel="stylesheet">
     <link href="{{asset('css\media.css')}}" rel="stylesheet">
    
    <link href="{{asset('js\cardanimation.js')}}" rel="stylesheet">
    <link href="{{asset('js\animation.js')}}" rel="stylesheet">
    <link href="{{asset('js\main.js')}}" rel="stylesheet">
    <link href="{{asset('js\nav.js')}}" rel="stylesheet">
    <link href="{{asset('js\carousel.js')}}" rel="stylesheet">
    <link href="{{asset('js\media.js')}}" rel="stylesheet">
    <link href="{{asset('js\searchbar.js')}}" rel="stylesheet">
    <link href="{{asset('js\login.js')}}" rel="stylesheet">
    <link href="{{asset('js\slidebutton.js')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<header>
    <div class="header">
        <div class="announcement"> Announcement for the program updates and activities </div>
        <div class="header-content">
            <div class="row col-2">
                <img class ='logo' src='images\YES Logo Updated.png' alt='logo'>
            </div>
            <div class="separator"></div>
            <div class="program-info">
                <h1>ONE-YEAR EXCHANGE PROGRAM FOR HIGH SCHOOL STUDENTS</h1>
            </div>
      
            <ul class="social-icons">
                <a href="https://www.facebook.com/YESProgramPakistanOfficial">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/societyforintl.education/?igshid=1j0jbwhjarv1u">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://x.com/i/flow/login?redirect_after_login=%2FiEARNPAK">
                    <i class="fa fa-twitter"></i>
                </a>
            </ul>   
        </div>
        
        <nav>
            <ul>
                <li><a href="/" class="active" aria-current="page">HOME</a></li>
                <li><a href="{{route('yesprogram')}}" aria-current="page">YES Program</a></li>
                <li><a href="{{route('media')}}" aria-current="page">Media</a></li>
                <li><a href="{{route('about')}}" aria-current="page">About Us</a></li>
                <li><a href="{{route('contact')}}" aria-current="page">Contact Us</a></li>
            </ul>
        </nav> 
    </div>
</header>
<body>
   {{-- <div class="container col-6 mt-4">
        @include('flash-message')
    </div> --}}
    
   
        @yield('content', 'Default content')
      
        
    </body>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div class="row col-md-4">
                    <img class ='logo' src='images\footer.png' alt='logo'>
                </div>
                <p class="col-md-8">Empower individuals and communities to think,
                    learn, share and grow for a better world by creating
                    innovative opportunities<br><a href = "{{route('about')}}">Learn More</a>
                </div>
                <div class="info">
                    <ul>
                        <li><h3>Information</h3></li>
                        <li><a href="" aria-current="page">Program Intro</a></li>
                        <li><a href="" aria-current="page">Eligibility Criteria</a></li>
                        <li><a href="" aria-current="page">Age Calculator</a></li>
                        <li><a href="" aria-current="page">Application & Selection Process</a></li>
                        <li><a href="" aria-current="page">Parent Student Agreement</a></li>
                        <li><a href="" aria-current="page">FAQ'S</a></li>
                    </ul>
                    
                </div>
                <div class="learn-more">
                    <h3>Contact Information</h3>
                    <address><a href = "https://www.google.com/maps/place/Society+for+International+Education/@24.858766,67.0734416,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33e856fc948ff:0x3dae28f2f5bcb0a8!8m2!3d24.8">
                        Society for International Education<br>
                        88-H, P.E.C.H.S. Block-6,<br>
                        Karachi.<br>
                        Tel: 0333-2929960<br>
                        Email: info@yespk.org</a></address>
                    </div>
                    
                </div>
                <div class="footer-copyright">
                    <p>Copyright © 2024 All rights reserved</p>
                </div>
            </div>
            
            </html>