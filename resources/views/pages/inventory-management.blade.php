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
                <i class="fas fa-box-open fa-4x text-primary mb-3"></i>
                <h2 class="mb-3">Inventory Management Services</h2>
                <p>Efficiently track, manage, and optimize your inventory levels to ensure smooth operations and minimize
                    costs. Our Inventory Management solutions help businesses maintain the right balance of stock and
                    improve operational efficiency.</p>
            </div>
        </div>

        <!-- Section 2: Tabs -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="inventoryTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="stock-control-tab" data-bs-toggle="tab" href="#stock-control"
                            role="tab" aria-controls="stock-control" aria-selected="true">Stock Control</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="order-management-tab" data-bs-toggle="tab" href="#order-management"
                            role="tab" aria-controls="order-management" aria-selected="false">Order Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="inventory-tracking-tab" data-bs-toggle="tab" href="#inventory-tracking"
                            role="tab" aria-controls="inventory-tracking" aria-selected="false">Inventory Tracking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="supplier-management-tab" data-bs-toggle="tab" href="#supplier-management"
                            role="tab" aria-controls="supplier-management" aria-selected="false">Supplier Management</a>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="inventoryTabContent">
                    <!-- Stock Control -->
                    <div class="tab-pane fade show active" id="stock-control" role="tabpanel"
                        aria-labelledby="stock-control-tab">
                        <p>Ensure that your business always has the right stock levels. We provide tools to help you monitor
                            stock levels in real-time, reducing overstocking and stockouts. With our system, you can set
                            automatic restocking triggers based on consumption trends.</p>
                    </div>
                    <!-- Order Management -->
                    <div class="tab-pane fade" id="order-management" role="tabpanel" aria-labelledby="order-management-tab">
                        <p>Streamline the process of ordering, receiving, and tracking goods. Our solution helps businesses
                            automate order processing, allowing you to manage purchase orders, receipts, and reorders
                            effortlessly, minimizing manual data entry and reducing errors.</p>
                    </div>
                    <!-- Inventory Tracking -->
                    <div class="tab-pane fade" id="inventory-tracking" role="tabpanel"
                        aria-labelledby="inventory-tracking-tab">
                        <p>Track inventory movements across various locations, whether in warehouses or retail outlets. We
                            offer advanced tracking tools that provide visibility into where each item is located, when it
                            was moved, and where it's going next, ensuring seamless stock flow.</p>
                    </div>
                    <!-- Supplier Management -->
                    <div class="tab-pane fade" id="supplier-management" role="tabpanel"
                        aria-labelledby="supplier-management-tab">
                        <p>Maintain healthy relationships with your suppliers through efficient supplier management. Our
                            system allows you to track supplier performance, manage contracts, and ensure timely delivery,
                            helping you avoid delays in your supply chain.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Why Choose Us -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-6">
                <img src="{{ asset('images/for-us-based-ecommerce-companies.webp') }}" alt="Inventory Management"
                    class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h3 class="mb-4">Why Choose Our Inventory Management Services?</h3>
                    <p><i class="fas fa-chart-bar text-success me-2"></i><strong>Real-Time Insights:</strong> Our advanced
                        software provides real-time data, allowing you to make informed decisions about stock levels and
                        ordering.</p>
                    <p><i class="fas fa-sync-alt text-warning me-2"></i><strong>Automation:</strong> Automate critical tasks
                        such as reordering and inventory tracking, saving time and reducing errors.</p>
                    <p><i class="fas fa-lock text-info me-2"></i><strong>Improved Security:</strong> Prevent stock theft and
                        loss with our secure and trackable inventory solutions, helping you manage high-value items
                        efficiently.</p>
                    <p><i class="fas fa-handshake text-primary me-2"></i><strong>End-to-End Solutions:</strong> From stock
                        control to supplier management, we offer a comprehensive inventory management system that covers all
                        aspects of your inventory lifecycle.</p>
                </div>
            </div>
        </div>

        <!-- Section 4: Call to Action -->
        <div class="row mb-5 py-5 wow fadeInUp" data-wow-delay="0.6s">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="mb-3">Get Full Control of Your Inventory Today!</h4>
                <p>Contact us now to learn how our inventory management services can optimize your stock flow and improve
                    operational efficiency.</p>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>

    <x-expbpo.home.whyChooseUs />
@endsection
