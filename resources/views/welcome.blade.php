@extends('layouts.default')
@section('content')
    <div class="mt-5 mx-auto" style="width: 768px">
        <!-- Wrapper container -->


        <!-- Bootstrap 5 starter form -->
        <form method="POST" action="{{ route('notify') }}" id="contactForm">
            @csrf
            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" name="name" type="text" placeholder="Name" value="Jhon Rey Repuela" />
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" name="email" type="email" placeholder="Email Address"
                    value="j6cafe2018@gmail.com" />
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" name="message" placeholder="Message" style="height: 10rem;">This is a test message.</textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>

        </form>

    </div>
@endsection
