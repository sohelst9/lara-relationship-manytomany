@extends('web')

@section('content')
    <div class="container">
        <div class="enroll_enrollment-container">
            <div class="enroll_form-header">
                <h2 class="enroll_page-title">Course Enrollment</h2>
                <p class="text-muted">Please select a student and course to complete enrollment</p>
            </div>

            <form action="{{ route('enroll_store') }}" method="POST">
                @csrf

                <div class="enroll_select-wrapper">
                    <label class="enroll_form-label" for="student_id">Select Student</label>
                    <select name="student_id" class="enroll_form-select" id="student_id">
                        <option value="">-- Select a Student --</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                    @error('student_id')
                        <div class="enroll_error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="enroll_select-wrapper">
                    <label class="enroll_form-label" for="course_id">Select Course</label>
                    <select name="course_id" class="enroll_form-select" id="course_id">
                        <option value="">-- Select a Course --</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    </select>
                    @error('course_id')
                        <div class="enroll_error-message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="enroll_btn-enroll text-white">
                        Complete Enrollment
                    </button>
                </div>
            </form>
        </div>

        <!-- Enrollment Steps Section -->
        <div class="enroll_enrollment-steps">
            <h3 class="mb-4">How to Enroll</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="enroll_step-card">
                        <div class="enroll_step-number">1</div>
                        <h5>Choose Your Course</h5>
                        <p class="text-muted">Browse through our selection of courses and select the one that matches your goals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="enroll_step-card">
                        <div class="enroll_step-number">2</div>
                        <h5>Complete Registration</h5>
                        <p class="text-muted">Fill in your details and select your preferred payment method.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="enroll_step-card">
                        <div class="enroll_step-number">3</div>
                        <h5>Start Learning</h5>
                        <p class="text-muted">Get immediate access to course materials and begin your learning journey.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Preview Section -->
        <div class="enroll_course-preview">
            <h3 class="mb-4">Selected Course Preview</h3>
            <div id="coursePreview" class="enroll_course-summary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="course-title mb-3">Course details will appear here</h4>
                        <p class="text-muted">Select a course above to see detailed information</p>
                        <h5 class="mt-4">Requirements:</h5>
                        <ul class="enroll_requirements-list">
                            <li>Basic understanding of the subject</li>
                            <li>Computer with internet connection</li>
                            <li>Dedication to learn</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3">
                            <h4 class="mb-3">Course Duration</h4>
                            <p class="h2 text-primary mb-0">8 Weeks</p>
                            <small class="text-muted">Self-paced learning</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="enroll_faq-section">
            <h3 class="mb-4">Frequently Asked Questions</h3>
            <div class="accordion" id="enrollmentFAQ">
                <div class="enroll_faq-card">
                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#faq1">
                        <h6 class="mb-0">How long do I have access to the course?</h6>
                    </div>
                    <div id="faq1" class="collapse" data-bs-parent="#enrollmentFAQ">
                        <div class="card-body">
                            You have lifetime access to the course materials after enrollment.
                        </div>
                    </div>
                </div>
                <div class="enroll_faq-card">
                    <div class="card-header" data-bs-toggle="collapse" data-bs-target="#faq2">
                        <h6 class="mb-0">What if I'm not satisfied with the course?</h6>
                    </div>
                    <div id="faq2" class="collapse" data-bs-parent="#enrollmentFAQ">
                        <div class="card-body">
                            We offer a 30-day money-back guarantee if you're not satisfied with the course.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Section -->
        <div class="enroll_support-card">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="mb-2">Need Help?</h4>
                    <p class="mb-0">Our support team is here to assist you with the enrollment process</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-light">Contact Support</button>
                </div>
            </div>
        </div>
    </div>
@endsection