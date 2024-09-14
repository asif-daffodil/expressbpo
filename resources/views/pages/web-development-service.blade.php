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
        <!-- Section 1: Image Left, Text Right -->
        <div class="row align-items-center mb-5 py-5 wow fadeInUp">
            <div class="col-md-6">
                <img src="{{ asset('images/custom-web-development.jpg') }}" alt="Custom Web Development"
                    class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Custom Web Development</h2>
                <p>We provide tailor-made web development solutions that cater to your specific business needs. Our team
                    builds robust and scalable web applications that integrate seamlessly with your business processes and
                    improve overall efficiency.</p>
            </div>
        </div>

        <!-- Section 2: Image Right, Text Left -->
        <div class="row align-items-center mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/ecommerce-development.jpg') }}" alt="Ecommerce Development"
                    class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="mb-3">Ecommerce Development</h2>
                <p>Our ecommerce development services empower you to set up an online store with ease, complete with secure
                    payment gateways, intuitive user interfaces, and seamless checkout processes to maximize your conversion
                    rates.</p>
            </div>
        </div>

        <!-- Section 3: Image Left, Text Right -->
        <div class="row align-items-center mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/responsive-web-design.jpg') }}" alt="Responsive Web Design"
                    class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Responsive Web Design</h2>
                <p>Our responsive web design service ensures that your website adapts seamlessly to all screen sizes, from
                    mobile devices to large desktops. Enhance user experience and improve search engine rankings with our
                    cutting-edge design solutions.</p>
            </div>
        </div>

        <!-- Section 4: Image Right, Text Left -->
        <div class="row align-items-center mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/cms-development.jpg') }}" alt="CMS Development"
                    class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6 order-md-1">
                <h2 class="mb-3">CMS Development</h2>
                <p>We specialize in developing user-friendly content management systems (CMS) that allow you to easily
                    update and manage your website’s content. From WordPress to custom CMS solutions, we provide platforms
                    that simplify web management.</p>
            </div>
        </div>

        <!-- Section 5: Image Left, Text Right -->
        <div class="row align-items-center mb-5 py-5 wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-6">
                <img src="{{ asset('images/Website-Maintenance-Support.jpg') }}" alt="Website Maintenance"
                    class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Website Maintenance & Support</h2>
                <p>Our team offers ongoing website maintenance and support services to ensure that your site runs smoothly
                    and is always up-to-date. We handle everything from regular updates and backups to security checks and
                    performance optimizations.</p>
            </div>
        </div>
    </div>

    <!-- Our Team Section -->
<div class="container my-5">
    <div class="row text-center mb-5 wow fadeInUp">
        <div class="col-md-12">
            <h2>Meet Our Team</h2>
            <p>Our team of expert developers is dedicated to delivering top-notch web solutions.</p>
        </div>
    </div>
    
    <div class="row text-center wow fadeInUp" data-wow-delay="0.2s">
        <!-- Developer 1 -->
        <div class="col-md-3">
            <img src="{{ asset('images/asif-abir.webp') }}" alt="Developer 1" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover">
            <h5>Asif Abir</h5>
            <p>Lead Developer</p>
            <p>Asif is a full-stack developer with 10+ years of experience in building scalable web applications.</p>
        </div>
        
        <!-- Developer 2 -->
        <div class="col-md-3">
            <img src="{{ asset('images/developer2.jpg') }}" alt="Developer 2" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
            <h5>Jane Smith</h5>
            <p>UI/UX Designer</p>
            <p>Jane is passionate about creating beautiful and intuitive user experiences that drive engagement.</p>
        </div>
        
        <!-- Developer 3 -->
        <div class="col-md-3">
            <img src="{{ asset('images/developer3.jpg') }}" alt="Developer 3" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
            <h5>Mike Johnson</h5>
            <p>Backend Developer</p>
            <p>Mike specializes in backend development, ensuring that your applications run smoothly and securely.</p>
        </div>
        
        <!-- Developer 4 -->
        <div class="col-md-3">
            <img src="{{ asset('images/developer4.jpg') }}" alt="Developer 4" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
            <h5>Emily Davis</h5>
            <p>Frontend Developer</p>
            <p>Emily focuses on responsive design and clean code, making sure your site looks great on all devices.</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <!-- Call to Action -->
    <div class="row text-center wow fadeInUp" data-wow-delay="1s">
        <div class="col-md-8 offset-md-2">
            <h4>Ready to Build or Revamp Your Website?</h4>
            <p>Contact us today to learn more about our web development services and how we can help your business
                succeed online.</p>
            <a href="#" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</div>

@endsection
