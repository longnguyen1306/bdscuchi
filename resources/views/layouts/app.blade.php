<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>FindHouses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/favicon.ico">
    <link rel="stylesheet" href="/frontend/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/frontend/font/flaticon.css">
    <link rel="stylesheet" href="/frontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/frontend/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/frontend/css/search-form.css">
    <link rel="stylesheet" href="/frontend/css/search.css">
    <link rel="stylesheet" href="/frontend/css/animate.css">
    <link rel="stylesheet" href="/frontend/css/aos.css">
    <link rel="stylesheet" href="/frontend/css/aos2.css">
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="/frontend/css/lightcase.css">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/menu.css">
    <link rel="stylesheet" href="/frontend/css/slick.css">
    <link rel="stylesheet" href="/frontend/css/styles.css">
    <link rel="stylesheet" id="color" href="/frontend/css/default.css">
    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
</head>

<body class="homepage-3 the-search">
<!-- Wrapper -->
<div id="wrapper">

    <livewire:header.index />
    <div class="clearfix"></div>
    @yield('content')


    <livewire:footer.index />

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <livewire:register-login-form.index />
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>

    <!-- ARCHIVES JS -->
    <script src="/frontend/js/jquery-3.5.1.min.js"></script>
    <script src="/frontend/js/rangeSlider.js"></script>
    <script src="/frontend/js/tether.min.js"></script>
    <script src="/frontend/js/moment.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/mmenu.min.js"></script>
    <script src="/frontend/js/mmenu.js"></script>
    <script src="/frontend/js/aos.js"></script>
    <script src="/frontend/js/aos2.js"></script>
    <script src="/frontend/js/slick.min.js"></script>
    <script src="/frontend/js/fitvids.js"></script>
    <script src="/frontend/js/fitvids.js"></script>
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <script src="/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="/frontend/js/isotope.pkgd.min.js"></script>
    <script src="/frontend/js/smooth-scroll.min.js"></script>
    <script src="/frontend/js/lightcase.js"></script>
    <script src="/frontend/js/search.js"></script>
    <script src="/frontend/js/owl.carousel.js"></script>
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="/frontend/js/ajaxchimp.min.js"></script>
    <script src="/frontend/js/newsletter.js"></script>
    <script src="/frontend/js/jquery.form.js"></script>
    <script src="/frontend/js/jquery.validate.min.js"></script>
    <script src="/frontend/js/searched.js"></script>
    <script src="/frontend/js/forms-2.js"></script>
    <script src="/frontend/js/range.js"></script>
    <script src="/frontend/js/color-switcher.js"></script>
    <script>
        $(window).on('scroll load', function() {
            $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
        });

    </script>

    <!-- Slider Revolution scripts -->
    <script src="/frontend/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/frontend/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script>
        $('.slick-lancers').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }, ]
        });

    </script>
    <script>
        $('.slick-lancers2').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1292,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 993,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true,
                    arrows: false
                }
            }, {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }, ]
        });

    </script>
    <script>
        $('.job_clientSlide').owlCarousel({
            items: 2,
            loop: true,
            margin: 30,
            autoplay: false,
            nav: true,
            smartSpeed: 1000,
            slideSpeed: 1000,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                991: {
                    items: 2
                }
            }
        });

    </script>

    <script>
        $(".dropdown-filter").on('click', function() {

            $(".explore__form-checkbox-list").toggleClass("filter-block");

        });

    </script>

    <!-- MAIN JS -->
    <script src="/frontend/js/script.js"></script>
    <script src="/js/main.js"></script>

</div>
<!-- Wrapper / End -->
@livewireScripts
</body>

</html>
