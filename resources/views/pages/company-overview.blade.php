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
            <div class="col-md-8 wow fadeInRight">
                MyNexusBPO is a leading outsourced accounting, and tax service provider. To address the growing outsourcing
                needs of small & medium as well as mid-market businesses, we provide end-to-end tax and accounting services
                as a one stop solution for our clients. With years of experience, knowledge, and integrity, we become
                reliable extensions of our clients’ offices, so they can focus on their core competencies. Our team of 475+
                professionals including certified public accountants, chartered accountants, and staff accountants make this
                possible.
            </div>
        </div>
    </div>
    <x-expbpo.home.whyChooseUs />
@endsection
