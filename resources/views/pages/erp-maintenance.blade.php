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
        <div class="row mb-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-tools fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">ERP Maintenance & Support</h2>
                <p>Our comprehensive ERP maintenance services ensure your enterprise resource planning systems are always running smoothly. We offer proactive monitoring, timely updates, and expert support to keep your ERP systems at peak performance.</p>
            </div>
        </div>
    
        <!-- Section 2: Key Services -->
        <div class="row mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-4 text-center">
                <i class="fas fa-chart-line fa-4x text-success mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">System Monitoring & Optimization</h5>
                        <p class="card-text">Continuous monitoring to identify and resolve issues before they impact your operations, ensuring optimal performance of your ERP systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-sync-alt fa-4x text-warning mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Regular Updates & Patches</h5>
                        <p class="card-text">Timely application of updates and security patches to keep your ERP systems secure and up-to-date with the latest features.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-user-cog fa-4x text-info mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">User Training & Support</h5>
                        <p class="card-text">Ongoing training sessions and 24/7 support to help your team maximize the use of your ERP systems.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Section 3: Benefits of Our ERP Maintenance Service -->
        <div class="row mb-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-8 offset-md-2">
                <h3 class="text-center mb-4">Why Choose Our ERP Maintenance Services?</h3>
                <ul class="list-group">
                    <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i>Minimized downtime with proactive issue resolution.</li>
                    <li class="list-group-item"><i class="fas fa-shield-alt text-warning me-2"></i>Enhanced security with regular updates and patches.</li>
                    <li class="list-group-item"><i class="fas fa-tachometer-alt text-info me-2"></i>Improved system performance and reliability.</li>
                    <li class="list-group-item"><i class="fas fa-headset text-primary me-2"></i>Access to expert support and guidance.</li>
                </ul>
            </div>
        </div>
    
        <!-- Section 4: Call to Action -->
        <div class="row mb-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Optimize Your ERP Systems?</h4>
                <p>Contact us today to learn more about our ERP maintenance services and how we can help your business achieve greater efficiency and productivity.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>
    
    <x-expbpo.home.whyChooseUs />
@endsection
