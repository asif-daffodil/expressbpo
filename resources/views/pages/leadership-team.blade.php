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
    <div class="container my-4" style="text-align: justify">
        <div class="row py-5">
            <div class="col-md-4 wow fadeInLeft">
                <h5 class="text-blue">Guided by experience driven by passion</h5>
                <h1>Leadership Team</h1>
            </div>
            <div class="col-md-8 wow fadeInRight">
                <p>
                    At NEXUSBPO LTD, we are pioneering the future of business process outsourcing with a focus on excellence
                    and
                    innovation. Established under the Bangladeshi Partnership Act of 1994, our company is dedicated to
                    delivering comprehensive outsourcing solutions that drive operational efficiency and business growth.
                </p>
                <p>
                    Our core mission is to provide customized, high-quality services that cater to the diverse needs of
                    businesses around the globe. From customer support and data management to back-office operations, our
                    expert team utilizes cutting-edge technology to deliver solutions that align with your strategic
                    objectives.
                </p>
                <p>
                    We believe that every business is unique, and our approach reflects this. By collaborating closely with
                    our clients, we tailor our services to meet your specific requirements and help you achieve your
                    business goals. At NEXUSBPO LTD, we are committed to fostering long-term partnerships built on trust,
                    reliability, and exceptional service.
                </p>
                <p>
                    Discover the advantage of partnering with NEXUSBPO LTD and experience the benefits of efficient,
                    scalable outsourcing solutions designed to propel your business forward.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInLeft">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/manuruzzaman.jpg') }}"
                    class="img-thumbnail p-3" alt="...">
            </div>
            <div class="col-md-8 wow fadeInRight">
                <div class="card-body">
                    <h3 class="card-title">Mohammad Maniruzzaman</h3>
                    <p class="card-text small fst-italic text-muted">Chief Executive Officer</p>
                    <p class="card-text">
                        Mohammad Maniruzzaman serves as the CEO of NEXUSBPO. He began his journey as a young and
                        ambitious
                        individual with a passion for accounting and taxes. Through his dedication and hard work,
                        Mohammad
                        transformed a small firm into one of the leading outsourced accounting and tax companies. He
                        manages
                        numerous medium and large-scale assignments for finance and debt syndication for clients
                        based
                        in both
                        Canada and Bangladesh.
                    </p>
                    <p class="card-text">
                        Beyond his primary role, Mohammad is instrumental in shaping the strategic direction of
                        NEXUSBPO. He
                        is deeply involved in innovating business processes, enhancing client relationships, and
                        driving
                        the
                        company's growth. His leadership style focuses on fostering a collaborative environment
                        where
                        employees
                        are encouraged to excel and deliver exceptional results.
                    </p>
                    {{-- <p>
                                                    <i class="fas fa-phone"></i> +1613-668-7785
                                                    <i class="fas fa-envelope"></i> ceo@Nexusbpo.com/
                                                </p> --}}
                    <ul class="nav d-flex flex-column">
                        <li><i class="fas fa-phone"></i> +1613-668-7785</li>
                        <li><i class="fas fa-envelope"></i> ceo@Nexusbpo.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-4 wow fadeInLeft">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/Aoulad.jpg') }}"
                    class="img-thumbnail p-3" alt="...">
            </div>
            <div class="col-md-8 wow fadeInRight">
                <div class="card-body">
                    <h3 class="card-title">Mohammad Aoulad Hossain</h3>
                    <p class="card-text small fst-italic text-muted">Managing Director</p>
                    <p class="card-text">
                        Mohammad Aoulad Hossain serves as the Managing Director of Nexusbpo. He started his journey with a
                        strong drive to make a significant impact in the field of accounting and taxes. Through relentless
                        effort and strategic vision, Mohammad Aoulad transformed a modest operation into one of the leading
                        outsourced accounting and tax firms. He is responsible for overseeing numerous key assignments,
                        including finance and debt syndication for clients based in Canada and Bangladesh.
                    </p>
                    <p class="card-text">
                        As the Managing Director, Mohammad Aoulad plays a crucial role in setting the strategic direction of
                        NEXUSBPO. His work focuses on business innovation, optimizing client relationships, and
                        spearheading the company's growth. His leadership is characterized by a commitment to fostering a
                        collaborative environment where team members are empowered to excel and deliver outstanding results.
                    </p>
                    <ul class="nav d-flex flex-column">
                        <li><i class="fas fa-phone"></i> +8801879-747459</li>
                        <li><i class="fas fa-envelope"></i> md@mynexusbpo.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <x-expbpo.home.whyChooseUs />
@endsection
