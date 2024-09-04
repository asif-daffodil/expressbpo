@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}" alt="Bookkeeping Services"
                    class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Section 1: Introduction -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-book fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Comprehensive Bookkeeping Services</h2>
                <p>Maintain accurate financial records and stay on top of your business finances with our professional bookkeeping services. We handle everything from recording transactions to preparing financial reports, allowing you to focus on growing your business.</p>
            </div>
        </div>

        <!-- Section 2: Key Services -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-3 text-center">
                <i class="fas fa-file-invoice-dollar fa-4x text-success mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Transaction Recording</h5>
                        <p class="card-text">Accurately record all your business transactions, ensuring your books are always up-to-date.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-chart-pie fa-4x text-warning mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Financial Reporting</h5>
                        <p class="card-text">Generate essential financial reports that provide insights into your business’s performance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-receipt fa-4x text-info mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Expense Tracking</h5>
                        <p class="card-text">Keep track of all business expenses, ensuring every dollar is accounted for.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <i class="fas fa-balance-scale fa-4x text-danger mb-3"></i>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Account Reconciliation</h5>
                        <p class="card-text">Regularly reconcile your accounts to ensure consistency between your records and bank statements.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Why Choose Our Bookkeeping Services? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/bookkeeping-service.jpg') }}" alt="Bookkeeping Service"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our Bookkeeping Services?</h3>
                    <p><i class="fas fa-check-circle text-success me-2"></i><strong>Accuracy & Precision:</strong> We ensure every transaction is recorded accurately to maintain the integrity of your financial records.</p>
                    <p><i class="fas fa-clock text-warning me-2"></i><strong>Timely Reports:</strong> Receive timely financial reports that help you make informed business decisions.</p>
                    <p><i class="fas fa-lock text-info me-2"></i><strong>Confidentiality:</strong> Your financial information is handled with the utmost confidentiality and security.</p>
                    <p><i class="fas fa-thumbs-up text-primary me-2"></i><strong>Client Satisfaction:</strong> We are committed to delivering services that exceed your expectations, ensuring your satisfaction.</p>
                </div>
            </div>
        </div>

        <!-- Section 4: CountUp Section -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-3">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h2 class="timer" data-to="1200" data-speed="2000">0</h2>
                <p>Clients Served</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-file-invoice fa-3x text-success mb-3"></i>
                <h2 class="timer" data-to="5000" data-speed="2000">0</h2>
                <p>Transactions Processed</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-chart-bar fa-3x text-warning mb-3"></i>
                <h2 class="timer" data-to="1500" data-speed="2000">0</h2>
                <p>Reports Generated</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-award fa-3x text-danger mb-3"></i>
                <h2 class="timer" data-to="100" data-speed="2000">0</h2>
                <p>Awards Won</p>
            </div>
        </div>

        <!-- Section 5: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Streamline Your Finances?</h4>
                <p>Contact us today to learn how our bookkeeping services can help you maintain accurate and up-to-date financial records.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
