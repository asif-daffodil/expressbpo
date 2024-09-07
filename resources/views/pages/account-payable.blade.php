@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}"
                    alt="Accounts Payable Services" class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Section 1: Introduction -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-file-invoice fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Accounts Payable Services</h2>
                <p>Streamline your payment processes and manage your financial obligations efficiently with our expert
                    accounts payable services. We help you maintain cash flow, manage vendor relationships, and ensure
                    accurate and timely payments.</p>
            </div>
        </div>

        <!-- Section 2: Key Services -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-3 text-center">
                <i class="fas fa-receipt fa-4x text-success mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Invoice Management</h5>
                        <p class="card-text">Efficiently handle all incoming invoices, ensuring timely approval and payment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-wallet fa-4x text-warning mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Payment Processing</h5>
                        <p class="card-text">Manage vendor payments and ensure accurate, on-time processing of all financial
                            obligations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-user-tie fa-4x text-info mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Vendor Management</h5>
                        <p class="card-text">Build strong relationships with your vendors by ensuring timely payments and
                            effective communication.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-chart-line fa-4x text-danger mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Cash Flow Optimization</h5>
                        <p class="card-text">Enhance your cash flow by optimizing your accounts payable processes and
                            improving payment cycles.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Why Choose Our Accounts Payable Services? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/accounting-services.jpg') }}" alt="Accounts Payable Service"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our Accounts Payable Services?</h3>
                    <p><i class="fas fa-check-circle text-success me-2"></i><strong>Accurate Tracking:</strong> We ensure
                        every invoice and payment is properly recorded, giving you full visibility into your payables.</p>
                    <p><i class="fas fa-clock text-warning me-2"></i><strong>Timely Payments:</strong> Ensure payments are
                        made on time to maintain strong vendor relationships and avoid late fees.</p>
                    <p><i class="fas fa-shield-alt text-info me-2"></i><strong>Risk Reduction:</strong> Our secure processes
                        reduce the risk of fraud and errors in your payment processes.</p>
                    <p><i class="fas fa-cogs text-primary me-2"></i><strong>Customizable Solutions:</strong> We tailor our
                        services to meet the specific needs of your business, no matter the size or industry.</p>
                </div>
            </div>
        </div>

        <!-- Section 4: CountUp Section -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-3">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h2 class="timer" data-to="1000" data-speed="2000">0</h2>
                <p>Clients Served</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-file-invoice fa-3x text-success mb-3"></i>
                <h2 class="timer" data-to="8000" data-speed="2000">0</h2>
                <p>Invoices Processed</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-coins fa-3x text-warning mb-3"></i>
                <h2 class="timer" data-to="5000" data-speed="2000">0</h2>
                <p>Payments Made</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-award fa-3x text-danger mb-3"></i>
                <h2 class="timer" data-to="150" data-speed="2000">0</h2>
                <p>Awards Won</p>
            </div>
        </div>

        <!-- Section 5: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Optimize Your Accounts Payable?</h4>
                <p>Contact us today to streamline your accounts payable processes and improve financial efficiency for your
                    business.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
