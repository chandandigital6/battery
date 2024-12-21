@extends('components.main')

@section('content')
    <div class="container-fluid py-5 bg-light" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="display-4 text-primary">Thank You!</h1>
                            <p class="lead mt-4">Your registration was successful. We will get back to you shortly.</p>
                            <a href="{{ url('/') }}" class="btn btn-primary rounded-pill mt-4">Return to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
