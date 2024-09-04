@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}" alt=""
                    class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Section 1: Introduction -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-bullhorn fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Digital Marketing Services</h2>
                <p>Boost your online presence and engage with your target audience through our comprehensive digital
                    marketing services. We help you build brand awareness, drive traffic, and increase conversions with
                    tailored strategies.</p>
            </div>
        </div>

        <!-- Section 2: Key Services -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-3 text-center">
                <i class="fas fa-search-dollar fa-4x text-success mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">SEO & SEM</h5>
                        <p class="card-text">Optimize your website for search engines and run targeted ad campaigns to
                            improve visibility and attract qualified leads.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-chart-pie fa-4x text-warning mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Content Marketing</h5>
                        <p class="card-text">Create and distribute valuable content to attract and engage your audience,
                            establishing your brand as a thought leader.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-share-alt fa-4x text-info mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Social Media Marketing</h5>
                        <p class="card-text">Engage with your audience on social platforms, build your community, and
                            enhance brand loyalty with targeted campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-envelope-open-text fa-4x text-danger mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Email Marketing</h5>
                        <p class="card-text">Deliver personalized messages to your audience, nurture leads, and boost
                            customer retention with effective email campaigns.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section 3: What Sets Our Digital Marketing Apart? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/for-us-based-cpa-firms.webp') }}" alt="Digital Marketing"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">What Sets Our Digital Marketing Apart?</h3>
                    <p><i class="fas fa-bullseye text-success me-2"></i><strong>Targeted Campaigns:</strong> We ensure your
                        message reaches the right audience at the right time, maximizing engagement and conversions.</p>
                    <p><i class="fas fa-lightbulb text-warning me-2"></i><strong>Innovative Strategies:</strong> Our team
                        stays ahead of market trends to craft strategies that keep you competitive.</p>
                    <p><i class="fas fa-chart-bar text-info me-2"></i><strong>Data-Driven Approach:</strong> We leverage
                        data to refine campaigns continuously, ensuring optimal performance and ROI.</p>
                    <p><i class="fas fa-hands-helping text-primary me-2"></i><strong>Collaborative Partnership:</strong> We
                        work closely with you to understand your business needs and drive growth.</p>
                </div>
            </div>
        </div>
        <!-- Section 4: CountUp Section -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-3">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h2 class="timer" data-to="1500" data-speed="2000">0</h2>
                <p>Clients Served</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-rocket fa-3x text-success mb-3"></i>
                <h2 class="timer" data-to="300" data-speed="2000">0</h2>
                <p>Projects Completed</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-chart-line fa-3x text-warning mb-3"></i>
                <h2 class="timer" data-to="200%" data-speed="2000">0%</h2>
                <p>Growth Rate</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-award fa-3x text-danger mb-3"></i>
                <h2 class="timer" data-to="50" data-speed="2000">0</h2>
                <p>Awards Won</p>
            </div>
        </div>


        <!-- Section 5: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Elevate Your Brand?</h4>
                <p>Contact us today to discover how our digital marketing services can drive growth and success for your
                    business.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />

@endsection
