@extends('components.main', ['seos' => $seos])

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px;">
                <h3 class="display-4 text-white text-uppercase">Careers</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="#">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Careers</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Careers Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-lg-3">
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-4">Hybrid and Remote Jobs</h5>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="hybrid">
                            <label class="form-check-label" for="hybrid">Hybrid</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remote">
                            <label class="form-check-label" for="remote">Remote</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-4">Team</h5>
                        <select class="form-control">
                            <option>Consulting</option>
                            <option>Engineering</option>
                            <option>Marketing</option>
                            <!-- Add more teams as needed -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-4">Experience Level</h5>
                        <select class="form-control">
                            <option>Internship</option>
                            <option>Entry Level</option>
                            <option>Professional</option>
                            <option>Manager</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-4">Location</h5>
                        <input type="text" class="form-control" placeholder="Search Location">
                    </div>
                </div>

                <!-- Job Listings -->
                <div class="col-lg-9">
                    <!-- Search Bar -->
                    <div class="mb-4">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="query" class="form-control form-control-lg" placeholder="Search Job">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Job Grid -->
                    <div class="row">
                        <!-- Example job listing -->
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 shadow-sm border-0 rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Technical Consultant</h5>
                                    <p class="text-muted">Consulting | Hyderabad, IN</p>
                                    <p class="text-muted mb-2">Posted Date: Aug 24, 2024</p>
                                    <a href="{{route('jobdetail')}}" class="stretched-link">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the job listing for other jobs -->
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">1 - 30 of 5,006 items</div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Careers End -->
@endsection
