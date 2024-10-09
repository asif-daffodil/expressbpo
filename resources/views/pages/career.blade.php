@extends('layouts.express')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 px-0">
                <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/office.jpg') }}" alt="career Services"
                    class="img-fluid w-100" style="height: 50vh; object-fit: cover">
            </div>
        </div>
    </div>
    <!-- Career Page Content -->
<div class="container my-5">
    <!-- Section 1: Intro -->
    <section id="intro">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Join Our Team</h2>
                <p class="text-center">At MyNexusBPO, we're always looking for talented individuals to join our growing team. While there are no current open positions, we welcome you to send your CV for future opportunities.</p>
            </div>
        </div>
    </section>

    <!-- Section 2: Current Positions -->
    <section id="current-positions" class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-4">Current Positions</h3>
                <p class="text-center">Currently, there are no open positions. However, if you feel you are a perfect fit for our team, we encourage you to apply by sending your CV to us directly.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: Send CV -->
    <section id="send-cv" class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-4">Send Your CV</h3>
                <p class="text-center">Even if no positions are open right now, we are always interested in hearing from talented individuals. Please send your CV to <a href="mailto:admin@mynexusbpo.com">admin@mynexusbpo.com</a>, and we will keep it on file for future opportunities.</p>
            </div>
        </div>
    </section>

    <!-- Section 4: Benefits of Working With Us -->
    <section id="benefits" class="mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-4">Why Work with MyNexusBPO?</h3>
                <ul class="list-unstyled text-center">
                    <li><i class="bi bi-check-circle-fill"></i> Competitive Salary and Benefits</li>
                    <li><i class="bi bi-check-circle-fill"></i> Friendly and Supportive Work Environment</li>
                    <li><i class="bi bi-check-circle-fill"></i> Opportunities for Career Growth and Advancement</li>
                    <li><i class="bi bi-check-circle-fill"></i> Flexible Work Hours and Remote Options</li>
                    <li><i class="bi bi-check-circle-fill"></i> Employee Wellness and Training Programs</li>
                </ul>
            </div>
        </div>
    </section>
</div>
    <x-expbpo.home.whyChooseUs />
@endsection
