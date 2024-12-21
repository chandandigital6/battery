<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
            <a href="" class="text-decoration-none">
                <img src="{{ asset('asset/img/RVG LOGO..png') }}" alt="" width="250">
                {{--                <h1 class="m-0"><span class="text-primary">Real </span>Victory</h1> --}}
            </a>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                    <small>
                        73 Basement, Ekta Enclave Society, Lakhanpur, Khyora, Kanpur, Uttar Pradesh 208024
                    </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                    <small>realvictorygroups@gmail.com</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                    <small><a href="tel: +917753800444"> +917753800444</a></small> <br>
                    <small><a href="tel: +918423269465"> +918423269465</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <!-- Add any additional content here if needed -->
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <img src="{{ asset('asset/img/RVG LOGO..png') }}" alt="" width="250">
                    {{--                    <h1 class="m-0"><span class="text-primary">Real</span>Victory</h1> --}}
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                        <a href="{{ route('course') }}"
                            class="nav-item nav-link {{ Request::is('course') ? 'active' : '' }}">Courses</a>
                        <a href="{{ route('teacher') }}"
                            class="nav-item nav-link {{ Request::is('teacher') ? 'active' : '' }}">Trainers</a>
                        <a href="{{ route('blog') }}"
                            class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }}">Blog </a>

                        {{--                        <div class="nav-item dropdown"> --}}
                        {{--                            <a href="#" class="nav-link dropdown-toggle {{ Request::is('blog*') ? 'active' : '' }}" data-toggle="dropdown">Blog</a> --}}
                        {{--                            <div class="dropdown-menu rounded-0 m-0"> --}}
                        {{--                            </div> --}}
                        {{--                        </div> --}}
                        <a href="{{ route('career') }}" class="nav-item nav-link">Careers</a>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="#" data-toggle="modal"
                        data-target="#enrollModal">Enroll Now</a>
                </div>
            </nav>

        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Enroll Now Modal Start -->
<div class="modal fade" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg shadow-lg">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="enrollModalLabel">Enroll Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('appointment.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Full Name</label>
                        <input type="text" class="form-control rounded-pill border-primary" name="name"
                            id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email Address</label>
                        <input type="email" class="form-control rounded-pill border-primary" name="email"
                            id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="font-weight-bold">Phone Number</label>
                        <input type="tel" class="form-control rounded-pill border-primary" name="number"
                            id="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="course" class="font-weight-bold">Select Course</label>
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
                    <button type="submit" class="btn btn-primary rounded-pill btn-block py-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Enroll Now Modal End -->
