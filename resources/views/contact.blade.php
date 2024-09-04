@extends("layouts.app")
@section('content')
@push('styles')
      <link href="{{asset('css\contact.css')}}" rel="stylesheet">
@endpush
<div class="background">
</div>
<div class="contact-form">
   
        <form action="{{ route('add.contact')}}"  method="POST">
        @csrf
        <div class="container col-6 mt-4">
            @include('flash-message')
        </div>
        <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" value="{{ old('fullname') }}" class="form-control @error('fullname') is-invalid  @enderror" autocomplete="off" id="fullName" name="fullname">
                    <span class="text-danger">
                        @error('fullname')
                        {{ $message }}
                        @enderror
                      </span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid  @enderror" autocomplete="off" id="email" name="email">
                    <span class="text-danger">
                        @error('email')
                        {{ $message }}
                        @enderror
                      </span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" value="{{ old('phonenumber') }}" class="form-control @error('phonenumber') is-invalid  @enderror" autocomplete="off" id="phone" name="phonenumber">
                    <span class="text-danger">
                        @error('phonenumber')
                        {{ $message }}
                        @enderror
                      </span>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control @error('message') is-invalid  @enderror" id="message"  value="{{ old('message') }}" autocomplete="off" rows="5" name="message"></textarea>
                    <span class="text-danger">
                        @error('message')
                        {{ $message }}
                        @enderror
                      </span>
                </div>
                <div class="form-button">
                    <button type="submit" class="btn btn-warning">Send Message</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
@section('title')
contact
@endsection