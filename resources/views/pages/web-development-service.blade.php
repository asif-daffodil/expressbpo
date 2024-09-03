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
    <div class="text-center mb-5 wow fadeInUp">
        <h2 class="wow fadeInDown">Our Web Development Services</h2>
        <p class="lead wow fadeInUp">We offer a range of web development services to meet your business needs.</p>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4 wow fadeInLeft">
            <div class="service-box p-4 text-center border rounded wow zoomIn">
                <div class="icon-box mb-3">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h5>Custom Website Development</h5>
                <p>We build custom websites tailored to your business needs, ensuring a unique online presence that stands out.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4 wow fadeInDown">
            <div class="service-box p-4 text-center border rounded wow zoomIn" data-wow-delay="0.2s">
                <div class="icon-box mb-3">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h5>Responsive Design</h5>
                <p>Our responsive designs ensure your website looks great on all devices, from desktops to smartphones.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4 wow fadeInRight">
            <div class="service-box p-4 text-center border rounded wow zoomIn" data-wow-delay="0.4s">
                <div class="icon-box mb-3">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h5>E-Commerce Solutions</h5>
                <p>We provide robust e-commerce solutions that drive sales and provide a seamless shopping experience for your customers.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="service-box p-4 text-center border rounded wow fadeInLeft">
                <div class="icon-box mb-3">
                    <i class="fas fa-code"></i>
                </div>
                <h5>Web Application Development</h5>
                <p>Develop powerful web applications that streamline your business processes and provide better user engagement.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="service-box p-4 text-center border rounded wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon-box mb-3">
                    <i class="fas fa-search"></i>
                </div>
                <h5>SEO Optimization</h5>
                <p>Our SEO optimization services help your website rank higher in search results, driving more traffic to your site.</p>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="service-box p-4 text-center border rounded wow fadeInRight" data-wow-delay="0.4s">
                <div class="icon-box mb-3">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <h5>Cloud Integration</h5>
                <p>We integrate your website with cloud-based services, providing scalable and secure solutions for your business.</p>
            </div>
        </div>
    </div>
</div>
@endsection
