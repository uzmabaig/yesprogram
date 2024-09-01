@extends("layouts.app")
@push('styles')
      <link href="{{asset('css\about.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="about-container">
    <div class="container">
        <div class="text-center mt-4">
            <h1><span>TOGETHER FOR A BETTER WORLD</span></h1>
        </div>
        <div class="left-image">
            <img class ='logo' src='images\Polygon 6.png' alt='logo'>
        </div>
        <div class="right-image">
            <img class ='logo' src='images\Blue Polygon .png' alt='logo'>
        </div>
        <div class="about-text">
            <h3><strong>WHO</strong> WE ARE</h3>
            <p>Society for International Education (SIE) is a non-profit, non-government Karachi based educational society registered under the Societies Registration Act 1860 KAR No.676/05, dedicated to the development of global partnerships in education, capacity building of learning communities based on the effective use of Information and 
                Communications Technology (ICT), English Language, Teacher Development, Youth Leadership for Pakistan and the rest of the globe.<br><br>
                SIE is committed to work with umbrella organizations, academic bodies, universities, non-government organizations, and governments to establish a global community of concerned organizations and citizens with the express purpose of supporting the youth of the world in developing and implementing educational and humanitarian projects, especially projects of change and healing for the health and welfare of the planet. SIE has had
                tremendous success implementing several educational and ICT programs for educational development and capacity building nationwide.<br><br>
                SIE runs and manages different projects and programs. iEARN (International Education and Resource Network) is the project that SIE started first and is an ongoing project. The iEARN Pakistan is affiliated with iEARN International Assembly comprised of 42 countries; the decision making body within the 140 countries global network of iEARN programs. SIE programs reach extensively to communities, schools, educators
                , and students from a wide geographical region of Pakistan, including remote and underserved regions and communities.</p>
                <h3><strong>OUR</strong> MISSION</h3>
                <p>Empower individuals and communities to think, learn, share and grow for a better world by creating innovative learning opportunities.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4 offset-1">
                <a href="http://www.siepk.org/" class="active" aria-current="page"><h6>www.siepk.org</h6></a>
            </div>
            <div class="col-2 offset-3">
                <img class ='logo' src='images\SIE Vector.png' alt='logo'>
            </div>
        </div>
    </div>
</div>

@endsection
@section('title')
about
@endsection
