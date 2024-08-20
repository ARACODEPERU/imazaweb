<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ URL('themes/imazaweb/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ URL('themes/imazaweb/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ URL('themes/imazaweb/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ URL('themes/imazaweb/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Si tus clientes son atendidos en tiempo real, aumentarán las probabilidades de venta, por eso AUTOMATIZAMOS la atención 24/7 en WhatsApp, e-commerce y página web." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet"
        href="{{ URL('themes/imazaweb/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/icomoon-icons/style.css') }}">
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/vendors/twentytwenty/twentytwenty.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/css/zilom.css') }}" />
    <link rel="stylesheet" href="{{ URL('themes/imazaweb/css/zilom-responsive.css') }}" />
    <style>
        /* Estilo para el enlace sin atributo href */
        a:not([href]) {
            cursor: pointer; /* Cambia el cursor a una mano */
        }
    </style>
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="350" src="{{ URL('themes/imazaweb/images/logoLoader.png') }}"
            alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">


        <x-header />

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        <!--Start Footer One-->
        <x-footer />
        <!--End Footer One-->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img
                        src="{{ URL('themes/imazaweb/images/resources/mobilemenu_logo.png') }}" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@zilom.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ URL('themes/imazaweb/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/wow/wow.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/twentytwenty/twentytwenty.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ URL('themes/imazaweb/vendors/parallax/parallax.min.js') }}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script src="{{ URL('themes/imazaweb/js/zilom.js') }}"></script>

    <!-- Modal -->
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        if (myModal) {
            myModal.addEventListener('shown.bs.modal', function() {
                myInput.focus()
            });
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('themes/imazaweb/assets/js/carrito.js') }}"></script>
    @yield('javascripts')

</body>

</html>
