<nav class="navbar navbar-expand-lg bg-blue navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/logo.png') }}" alt="logo"
                class="img-fluid" style="height: 4rem">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ URL('/') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('company-overview') }}">Company Overview</a></li>
                        <li><a class="dropdown-item" href="{{ route('leadership-team') }}">Leadership Team</a></li>
                        <li><a class="dropdown-item" href="{{ route('why-choose-us') }}">Why Choose Us</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Our Services
                    </a>
                    <div class="dropdown-menu">
                        <div class="d-block d-md-flex">
                            <ul class="nav border-end border-2 d-flex flex-column">
                                <li><a class="dropdown-item h4" href="#">IT Services</a></li>
                                <li><a class="dropdown-item" href="{{ route('web-development-service') }}">Website
                                        Development</a></li>
                                <li><a class="dropdown-item" href="{{ route('website-maintaining-service') }}">Website
                                        Maintaining</a></li>
                                <li><a class="dropdown-item" href="#">ERP Maintening</a></li>
                                <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="#">SEO</a></li>
                                <li><a class="dropdown-item" href="#">Video Editing</a></li>
                            </ul>
                            <ul class="nav border-end border-2 d-flex flex-column">
                                <li><a class="dropdown-item h4" href="#">Accounting</a></li>
                                <li><a class="dropdown-item" href="#">Bookkeeping</a></li>
                                <li><a class="dropdown-item" href="#">Accounts Payable</a></li>
                                <li><a class="dropdown-item" href="#">Accounts Receivable</a></li>
                                <li><a class="dropdown-item" href="#">Inventory Management</a></li>
                                <li><a class="dropdown-item" href="#">Payroll Management</a></li>
                                <li><a class="dropdown-item" href="#">Sale Tax Compliance</a></li>
                                <li><a class="dropdown-item" href="#">Reporting</a></li>
                                <li><a class="dropdown-item" href="#">Quickbooks Accounting</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Career
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
