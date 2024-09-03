@extends("layouts.app")
@push('styles')
      <link href="{{asset('css\media.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
@endpush

@section('content')

<div class="main-container">
    <div class="left-button-pannel">
        <div class="title">
            <h2>Downloads</h2>
        </div>
        <div class="content-change-button">
            <ul>
                <li><button>Brouchure Yes (2024-25)</button></li>
                <li><button>Poster Yes (2024-25)</button></li>
                <li><button>MIUSA Flyer Yes (2024-25)</button></li>
                <li><button>Parent Student Agreemen</button></li>
            </ul>
            <div class="guide-title">
                <h2>Support</h2>
            </div>
            <ul class="Guideline-Section">
                <li>
                    <button onclick="linkopen()">How to Apply ?</button>
                </li>
                <li>
                    <button>Apply Now</button>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="right-change-content">
        <div class="video-section">
            <div class="parent-container">
                <aside id="video-player">
                    <iframe src="https://www.youtube.com/embed/11IFEuvue8M?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0"></iframe>
                </aside>
            </div>
            <div id="playlist">
                <button class="lazyload active" data-bg="//img.youtube.com/vi/ggB7ds1DA54/sddefault.jpg"
                data-iframe="https://www.youtube.com/embed/11IFEuvue8M?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0"
                data-caption="Chapal Hart ♩ American Pride"
                style="background-image: url('//img.youtube.com/vi/ggB7ds1DA54/sddefault.jpg');"></button>
            
                <button class="lazyload" data-bg="//img.youtube.com/vi/gwRDaCooyiY/sddefault.jpg"
                    data-iframe="https://www.youtube.com/embed/11IFEuvue8M?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0"
                    data-caption="Jon Batiste ♩ FREEDOM"
                    style="background-image: url('//img.youtube.com/vi/gwRDaCooyiY/sddefault.jpg');"></button>

                <button class="lazyload" data-bg="//img.youtube.com/vi/FQ4m4n7D0xQ/sddefault.jpg"
                    data-iframe="https://www.youtube.com/embed/11IFEuvue8M?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0"
                    data-caption="Luke James ♩ SHINE ON"
                    style="background-image: url('//img.youtube.com/vi/FQ4m4n7D0xQ/sddefault.jpg');"></button>

                    <button class="lazyload" data-bg="//img.youtube.com/vi/9WbXZz01ruY/sddefault.jpg"
                    data-iframe="https://www.youtube.com/embed/11IFEuvue8M?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0"
                    data-caption="Luke James ♩ SHINE ON"
                    style="background-image: url('//img.youtube.com/vi/9WbXZz01ruY/sddefault.jpg');"></button>

                <button class="lazyload" data-bg="//img.youtube.com/vi/sJ7YTX-oPwE/sddefault.jpg"
                    data-iframe="https://www.youtube.com/embed/11IFEuvue8M?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0"
                    data-caption="Shamarr Allen ♩ Dance with Me"
                    style="background-image: url('//img.youtube.com/vi/sJ7YTX-oPwE/sddefault.jpg');"></button>


            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('js\media.js')}}"></script>
    <script src="{{asset('js\slidebutton.js')}}"></script>
    <script src="{{asset('js\main.js')}}"></script>
    <script src="{{asset('js\nav.js')}}"></script>
@endpush
@endsection

       
@section('title')
media
@endsection


