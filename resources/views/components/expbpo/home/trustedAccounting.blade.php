<div class="container-fluid services">
    <div class="container">
        <div class="row py-5 my-5" id="counter-box">
            <div class="col-md-4">
                <div>
                    <h2 class="text-success text-uppercase fs-5">services we provide</h2>
                    <h1 class="text-blue">Trusted Accounting and Tax Services</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="counter d-flex border-bottom pb-5">
                        <span class="timer display-1 fw-bold text-success" data-from="25" data-to="475"
                            style="line-height: 0.6"></span>
                        <span class="fs-5" style="line-height: 0.6">Plus</span>
                    </div>
                    <p>
                        We are a team of 475+ Professionals who deliver the best-in-class results.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="counter d-flex border-bottom pb-5">
                        <span class="timer display-1 fw-bold text-success" data-from="09" data-to="99"
                            style="line-height: 0.6"></span>
                        <span class="fs-5" style="line-height: 0.6">Percent</span>
                    </div>
                    <p>
                        Overall client satisfaction with service delivery using our offshore teams.
                    </p>
                </div>
            </div>
        </div>
        <div class="row pb-5">
            <a class="col-md-4 text-decoration-none" href="">
                <div class="text-center">
                    <figure>
                        <img src="{{ asset('images/accounting-services.jpg') }}" alt=""
                            class="img-fluid shadow shadow-md">
                    </figure>
                    <h3 class="text-uppercase text-blue mt-3 mb-0">Accounting Services</h3>
                    <p class="small text-muted">Transactional Work to Financial Statements</p>
                </div>
            </a>
            <a class="col-md-4 text-decoration-none" href="">
                <div class="text-center">
                    <figure>
                        <img src="{{ asset('images/tax-services.jpg') }}" alt=""
                            class="img-fluid shadow shadow-md">
                    </figure>
                    <h3 class="text-uppercase text-blue mt-3 mb-0">Tax Services</h3>
                    <p class="small text-muted">Plan, Optimize and File Taxes</p>
                </div>
            </a>
            <a class="col-md-4 text-decoration-none" href="">
                <div class="text-center">
                    <figure>
                        <img src="{{ asset('images/cpa-firms.jpg') }}" alt=""
                            class="img-fluid shadow shadow-md">
                    </figure>
                    <h3 class="text-uppercase text-blue mt-3 mb-0">CPA Firms</h3>
                    <p class="small text-muted">Efficient Back-Office Solutions</p>
                </div>
            </a>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
<script>
    $(window).scroll(function() {
        var oTop = $("#counter-box").offset().top - window.innerHeight;
        if ($(window).scrollTop() > oTop) {
            $('.timer').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-to');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
        }
    })
</script>
