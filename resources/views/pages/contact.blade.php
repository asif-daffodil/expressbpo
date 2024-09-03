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
        <div class="row">
            <!-- Contact Form Section -->
            <div class="col-md-6 wow fadeInUp">
                <h3 class="mb-4">Get in Touch</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Write your message here" required></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary btn-sm">Send Message</button>
                    </div>
                </form>
            </div>
    
            <!-- Map Section -->
            <div class="col-md-6 wow fadeInUp">
                <div class="position-relative" style="height: 100%; min-height: 400px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7963656511124!2d90.38043947502425!3d23.754639988614123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8af0d55cafb%3A0xf92affc6fb23c5ff!2s47%2C%2010%20Pashchim%20Raja%20Bazar%20Rd%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1725365145253!5m2!1sen!2sbd"
                        frameborder="0" 
                        style="width: 100%; height: 100%; filter: grayscale(60%);"
                        allowfullscreen>
                    </iframe>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                        <h2>Visit Us</h2>
                        <p>1234 Street Name, City, State, 12345</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-expbpo.home.whyChooseUs />
@endsection
