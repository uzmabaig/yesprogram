@extends("layouts.app")
@section('content')
@push('styles')
      <link href="{{asset('css\contact.css')}}" rel="stylesheet">
@endpush
<div class="background">
</div>
<div class="contact-form">
    <form>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" autocomplete="off" id="fullName">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" autocomplete="off" id="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" autocomplete="off" id="phone">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" autocomplete="off" rows="5"></textarea>
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