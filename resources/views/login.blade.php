@extends("layouts.app")
@push('styles')
<link href="{{asset('css\login.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="contact-container">
    <div class="contact-form">
        <div class="form-img">
            <img onclick="redirect()" src="images/YES Logo Updated.png" alt="">
        </div>
        @include('flash-message')
        <div class="login-title">
                <p>Kennedy-lugar youth exchange & study (YES) Program 2025-26</p>
                <h3>LOGIN</h3>
            </div>
            <form action="{{route('loginMatch')}}" method="POST">
                @csrf
            <div class="form-groups">
                <input type="email" value="{{ old('email')}}" class="form-control  @error('email') is-invalid  @enderror" id="email" name="email" placeholder="Email Address">
                <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                  </span>
            </div>
            <div class="form-groups">
                <input type="password" value="" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password" placeholder="Password">
                <i class="fas fa-eye eye-icon"></i>
                <span class="text-danger">
                  @error('password')
                  {{ $message }}
                  @enderror
                </span>
              </div>
               
           
            <button type="submit">Login</button>
        </form>
        <div class="link-text">
            <a href="">forgot your password?</a><br>
            <a href="/">Create an account</a>
        </div>
        <div class="bottom-image">
            <img src="images/LOGO STRIP-01.png" alt="">
        </div>
    </div>
</div>

<script src="js/login.js"></script>
{{-- <script src="js/searchbar.js"></script> --}}

<script>
 function redirect(){
        window.location.href = 'index';
    }
    function linkopen(){
        window.open('https://yesprogram.pk/frontend/media/how-to-apply-YES-2024-25.pdf');
    }

    function openlink(){
        window.location.href = 'login';
    }
</script>
@endsection