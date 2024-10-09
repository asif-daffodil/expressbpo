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
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-md-4 wow fadeInLeft">
                <h5>Our Company Overview</h5>
                <h1>Excellence through integrity</h1>
            </div>
            <div class="col-md-8 wow fadeInRight" style="text-align: justify">
                NEXUSBPO is a premier provider of IT and accounting services, offering comprehensive solutions to meet the
                growing outsourcing demands of small, medium, and mid-market businesses. We deliver a seamless, end-to-end
                experience in both the IT and accounting fields, allowing our clients to focus on their core operations
                while we handle their technological and financial needs. Our team of over 475 skilled professionals,
                including IT experts, certified public accountants, and chartered accountants, brings extensive experience
                and integrity to every project, making us a trusted extension of our clients' businesses.
            </div>
        </div>
    </div>
    <x-expbpo.home.whyChooseUs />
@endsection
