@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}" alt="SEO Services"
                    class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Section 1: Introduction -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-search fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">SEO Services</h2>
                <p>Enhance your online visibility and drive organic traffic to your website with our expert SEO services. We focus on delivering sustainable results through on-page and off-page optimization.</p>
            </div>
        </div>

        <!-- Section 2: Key Services -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-3 text-center">
                <i class="fas fa-code fa-4x text-success mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">On-Page SEO</h5>
                        <p class="card-text">Optimize your website's content and structure to improve its relevance and search engine friendliness.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-link fa-4x text-warning mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Off-Page SEO</h5>
                        <p class="card-text">Build high-quality backlinks and establish your site as an authority in your niche.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-mobile-alt fa-4x text-info mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Technical SEO</h5>
                        <p class="card-text">Ensure your website is fast, secure, and mobile-friendly to meet search engine standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-pen-fancy fa-4x text-danger mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Content Optimization</h5>
                        <p class="card-text">Create and optimize content that engages users and ranks well on search engines.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Why Choose Our SEO Services? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/for-us-based-fundmanagers-and-vc-firms.jpg') }}" alt="SEO Strategy"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our SEO Services?</h3>
                    <p><i class="fas fa-tachometer-alt text-success me-2"></i><strong>Proven Results:</strong> Our SEO strategies have consistently delivered top rankings and increased traffic for our clients.</p>
                    <p><i class="fas fa-cogs text-warning me-2"></i><strong>Customized Solutions:</strong> We tailor our SEO plans to meet your unique business needs and goals.</p>
                    <p><i class="fas fa-chart-line text-info me-2"></i><strong>Comprehensive Approach:</strong> We cover all aspects of SEO, from technical optimization to content creation.</p>
                    <p><i class="fas fa-user-shield text-primary me-2"></i><strong>Ethical Practices:</strong> We adhere to the best practices and avoid black-hat techniques that could harm your site.</p>
                </div>
            </div>
        </div>

        <!-- Section 4: CountUp Section -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-3">
                <i class="fas fa-globe fa-3x text-primary mb-3"></i>
                <h2 class="timer" data-to="1200" data-speed="2000">0</h2>
                <p>Keywords Ranked</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-traffic-light fa-3x text-success mb-3"></i>
                <h2 class="timer" data-to="250%" data-speed="2000">0%</h2>
                <p>Traffic Increase</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-users fa-3x text-warning mb-3"></i>
                <h2 class="timer" data-to="1000" data-speed="2000">0</h2>
                <p>Satisfied Clients</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-award fa-3x text-danger mb-3"></i>
                <h2 class="timer" data-to="75" data-speed="2000">0</h2>
                <p>Industry Awards</p>
            </div>
        </div>

        <!-- Section 5: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Dominate Search Rankings?</h4>
                <p>Contact us today to learn how our SEO services can help you achieve long-term success.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
