@extends('components.main', ['seos' => $seos])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">About</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            @foreach ($abouts as $about)
                <div class="row align-items-center">
                    <div class="col-lg-5" data-aos="fade-right">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('storage/' . $about->image) }}"
                            alt="">
                    </div>
                    <div class="col-lg-7" data-aos="fade-left">
                        <div class="text-left mb-4">
                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">{{ $about->title }}
                            </h5>
                            <h1>{{ $about->heading }}</h1>
                        </div>
                        <p>
                            {!! $about->description !!}
                        </p>
                        {{--                        <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;" data-aos="fade-up">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Need Any Courses?</h5>
                        <h1 class="text-white display-4">Get 30% Off for New Students</h1>
                    </div>
                    <p class="text-light">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum
                        ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea
                        ipsum est dolor.</p>
                    <ul class="list-unstyled text-light">
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Labore eos amet dolor amet
                            diam</li>
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Etsea et sit dolor amet
                            ipsum</li>
                        <li class="py-2"><i class="fa fa-check-circle text-primary mr-3"></i>Diam dolor diam elitr ipsum
                            vero</li>
                    </ul>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="card border-0 shadow">
                        <div class="card-header bg-white text-center p-4">
                            <h1 class="m-0">Register Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="{{ route('appointment.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="font-weight-bold text-white">Full Name</label>
                                    <input type="text" class="form-control rounded-pill border-primary" name="name"
                                        id="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="font-weight-bold text-white">Email Address</label>
                                    <input type="email" class="form-control rounded-pill border-primary" name="email"
                                        id="email" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="font-weight-bold text-white">Phone Number</label>
                                    <input type="tel" class="form-control rounded-pill border-primary" name="number"
                                        id="phone" placeholder="Enter your phone number" required>
                                </div>
                                <div class="form-group">
                                    <label for="course" class="font-weight-bold text-white">Select Course</label>
                                    <select class="form-control rounded-pill border-primary" name="course" id="course"
                                        required>
                                        <option value="" disabled selected>Select Course</option>
                                        <option value="php">PHP</option>
                                        <option value="web designing">WEB DESIGNING</option>
                                        <option value="full stack">FULL STACK</option>
                                        <option value="digital marketing"> Digital Marketing</option>
                                        <option value="graphics Designing"> Graphics Designing</option>
                                    </select>
                                </div>
                                <button type="submit"
                                    class="rounded-pill btn btn-dark btn-block border-0 py-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5" data-aos="fade-up">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-down">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">



                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <h4 class="font-weight-normal mb-4">

                                    {!! $testimonial->msg !!}
                                </h4>
                                <img class="img-fluid mx-auto mb-3" src="{{ asset('storage/' . $testimonial->image) }}"
                                    alt="">
                                <h5 class="m-0">{{ $testimonial->name }}</h5>
                                <span>Profession</span>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
