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
        <div class="text-center mb-5 wow fadeInUp">
            <h2>Why Choose Us</h2>
            <p class="lead">We will keep you on the right track</p>
            <p class="text-muted">At MyNexusBpo Ltd, we understand the importance of having reliable and accurate financial
                information to make informed business decisions. By choosing our outsourced accounting and tax preparation
                services, you can benefit from our years of experience and expertise in providing tailored financial
                solutions that are designed to optimize your business operations.</p>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4 wow fadeInLeft">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">01. Expertise</h5>
                        <p class="card-text">Our team of experienced accounting and tax professionals have the working
                            industry knowledge and expertise to handle all your accounting needs, from bookkeeping to tax
                            and compliance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 wow fadeInDown">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">02. Cost Savings</h5>
                        <p class="card-text">By outsourcing your accounting and tax services to us, you can save time and
                            money. You don’t have to worry about hiring, training staff and worry about employee turnover.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 wow fadeInRight">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">03. Scalability</h5>
                        <p class="card-text">Our outsourced accounting and tax services are flexible and scalable to meet
                            your changing business needs. Whether you’re growing your organization, expanding to new
                            markets, or restructuring, our services match your requirements.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4 wow fadeInLeft">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">04. Quality Control</h5>
                        <p class="card-text">We have a rigorous quality control process in place to ensure that your
                            financial data and records are error-free and comply with all standard operating procedures and
                            regulations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 wow fadeInUp">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">05. Data Security</h5>
                        <p class="card-text">Your financial data is critical, and we will keep it highly secure. We comply
                            with industry standards and regulations to maintain the privacy and confidentiality of your
                            information.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 wow fadeInRight">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">06. Dedicated Staff</h5>
                        <p class="card-text">Our dedicated staff remains attuned to your project, providing personalized
                            attention and high-quality service delivery, meaning it's sure to exceed your expectations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
