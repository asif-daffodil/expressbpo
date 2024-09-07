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
                <i class="fas fa-chart-line fa-5x text-primary mb-3"></i>
                <h2 class="mb-3">Reporting Services</h2>
                <p>Unlock the power of data with our comprehensive reporting services. We help businesses stay informed with
                    precise, timely, and customizable reports, empowering you to make data-driven decisions for growth and
                    success.</p>
            </div>
        </div>

        <!-- Section 2: Why Choose Our Reporting Services (Larger) -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-6">
                <img src="{{ asset('images/for-us-based-ecommerce-companies.webp') }}"
                    alt="Why Choose Our Reporting Services" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2 class="mb-4">Why Choose Our Reporting Services?</h2>
                    <p>Our reporting services provide crucial insights into your business performance. Here’s why clients
                        trust us:</p>
                    <ul style="font-size: 1.2rem;">
                        <li><i class="fas fa-check-circle text-success me-2"></i><strong>Customizable Reports:</strong>
                            Tailored to your specific business needs.</li>
                        <li><i class="fas fa-chart-bar text-warning me-2"></i><strong>Real-Time Data:</strong> Stay informed
                            with timely reports.</li>
                        <li><i class="fas fa-lightbulb text-info me-2"></i><strong>Advanced Analytics:</strong> Leverage
                            data to spot trends and opportunities.</li>
                        <li><i class="fas fa-file-alt text-primary me-2"></i><strong>Comprehensive Reporting:</strong>
                            Easy-to-understand reports for smarter decisions.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Section 3: Tabs Section (Larger) -->
        <div class="row mb-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <h2 class="mb-4">Our Reporting Solutions</h2>
                <ul class="nav nav-tabs" id="reportingTab" role="tablist" style="font-size: 1.25rem;">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="financial-tab" data-bs-toggle="tab" href="#financial" role="tab"
                            aria-controls="financial" aria-selected="true">Financial Reports</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="operational-tab" data-bs-toggle="tab" href="#operational" role="tab"
                            aria-controls="operational" aria-selected="false">Operational Reports</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="compliance-tab" data-bs-toggle="tab" href="#compliance" role="tab"
                            aria-controls="compliance" aria-selected="false">Compliance Reports</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="reportingTabContent">
                    <!-- Tab 1: Financial Reports -->
                    <div class="tab-pane fade show active" id="financial" role="tabpanel" aria-labelledby="financial-tab">
                        <p style="font-size: 1.25rem;">Our financial reports provide a clear and concise overview of your
                            company’s financial health, including balance sheets, profit & loss statements, and cash flow
                            reports.</p>
                    </div>
                    <!-- Tab 2: Operational Reports -->
                    <div class="tab-pane fade" id="operational" role="tabpanel" aria-labelledby="operational-tab">
                        <p style="font-size: 1.25rem;">Operational reports track and analyze your day-to-day activities,
                            helping you optimize processes, increase efficiency, and improve overall performance.</p>
                    </div>
                    <!-- Tab 3: Compliance Reports -->
                    <div class="tab-pane fade" id="compliance" role="tabpanel" aria-labelledby="compliance-tab">
                        <p style="font-size: 1.25rem;">Ensure regulatory compliance with our comprehensive reports designed
                            to meet industry standards and governmental requirements. Stay ahead of compliance issues with
                            timely, accurate reporting.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="mb-4">Frequently Asked Questions</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOneHeading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                What types of reports can you generate?
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqOneHeading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We can generate financial, operational, compliance, inventory, and custom reports based on
                                your business requirements.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwoHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                How often can we receive reports?
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqTwoHeading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Reports can be delivered daily, weekly, monthly, or quarterly depending on your specific
                                needs. We also offer real-time reporting solutions.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqThreeHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                Are the reports customizable?
                            </button>
                        </h2>
                        <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqThreeHeading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer fully customizable reports tailored to your business metrics, KPIs, and
                                industry requirements.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5: CountUp Section (Bigger Style) -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-3">
                <i class="fas fa-chart-bar fa-4x text-primary mb-3"></i>
                <h2 class="timer display-4" data-to="3000" data-speed="2000">0</h2>
                <p>Reports Generated</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-clipboard-check fa-4x text-success mb-3"></i>
                <h2 class="timer display-4" data-to="500" data-speed="2000">0</h2>
                <p>Compliance Reports</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-industry fa-4x text-warning mb-3"></i>
                <h2 class="timer display-4" data-to="120" data-speed="2000">0</h2>
                <p>Industries Served</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-globe fa-4x text-danger mb-3"></i>
                <h2 class="timer display-4" data-to="20" data-speed="2000">0</h2>
                <p>Countries Reached</p>
            </div>
        </div>

        <!-- Section 6: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Ready to Leverage Data for Business Success?</h4>
                <p>Contact us today to discover how our reporting services can drive growth and ensure compliance for your
                    business.</p>
                <a href="#" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
