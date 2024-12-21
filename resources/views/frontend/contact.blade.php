@extends('components.main',['seos' => $seos])

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('home')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Get In Touch With Us</h1>
            </div>
            <div class="row">
                <!-- Contact Form Start -->
                <div class="col-lg-6 mb-4">
                    <div class="contact-form bg-white rounded p-5 shadow-lg border border-light" data-aos="zoom-in" data-aos-duration="1000">
                        <div id="success"></div>
                        <form action="{{ route('appointment.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="font-weight-bold text-primary">Full Name</label>
                                <input type="text" class="form-control rounded-pill border-primary" name="name"
                                    id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="font-weight-bold text-primary">Email Address</label>
                                <input type="email" class="form-control rounded-pill border-primary" name="email"
                                    id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="font-weight-bold text-primary">Phone Number</label>
                                <input type="tel" class="form-control rounded-pill border-primary" name="number"
                                    id="phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class="form-group">
                                <label for="course" class="font-weight-bold text-primary">Select Course</label>
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
                                class="rounded-pill btn btn-primary btn-block border-0 py-3">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- Contact Form End -->

                <!-- Contact Info Start -->
                <div class="col-lg-6">
                    <div class="contact-info bg-white rounded p-4 shadow-lg border border-light">
                        <div class="row">
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-duration="1000">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-map-marker-alt fa-2x text-primary mr-3"></i>
                                    <div>
                                        <h5 class="text-dark mb-2">Address</h5>
                                        <p class="mb-0">
                                            73 Basement, Ekta Enclave Society, Lakhanpur, Khyora, Kanpur, Uttar Pradesh 208024
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-duration="1200">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-phone-alt fa-2x text-primary mr-3"></i>
                                    <div>
                                        <h5 class="text-dark mb-2">Phone</h5>
                                        <p class="mb-0"><a href="tel: +917753800444"> +917753800444</a></p>
                                        <p class="mb-0"><a href="tel: +918423269465"> +918423269465</a></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4" data-aos="fade-up" data-aos-duration="1400">
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-envelope fa-2x text-primary mr-3"></i>
                                    <div>
                                        <h5 class="text-dark mb-2">Email</h5>
                                        <p class="mb-0"><a href="mailto:realvictorygroups@gmail.com">realvictorygroups@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Social Media Links -->
                        <div class="text-center mt-4">
                            <h5 class="text-primary mb-2">Follow Us</h5>
                            <div class="d-flex justify-content-center">
                                <a href="https://www.facebook.com/realvictorygroups" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://wa.me/+918423269465" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.instagram.com/realvictorygroups/" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/realvictorygroups/" target="_blank" class="btn btn-outline-primary mx-2">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Info End -->
            </div>
            <!-- Map Start -->
            <div class="row mt-5">
                <div class="col-12">
                    <h5 class="text-center text-primary mb-4">Our Location</h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57132.69108614042!2d80.23849774473352!3d26.494602804507014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3826d4ebf859%3A0xe9e2ed37cc371552!2sReal%20Victory%20Groups!5e0!3m2!1sen!2sin!4v1724752996798!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
{{--                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/dir//73+Basement,+Ekta+Enclave+Society,+Lakhanpur,+Khyora,+Kanpur,+Uttar+Pradesh+208024/@26.4945082,80.1972962,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x399c3826d4ebf859:0xe9e2ed37cc371552!2m2!1d80.2796991!2d26.4945311?entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D" allowfullscreen="" loading="lazy"></iframe>--}}
                    </div>
                </div>
            </div>
            <!-- Map End -->
        </div>
    </div>
    <!-- Contact End -->
@endsection
