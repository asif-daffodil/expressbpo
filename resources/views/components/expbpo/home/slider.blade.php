<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner pt-0 pt-lg-5">
        <div class="carousel-item active">
            <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/banners/slider2.jpg') }}"
                class="d-block w-100 min-vh-100" alt="..." style="object-fit: cover">
            <div class="carousel-caption">
                <div class="h1 wow bounceInDown">Outsourced Accounting and Tax Solution</div>
                <a href="#" class="btn btn-primary wow bounceInUp">Book a Consultation</a>
            </div>
        </div>
        <div class="carousel-item">
            <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/banners/slider2.jpg') }}"
                class="d-block w-100 min-vh-100" alt="..." style="object-fit: cover">
            <div class="carousel-caption">
                <div class="h1 wow bounceInDown">Inventory Management</div>
                <a href="#" class="btn btn-primary wow bounceInUp">Book a Consultation</a>
            </div>
        </div>
        <div class="carousel-item">
            <img loading="lazy" decoding="async" fetchpriority="high" src="{{ asset('images/banners/slider2.jpg') }}"
                class="d-block w-100 min-vh-100" alt="..." style="object-fit: cover">
            <div class="carousel-caption">
                <div class="h1 wow bounceInDown">Financial Planning & Analysis</div>
                <a href="#" class="btn btn-primary wow bounceInUp">Book a Consultation</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<script>
    $('#carouselExampleCaptions').on('slide.bs.carousel', function(event) {
        // Get the next slide element
        let $nextSlide = $(event.relatedTarget);
        // Add WOW.js animation classes to the next slide's caption elements
        $nextSlide.find('.carousel-caption > div').addClass('wow bounceInDown');
        $nextSlide.find('.carousel-caption > a').addClass('wow bounceInUp');

        // Remove WOW.js animation classes from the previous slide to reset
        $('.carousel-item').not($nextSlide).find('.carousel-caption > div').removeClass('wow bounceInDown');
        $('.carousel-item').not($nextSlide).find('.carousel-caption > a').removeClass('wow bounceInUp');
    });
</script>
