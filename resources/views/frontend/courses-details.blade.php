
@extends('components.main',['seos' => $seos])

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px;">
                <h3 class="display-4 text-white text-uppercase">{{$courses->title}}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">{{$courses->title}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Course Start -->
    <div class="container-fluid py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">{{$courses->title}}</h5>
                    <h1 class="font-weight-bold">Course Rating {{$courses->rating}} +</h1>
                    <p class="lead">
                        {{$courses->sort_description}}
                        </p>
{{--                    <ul class="list-unstyled">--}}
{{--                        <li><i class="fa fa-check-circle text-primary mr-2"></i>Comprehensive Curriculum</li>--}}
{{--                        <li><i class="fa fa-check-circle text-primary mr-2"></i>Hands-on Projects</li>--}}
{{--                        <li><i class="fa fa-check-circle text-primary mr-2"></i>Expert Instructors</li>--}}
{{--                    </ul>--}}
                    <a href="#enroll" class="btn btn-primary mt-4" data-toggle="modal"
                    data-target="#enrollModal">Enroll Now</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('storage/'.$courses->image) }}" class="img-fluid rounded shadow-lg"
                        alt="Course Intro Image">
                </div>
            </div>
        </div>
    </div>
    <!-- About Course End -->




    <!-- Curriculum Section -->
    <div class="text-center mb-5" data-aos="fade-up">
        <h3 class="mb-4 font-weight-bold">Course Curriculum</h3>
        <p class="lead mb-5">The Web Design course is structured into detailed modules to cover every aspect of web design:
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Single Card Wrapping All Modules -->
                <div class="card mb-4 border-primary rounded-lg">
                    <div class="card-body">
                      {!! $courses->msg !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Web Design Category End -->

    <!-- Enroll Now Section Start -->
    <div class="container-fluid py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-4 font-weight-bold mb-4" data-aos="fade-up">Ready to Start Your Journey?</h2>
            <p class="lead mb-4" data-aos="fade-up">Join our Web Design course today and gain the skills to create stunning
                websites. Enroll now and start learning from industry experts.</p>
            <a href="#enroll" class="btn btn-light btn-lg px-5 py-3" data-aos="fade-up"
                style="color: #007bff; background-color: #fff; border-radius: 50px; font-size: 18px; font-weight: bold;"data-toggle="modal"
                data-target="#enrollModal">
                Enroll Now
            </a>
        </div>
    </div>
    <!-- Enroll Now Section End -->
@endsection
