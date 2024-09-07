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
                <i class="fas fa-file-invoice-dollar fa-5x text-primary mb-3"></i>
                <h2 class="mb-3">Sales Tax Compliance Services</h2>
                <p>Ensure your business remains compliant with local and international sales tax laws. Our comprehensive
                    sales tax compliance services ensure your tax returns are filed accurately and on time, avoiding costly
                    penalties.</p>
            </div>
        </div>

        <!-- Section 2: Tabs -->
        <div class="row mb-5 wow fadeInUp">
            <div class="col-md-12">
                <h3 class="mb-4">Our Sales Tax Compliance Services</h3>
                <ul class="nav nav-tabs" id="salesTaxTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="registration-tab" data-bs-toggle="tab" href="#registration"
                            role="tab" aria-controls="registration" aria-selected="true">Tax Registration</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="filing-tab" data-bs-toggle="tab" href="#filing" role="tab"
                            aria-controls="filing" aria-selected="false">Tax Filing</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="nexus-tab" data-bs-toggle="tab" href="#nexus" role="tab"
                            aria-controls="nexus" aria-selected="false">Nexus Determination</a>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="salesTaxTabContent">
                    <!-- Tab 1: Tax Registration -->
                    <div class="tab-pane fade show active" id="registration" role="tabpanel"
                        aria-labelledby="registration-tab">
                        <p>We help your business get registered for sales tax in various jurisdictions. Our team ensures
                            compliance with state-specific regulations and helps manage complex sales tax requirements.</p>
                    </div>
                    <!-- Tab 2: Tax Filing -->
                    <div class="tab-pane fade" id="filing" role="tabpanel" aria-labelledby="filing-tab">
                        <p>We ensure timely and accurate filing of your sales tax returns, so your business can stay
                            compliant and avoid penalties. Our team handles multi-state returns and keeps you updated with
                            new tax rules.</p>
                    </div>
                    <!-- Tab 3: Nexus Determination -->
                    <div class="tab-pane fade" id="nexus" role="tabpanel" aria-labelledby="nexus-tab">
                        <p>Nexus determination is key for understanding where your business needs to collect and remit sales
                            tax. We help evaluate your business’s activities across states to ensure full compliance.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Accordion for FAQs -->
        <div class="row mb-5 py-5 wow fadeInUp">
            <div class="col-md-12">
                <h3 class="mb-4">Frequently Asked Questions</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOneHeading">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                What is the difference between sales tax and VAT?
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqOneHeading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sales tax is a consumption tax levied on the sale of goods and services, while VAT (Value
                                Added Tax) is a tax on the value added at each stage of production or distribution. The
                                rules and regulations vary by jurisdiction.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwoHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                Do I need to register for sales tax in multiple states?
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqTwoHeading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Depending on your business activities, you may be required to register for sales tax in
                                multiple states. This process is called "nexus," and it refers to the connection your
                                business has with a state that triggers a sales tax registration requirement.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqThreeHeading">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                How often do I need to file sales tax returns?
                            </button>
                        </h2>
                        <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqThreeHeading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The filing frequency depends on the state and the volume of your taxable sales. Some states
                                require monthly filings, while others may require quarterly or annual filings. We help
                                determine the right filing schedule for your business.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 4: CountUp Section (Bigger Style) -->
        <div id="counter-box" class="row mb-5 py-5 text-center wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-3">
                <i class="fas fa-users fa-4x text-primary mb-3"></i>
                <h2 class="timer display-4" data-to="2000" data-speed="2000">0</h2>
                <p>Clients Served</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-file-alt fa-4x text-success mb-3"></i>
                <h2 class="timer display-4" data-to="500" data-speed="2000">0</h2>
                <p>Returns Filed</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-globe fa-4x text-warning mb-3"></i>
                <h2 class="timer display-4" data-to="50" data-speed="2000">0</h2>
                <p>States Covered</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-check-circle fa-4x text-danger mb-3"></i>
                <h2 class="timer display-4" data-to="100%" data-speed="2000">0%</h2>
                <p>Compliance Rate</p>
            </div>
        </div>

        <!-- Section 5: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Let Us Handle Your Sales Tax Compliance!</h4>
                <p>Contact us today to find out how we can streamline your sales tax processes and keep you compliant in
                    every jurisdiction.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
