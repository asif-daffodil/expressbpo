@extends('layouts.express')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 px-0">
            <img src="{{ asset('images/office.jpg') }}" alt="" class="img-fluid w-100"
                style="height: 50vh; object-fit: cover">
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="text-center mb-5 wow fadeIn">
        <h1 class="display-4">Website Maintenance Services</h1>
        <p class="lead">Ensuring your website is always running smoothly, securely, and efficiently.</p>
    </div>

    <div class="row text-center g-4 wow fadeInUp">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Security Monitoring</h5>
                    <p class="card-text">Continuous monitoring and protection to keep your website secure from threats and vulnerabilities.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-sync-alt fa-3x text-success mb-3"></i>
                    <h5 class="card-title">Regular Updates</h5>
                    <p class="card-text">We keep your website up-to-date with the latest software, plugins, and patches to ensure optimal performance.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-tachometer-alt fa-3x text-warning mb-3"></i>
                    <h5 class="card-title">Performance Optimization</h5>
                    <p class="card-text">Ongoing optimization to ensure your website loads quickly and runs efficiently, providing the best user experience.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center g-4 mt-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-bug fa-3x text-danger mb-3"></i>
                    <h5 class="card-title">Bug Fixes &amp; Troubleshooting</h5>
                    <p class="card-text">Quick resolution of issues and bugs to minimize downtime and keep your website running smoothly.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-database fa-3x text-info mb-3"></i>
                    <h5 class="card-title">Backup &amp; Recovery</h5>
                    <p class="card-text">Regular backups and efficient recovery solutions to protect your data and ensure business continuity.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <i class="fas fa-headset fa-3x text-secondary mb-3"></i>
                    <h5 class="card-title">24/7 Support</h5>
                    <p class="card-text">Our team is available around the clock to assist with any issues or questions you may have.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.4s">
        <p class="lead">Interested in our services? <a href="contact-us.html" class="btn btn-primary">Contact Us Today</a></p>
    </div>
</div>
@endsection
