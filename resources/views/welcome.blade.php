@extends('web')

@section('content')
    <!-- Hero Section -->
    <div class="container-fluid home-page">
        <div class="jumbotron text-center py-5 bg-light">
            <h1 class="display-4 fw-bold text-primary mb-4">Welcome to Our Course Platform</h1>
            <p class="lead text-muted mb-4">Unlock your potential with our expert-led courses and join thousands of successful learners.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('enroll') }}" class="btn btn-lg btn-gradient px-4 py-3">Get Started Now</a>
                <a href="#" class="btn btn-lg btn-outline-primary px-4 py-3">Browse Courses</a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="container py-5">
            <h2 class="text-center mb-5">Why Choose Our Platform</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="feature-icon">
                            <img src="{{ asset('image/image1.webp') }}" alt="Expert Instructors" class="img-fluid p-2">
                        </div>
                        <h3 class="h5 text-center mb-3">Expert Instructors</h3>
                        <p class="text-muted text-center">Learn from industry professionals with years of real-world experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="feature-icon">
                            <img src="{{ asset('image/image1.webp') }}" alt="Flexible Learning" class="img-fluid p-2">
                        </div>
                        <h3 class="h5 text-center mb-3">Flexible Learning</h3>
                        <p class="text-muted text-center">Study at your own pace with lifetime access to course content.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card card h-100 p-4">
                        <div class="feature-icon">
                            <img src="{{ asset('image/image1.webp') }}" alt="Interactive Content" class="img-fluid p-2">
                        </div>
                        <h3 class="h5 text-center mb-3">Interactive Content</h3>
                        <p class="text-muted text-center">Engage with hands-on projects and real-world assignments.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section py-5 mt-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md-4">
                        <h2 class="fw-bold">50,000+</h2>
                        <p>Students Enrolled</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="fw-bold">200+</h2>
                        <p>Expert Instructors</p>
                    </div>
                    <div class="col-md-4">
                        <h2 class="fw-bold">1,000+</h2>
                        <p>Courses Available</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Courses -->
        <div class="container py-5">
            <h2 class="text-center mb-5">Popular Courses</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="course-card card h-100">
                        <img src="{{ asset('image/image1.webp') }}" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Bestseller</span>
                            <h5 class="card-title">Web Development Bootcamp</h5>
                            <p class="card-text text-muted">Learn full-stack web development from scratch.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$99.99</span>
                                <a href="#" class="btn btn-gradient">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card card h-100">
                        <img src="{{ asset('image/image2.webp') }}" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">New</span>
                            <h5 class="card-title">Data Science Fundamentals</h5>
                            <p class="card-text text-muted">Master the basics of data analysis and visualization.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$89.99</span>
                                <a href="#" class="btn btn-gradient">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-card card h-100">
                        <img src="{{ asset('image/image3.webp') }}" class="card-img-top" alt="Course Image">
                        <div class="card-body">
                            <span class="badge bg-warning mb-2">Featured</span>
                            <h5 class="card-title">Digital Marketing Masterclass</h5>
                            <p class="card-text text-muted">Comprehensive guide to modern marketing strategies.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">$79.99</span>
                                <a href="#" class="btn btn-gradient">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="container py-5">
            <h2 class="text-center mb-5">What Our Students Say</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <img src="{{ asset('image/image3.webp') }}" alt="Student" class="testimonial-img">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">"The courses here transformed my career. The instructors are amazing and the content is top-notch."</p>
                            <h5 class="card-title mb-1">Sarah Johnson</h5>
                            <p class="text-muted">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <img src="{{ asset('image/image3.webp') }}" alt="Student" class="testimonial-img">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">"Flexible learning schedule and practical projects helped me land my dream job."</p>
                            <h5 class="card-title mb-1">Michael Chen</h5>
                            <p class="text-muted">Data Analyst</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <img src="{{ asset('image/image3.webp') }}" alt="Student" class="testimonial-img">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">"The community support and course quality exceeded my expectations."</p>
                            <h5 class="card-title mb-1">Emma Davis</h5>
                            <p class="text-muted">Marketing Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="container-fluid bg-light py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="mb-4">Ready to Start Your Learning Journey?</h2>
                        <p class="lead text-muted mb-4">Join thousands of students already learning on our platform.</p>
                        <a href="{{ route('enroll') }}" class="btn btn-lg btn-gradient px-5 py-3">Get Started Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection