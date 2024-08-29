@extends("layouts.app")
@section('content')

<div class="background">
</div>
<div class="contact-form">
    <div class="row">
        <div class="col-6">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
                <label for="phonenumber">Phone Number</label>
                <input type="number" class="form-control" id="phonenumber" name="phonenumber">
            </div>
          <div class="col-6">
                <label for="message">Message</label>
                <textarea id="message" type="text" class="form-control" name="message"></textarea>
                <div class="col-4 offset-9">
                    <button class="button" type="submit" name="submit">Send Message</button>
                </div>
            </div>
         </div>
</div>
@endsection
@section('title')
contact
@endsection