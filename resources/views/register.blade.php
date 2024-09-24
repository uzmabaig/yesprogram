@extends("layouts.app")
@push('styles')
<link href="{{asset('css\register.css')}}" rel="stylesheet">
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
            <h3>Create an account</h3>
        </div>
        <form action="{{route('registerSave')}}" method="POST">
            @csrf
            <div class="form-groups">
                <input type="firstname"class="form-control  @error('firstname') is-invalid  @enderror" id="firstname" placeholder="Firstname" name="firstname">
                <span class="text-danger">
                    @error('firstname')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            
            <div class="form-groups">
                <input type="lastname"class="form-control  @error('lastname') is-invalid  @enderror" id="lastname" placeholder="Lastname" name="lastname">
                <span class="text-danger">
                    @error('lastname')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            
            <div class="form-groups">
                <input type="email" value="{{ old('email')}}" placeholder="Email" class="form-control  @error('email') is-invalid  @enderror" id="email" name="email">
                <span class="text-danger">
                    @error('email')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            
            
            <div class="form-groups">
                <input type="password"class="form-control  @error('password') is-invalid  @enderror" id="password" placeholder="Password" name="password">
                <i class="fas fa-eye eye-icon"></i>
                <span class="text-danger">
                    @error('password')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            
            <button type="submit" name="submit">Create Account</button>
        </form>
        <div class="link-text">
            <a href="{{route('login')}}" style="text-decoration: none;">Already have an account?</a><br>
            <a href="{{route('login')}}">Sign in here</a>
        </div>
        <div class="bottom-image">
            <img src="images/LOGO STRIP-01.png" alt="">
        </div>
    </div>
</div>
@push('scripts')
<script src="js/login.js"></script>
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
    @endpush
    @endsection