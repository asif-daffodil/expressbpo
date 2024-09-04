@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}" alt="Video Editing Services"
                    class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Section 1: Introduction -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-video fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Professional Video Editing Services</h2>
                <p>Transform your raw footage into a compelling story with our expert video editing services. Whether it's for marketing, social media, or personal use, we craft videos that captivate your audience.</p>
            </div>
        </div>

        <!-- Section 2: Key Services -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-3 text-center">
                <i class="fas fa-cut fa-4x text-success mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Video Cutting & Trimming</h5>
                        <p class="card-text">Precisely cut and trim your footage to remove unwanted sections and focus on the essential parts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-adjust fa-4x text-warning mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Color Correction & Grading</h5>
                        <p class="card-text">Enhance the look and feel of your videos with professional color correction and grading techniques.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-music fa-4x text-info mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Audio Enhancement</h5>
                        <p class="card-text">Improve sound quality by removing noise, balancing levels, and adding background music or sound effects.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-file-video fa-4x text-danger mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Motion Graphics & Effects</h5>
                        <p class="card-text">Add dynamic motion graphics, transitions, and visual effects to make your videos more engaging.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Why Choose Our Video Editing Services? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/video-editing.jpg') }}" alt="Video Editing Example"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our Video Editing Services?</h3>
                    <p><i class="fas fa-film text-success me-2"></i><strong>Creative Expertise:</strong> Our team of editors brings a wealth of creativity and experience to every project.</p>
                    <p><i class="fas fa-tachometer-alt text-warning me-2"></i><strong>Fast Turnaround:</strong> We understand the importance of deadlines and deliver high-quality results on time.</p>
                    <p><i class="fas fa-cogs text-info me-2"></i><strong>Custom Solutions:</strong> We tailor our services to meet your specific needs, whether it's for corporate videos, social media, or personal projects.</p>
                    <p><i class="fas fa-smile text-primary me-2"></i><strong>Client Satisfaction:</strong> We prioritize your satisfaction and work closely with you to ensure your vision is realized.</p>
                </div>
            </div>
        </div>

        <!-- Section 4: CountUp Section -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-3">
                <i class="fas fa-video fa-3x text-primary mb-3"></i>
                <h2 class="timer" data-to="2000" data-speed="2000">0</h2>
                <p>Videos Edited</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-smile-beam fa-3x text-success mb-3"></i>
                <h2 class="timer" data-to="1500" data-speed="2000">0</h2>
                <p>Satisfied Clients</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-award fa-3x text-warning mb-3"></i>
                <h2 class="timer" data-to="100" data-speed="2000">0</h2>
                <p>Industry Awards</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-rocket fa-3x text-danger mb-3"></i>
                <h2 class="timer" data-to="300" data-speed="2000">0</h2>
                <p>Projects Completed</p>
            </div>
        </div>

        <!-- Section 5: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Elevate Your Videos?</h4>
                <p>Contact us today to learn how our video editing services can turn your footage into a polished masterpiece.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
