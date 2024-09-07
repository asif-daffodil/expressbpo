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
                <i class="fas fa-calculator fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Payroll Management Services</h2>
                <p>Managing payroll is a crucial task for any business. Our comprehensive Payroll Management solutions
                    ensure that your employees are paid accurately and on time while complying with tax laws and
                    regulations.</p>
            </div>
        </div>

        <!-- Section 2: Key Benefits of Our Payroll Services -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Key Benefits of Our Payroll Services</h3>
                    <p><i class="fas fa-check-circle text-success me-2"></i><strong>Accuracy and Compliance:</strong> We
                        ensure that all payroll processes are accurate and compliant with local tax regulations, avoiding
                        penalties and errors.</p>
                    <p><i class="fas fa-user-shield text-warning me-2"></i><strong>Data Security:</strong> We prioritize the
                        security of sensitive payroll data, ensuring that your employees’ information is always protected.
                    </p>
                    <p><i class="fas fa-clock text-info me-2"></i><strong>Timely Payments:</strong> Our system ensures
                        employees are paid on time, every time, helping you maintain employee satisfaction and avoid any
                        payroll delays.</p>
                    <p><i class="fas fa-handshake text-primary me-2"></i><strong>Customizable Solutions:</strong> We offer
                        tailored payroll solutions that fit your company’s needs, including benefits administration and tax
                        filings.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/for-us-based-wireless-companies.png') }}" alt="Payroll Management"
                    class="img-fluid rounded shadow">
            </div>
        </div>

        <!-- Section 3: Why Choose Our Payroll Management? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/for-us-based-cpa-firms.webp') }}" alt="Why Choose Us"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our Payroll Management?</h3>
                    <p><i class="fas fa-cogs text-success me-2"></i><strong>Efficient Processes:</strong> Our payroll system
                        automates the entire payroll process, reducing manual efforts and improving efficiency.</p>
                    <p><i class="fas fa-sync-alt text-warning me-2"></i><strong>Integrated Solutions:</strong> Our payroll
                        management integrates with accounting, HR, and time-tracking systems for a seamless experience.</p>
                    <p><i class="fas fa-briefcase text-info me-2"></i><strong>Experienced Professionals:</strong> Our team
                        has extensive expertise in payroll processing and can handle even the most complex payroll needs.
                    </p>
                    <p><i class="fas fa-laptop-house text-primary me-2"></i><strong>Flexible Options:</strong> Whether you
                        have a small team or a large organization, we provide scalable payroll solutions that adapt to your
                        growth.</p>
                </div>
            </div>
        </div>

        <!-- Section 4: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Let Us Handle Your Payroll with Confidence!</h4>
                <p>Contact us today to find out how our Payroll Management services can save you time and ensure compliance
                    with all payroll regulations.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
