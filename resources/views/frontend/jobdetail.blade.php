@extends('components.main', ['seos' => $seos])

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px;">
                <h3 class="display-4 text-white text-uppercase">Job Details</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="#">Careers</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Job Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Job Details Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Job Information -->
            <div class="col-lg-8">
                <!-- Job Title and Company -->
                <div class="mb-4">
                    <h2 class="display-4">Technical Consultant</h2>
                    <p class="text-muted">Tech Solutions | Hyderabad, IN</p>
                </div>

                <!-- Job Description -->
                <div class="mb-4">
                    <h5 class="text-uppercase mb-3">Job Description</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <!-- Key Responsibilities -->
                <div class="mb-4">
                    <h5 class="text-uppercase mb-3">Key Responsibilities</h5>
                    <ul>
                        <li>Responsibility 1</li>
                        <li>Responsibility 2</li>
                        <li>Responsibility 3</li>
                    </ul>
                </div>

                <!-- Requirements -->
                <div class="mb-4">
                    <h5 class="text-uppercase mb-3">Requirements</h5>
                    <ul>
                        <li>Requirement 1</li>
                        <li>Requirement 2</li>
                        <li>Requirement 3</li>
                    </ul>
                </div>

                <!-- Salary and Benefits -->
                <div class="mb-4">
                    <h5 class="text-uppercase mb-3">Salary & Benefits</h5>
                    <p>Salary: $60,000 - $80,000 per year</p>
                    <p>Benefits: Health Insurance, Paid Time Off, 401(k) Matching</p>
                </div>

                <!-- Application Process -->
                <div class="mb-4">
                    <h5 class="text-uppercase mb-3">Application Process</h5>
                    <p>To apply for this job, please submit your resume and cover letter to <a href="mailto:hr@techsolutions.com">hr@techsolutions.com</a>. Applications will be reviewed on a rolling basis. We will contact shortlisted candidates for an interview.</p>
                </div>

                <!-- Company Overview -->
                <div class="mb-4">
                    <h5 class="text-uppercase mb-3">About Tech Solutions</h5>
                    <p>Tech Solutions is a leading provider of innovative technology solutions and consulting services. We are committed to delivering high-quality services to our clients and fostering a dynamic work environment for our employees.</p>
                    <p><strong>Company Values:</strong></
                        <ul>
                            <li>Innovation</li>
                            <li>Integrity</li>
                            <li>Customer Focus</li>
                            <li>Teamwork</li>
                        </ul>
                    </div>

                    <!-- Employee Testimonials -->
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-3">What Our Employees Say</h5>
                        <div class="testimonial">
                            <p><em>"Working at Tech Solutions has been a great experience. The team is supportive, and the projects are exciting. The company really values its employees and their development."</em></p>
                            <p class="text-muted"><strong>- Jane Doe, Senior Developer</strong></p>
                        </div>
                        <div class="testimonial mt-4">
                            <p><em>"The work environment at Tech Solutions is fantastic. There's a strong emphasis on work-life balance and personal growth."</em></p>
                            <p class="text-muted"><strong>- John Smith, Marketing Specialist</strong></p>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-3">Ready to Apply?</h5>
                        <p>If you meet the qualifications and are excited about the opportunity, don’t wait! Apply today and take the next step in your career with Tech Solutions.</p>
                        <a href="" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>

                <!-- Sidebar (Optional) -->
                <div class="col-lg-4">
                    <!-- Company Overview (Without Logo) -->
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-4">Company Overview</h5>
                        <p>Tech Solutions is committed to innovation and excellence. Learn more about our company and our mission.</p>
                    </div>

                    <!-- Job Application Timeline -->
                    <div class="mb-4">
                        <h5 class="text-uppercase mb-4">Application Timeline</h5>
                        <ul class="list-unstyled">
                            <li><strong>Application Deadline:</strong> Sep 30, 2024</li>
                            <li><strong>Interviews Start:</strong> Oct 10, 2024</li>
                            <li><strong>Final Decision:</strong> Oct 20, 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Details End -->
    @endsection
