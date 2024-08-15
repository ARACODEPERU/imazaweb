<footer class="footer-one">
    <div class="footer-one__bg"
        style="background-image: url({{ URL('themes/imazaweb/images/footer.jpg') }});">
    </div><!-- /.footer-one__bg -->
    <div class="footer-one__top">
        <div class="container">
            <div class="row">
                <!--Start Footer Widget Column-->
                {{-- <div class="col-xl-2 col-lg-4 col-md-4 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-logo">
                            <a href="{{ route('index_main') }}">
                                <img style="height: 120px;" src="{{ URL('themes/imazaweb/images/isotipoNegativo.png') }}"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div> --}}
                <!--End Footer Widget Column-->
                <div class="col-md-2 wow animated fadeInUp" data-wow-delay="0.5s">
                </div>

                <!--Start Footer Widget Column-->
                <div class="col-md-3 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="footer-widget__column footer-widget__links">
                        <h3 class="footer-widget__title">Links :</h3>
                        <ul class="footer-widget__links-list list-unstyled">
                            <li><a href="{{ route('web_nosotros') }}">Nosotros</a></li>
                            <li><a href="{{ route('web_cursos') }}">Cursos</a></li>
                            <li><a href="{{ route('blog_principal') }}">Blog</a></li>
                            <li><a href="{{ route('web_contacto') }}">Contacto</a></li>
                            <li><a href="{{ route('web_privacidad') }}">Politicas de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
                <!--End Footer Widget Column-->

                <!--Start Footer Widget Column-->
                <div class="col-md-3 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-widget__column footer-widget__courses">
                        <h3 class="footer-widget__title">Nuevos Cursos :</h3>
                        <ul class="footer-widget__courses-list list-unstyled">
                            <li><a href="#">UI/UX Design</a></li>
                            <li><a href="#">WordPress Development</a></li>
                            <li><a href="#">Business Strategy</a></li>
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">Business English</a></li>
                        </ul>
                    </div>
                </div>
                <!--End Footer Widget Column-->

                <!--Start Footer Widget Column-->
                <div class="col-md-3 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contactanos :</h3>
                        <p class="phone"><a href="tel:123456789">92 888 666 0000</a></p>
                        <p><a href="mailto:info@templatepath.com">needhelp@company.com</a></p>
                    </div>
                    <div class="footer-widget__column footer-widget__social-links">
                        <h3 class="footer-widget__title">Siguenos en :</h3>
                        <ul class="footer-widget__social-links-list list-unstyled clearfix">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                            {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <!--End Footer Widget Column-->

            </div>
        </div>
    </div>

    <!--Start Footer One Bottom-->
    <div class="footer-one__bottom" style="padding: 10px 0px; background: #000; height: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center" style="color: #fff;">
                        <p>&copy; Copyright {{ date('Y') }} by {{ env('APP_NAME') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer One Bottom-->
</footer>
