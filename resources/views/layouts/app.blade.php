<!doctype html>
<html lang="en">
<head>
    <title>Yesprogram- @yield('title','website')</title>
    <link rel="icon" href="images/YES Logo Updated.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{asset('css\bootstrap.css')}}" rel="stylesheet" >
    <link href="{{asset('css\footer.css')}}" rel="stylesheet">
    <link href="{{asset('css\header.css')}}" rel="stylesheet">
    
    @stack('styles')
    @stack('scripts')
    <script src="js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    
</head>
<header>
    <div class="header">
        <div class="announcement"><marquee>Announcement for the program updates and activities</marquee></div>
        <div class="header-content">
            <div class="logo">
                <img src="images/YES Logo Updated.png" alt="Logo">
            </div>
            <div class="separator"></div>
            <div class="program-info">
                <h1>ONE-YEAR EXCHANGE PROGRAM FOR <br> HIGH SCHOOL STUDENTS</h1>
            </div>
            <div class="social-icons">
                <a class="nav-link" href="https://www.facebook.com/YESProgramPakistanOfficial" aria-label="Facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="nav-link" href="https://www.instagram.com/societyforintl.education/?igshid=1j0jbwhjarv1u" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="nav-link" href="https://x.com/i/flow/login?redirect_after_login=%2FiEARNPAK" aria-label="Twitter" target="_blank"><i class="fab fa-x-twitter"></i></a>
            </div>  
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
 
    @yield('content', 'Default content')
      
        
    </body>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section logo">
                    <a href="https://iearn.org/country/iearn-pakistan" target="_blank"><img class ='logo' src='images\footer.png' alt='logo'></a>
                    <p>Empower individuals and communities to think, <br> learn, share and grow for a better world by creating <br> innovative opportunities</p>
                    <a href="{{route('about')}}" class="learn-more">Learn More</a>
                </div>
                <div class="footer-section info">
                    <h3>Information</h3>
                        <li><a href="">Program Intro</a></li>
                        <li><a href="">Eligibility Criteria</a></li>
                        <li><a href="">Age Calculator</a></li>
                        <li><a href="">Application & Selection Process</a></li>
                        <li><a href="">Parent Student Agreement</a></li>
                        <li><a href="">FAQ'S</a></li>
                </div>
                <div class="footer-section contact">
                    <h3>Contact Information</h3>
                    <address>
                        <a href="https://www.google.com/maps/place/Society+for+International+Education/@24.858766,67.0734416,17z/data=!3m1!4b1!4m6!3m5!1s0x3eb33e856fc948ff:0x3dae28f2f5bcb0a8!8m2!3d24.858766!4d67.0734416!16s%2Fg%2F11h1ppt7g?entry=ttu" target="_blank">Society for International Education<br>
                        88-H, P.E.C.H.S. Block-6,<br>
                        Karachi.<br></a>
                        Tel: <a href="tel:03332929960">0333-2929960</a><br>
                        Email: <a href="mailto:info@yespk.org">info@yespk.org</a>
                    </address>
                </div>
            </div>
            <div class="footer-copyright">
                <p> Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved
                </p>
            </div>
    </footer>
            
            </html>