<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'MyNexousBpo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-none d-lg-block fixed-top">
        <x-expbpo.topbar />
        <x-expbpo.navbar />
    </div>
    <div class="d-block d-lg-none">
        <x-expbpo.topbar />
        <x-expbpo.navbar />
    </div>
    @yield('content')
    <x-expbpo.footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.11/jquery.lazy.min.js"></script>
    <script>
        $(function() {
            // Lazy load all images with class 'lazy'
            $('img.lazy').lazy();
        });
    </script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
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

</body>

</html>
