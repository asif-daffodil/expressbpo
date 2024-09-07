@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}"
                    alt="Accounts Receivable Services" class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <!-- Section 1: Introduction -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-8 offset-md-2 text-center">
                <i class="fas fa-cash-register fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Accounts Receivable Services</h2>
                <p>Maximize your cash flow and reduce outstanding receivables with our comprehensive accounts receivable
                    management services. We help you track invoices, follow up with customers, and ensure timely payments.
                </p>
            </div>
        </div>

        <!-- Section 2: Key Services with Tabs -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="arServiceTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="invoice-tab" data-bs-toggle="tab" data-bs-target="#invoice"
                            type="button" role="tab" aria-controls="invoice" aria-selected="true">Invoice
                            Management</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="collection-tab" data-bs-toggle="tab" data-bs-target="#collection"
                            type="button" role="tab" aria-controls="collection" aria-selected="false">Collection
                            Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dispute-tab" data-bs-toggle="tab" data-bs-target="#dispute"
                            type="button" role="tab" aria-controls="dispute" aria-selected="false">Dispute
                            Resolution</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reporting-tab" data-bs-toggle="tab" data-bs-target="#reporting"
                            type="button" role="tab" aria-controls="reporting" aria-selected="false">Reporting &
                            Analytics</button>
                    </li>
                </ul>
                <div class="tab-content" id="arServiceTabContent">
                    <div class="tab-pane fade show active" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                        <p class="mt-3">Efficiently manage all outgoing invoices, ensuring accurate and timely billing to
                            customers. We help track outstanding invoices and automate follow-ups.</p>
                    </div>
                    <div class="tab-pane fade" id="collection" role="tabpanel" aria-labelledby="collection-tab">
                        <p class="mt-3">We offer a complete range of collection services, helping you recover overdue
                            payments while maintaining positive relationships with your customers.</p>
                    </div>
                    <div class="tab-pane fade" id="dispute" role="tabpanel" aria-labelledby="dispute-tab">
                        <p class="mt-3">Resolve payment disputes quickly and professionally. We manage the entire dispute
                            process to ensure that misunderstandings are cleared and payments are received on time.</p>
                    </div>
                    <div class="tab-pane fade" id="reporting" role="tabpanel" aria-labelledby="reporting-tab">
                        <p class="mt-3">Access detailed reports and analytics on your accounts receivable processes,
                            helping you gain insights into cash flow trends and performance metrics.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Why Choose Our Accounts Receivable Services? -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/accounting-services.jpg') }}" alt="Accounts Receivable Service"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our Accounts Receivable Services?</h3>
                    <p><i class="fas fa-dollar-sign text-success me-2"></i><strong>Cash Flow Improvement:</strong> We help
                        reduce outstanding receivables and speed up payment cycles, improving your cash flow.</p>
                    <p><i class="fas fa-file-invoice-dollar text-warning me-2"></i><strong>Comprehensive
                            Management:</strong> Our end-to-end service includes invoicing, collections, dispute resolution,
                        and reporting.</p>
                    <p><i class="fas fa-users text-info me-2"></i><strong>Customer Relationship Focus:</strong> We ensure
                        that your customers are treated with respect, maintaining healthy relationships while collecting
                        payments.</p>
                    <p><i class="fas fa-chart-pie text-primary me-2"></i><strong>Data-Driven Strategies:</strong> Leverage
                        our advanced analytics to make informed decisions and optimize your accounts receivable processes.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section 4: Accordion FAQs -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2">
                <h4 class="mb-4 text-center">Frequently Asked Questions</h4>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                How do you manage overdue payments?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We use a structured follow-up system, sending reminders to customers and, if necessary,
                                initiating collections to ensure timely payments.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                What is your process for dispute resolution?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We handle disputes by communicating with the customer, understanding the issue, and working
                                towards an amicable resolution to ensure payments are received without harming the
                                relationship.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Can you provide custom reports?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we provide detailed, customizable reports on accounts receivable activities to give you
                                insights into your receivables performance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5: CountUp Section -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-3">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h2 class="timer" data-to="1200" data-speed="2000">0</h2>
                <p>Clients Served</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-file-invoice-dollar fa-3x text-success mb-3"></i>
                <h2 class="timer" data-to="7500" data-speed="2000">0</h2>
                <p>Invoices Processed</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-chart-line fa-3x text-warning mb-3"></i>
                <h2 class="timer" data-to="95" data-speed="2000">0%</h2>
                <p>Payment Collection Rate</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-award fa-3x text-danger mb-3"></i>
                <h2 class="timer" data-to="200" data-speed="2000">0</h2>
                <p>Awards Won</p>
            </div>
        </div>

        <!-- Section 6: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="1s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Streamline Your Accounts Receivable Process Today!</h4>
                <p>Reach out to us to optimize your receivables, improve cash flow, and maintain positive customer
                    relationships.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
