<header class="main-header main-header--one  clearfix">
    <div class="main-header--one__top clearfix">
        <div class="container">
            <div class="main-header--one__top-inner clearfix">
                <div class="main-header--one__top-left">
                    <div class="main-header--one__top-logo">
                        <a href="{{ route('index_main') }}">
                            <img style="width: 250px; height: 60px;" src="{{ asset('storage/'.$header[0]->content) }}"
                                alt="" /> 
                            {{-- <img style="width: 250px;"  src="{{  URL('themes/imazaweb/images/resources/logo.png')  }}"
                                    alt="" /> --}}
                        </a>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    <ul class="main-header--one__top-social-link list-unstyled clearfix">
                        <li><a href="{{ $header[1]->content }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        {{-- <li><a href="{{ $header[2]->content }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $header[3]->content }}" target="_blank"><i class="fab fa-youtube"></i></a></li> --}}
                        <li><a href="{{ $header[4]->content }}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                        {{-- <li><a href="{{ $header[5]->content }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="{{ $header[6]->content }}" target="_blank"><i class="fab fa-twitter"></i></a></li> --}}
                    </ul>

                    <div class="main-header--one__top-contact-info clearfix">
                        <ul class="main-header--one__top-contact-info-list list-unstyled">
                            <li class="main-header--one__top-contact-info-list-item">
                                <div class="icon">
                                    <span class="icon-phone-call-1"></span>
                                </div>
                                <div class="text">
                                    <h6>Llamanos al:</h6>
                                    <p><a href="tel:{{ $header[7]->content }}">{{ $header[7]->content }}</a></p>
                                </div>
                            </li>
                            <li class="main-header--one__top-contact-info-list-item">
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <h6>Escribenos al:</h6>
                                    <p><a href="mailto:{{ $header[8]->content }}">{{ $header[8]->content }}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="main-header-one__bottom clearfix">
        <div class="container">
            <div class="main-header-one__bottom-inner clearfix">
                <nav class="main-menu main-menu--1">
                    <div class="main-menu__inner">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                        <div class="left">
                            <ul class="main-menu__list">
                                <li class="dropdown current">
                                    <a href="{{ route('index_main') }}">Home</a>
                                </li>
                                <li><a href="about.html">Nosotros</a></li>
                                <li>
                                    <a href="{{ route('web_cursos') }}">Cursos</a>
                                    <!--
                                    <ul>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                    </ul>
                                    -->
                                </li>
                                <li>
                                    <a href="web_blog">Blog</a>
                                    <!--
                                    <ul>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="news-details.html">News Details</a></li>
                                    </ul>
                                    -->
                                </li>
                                <li><a href="about.html">Contacto</a></li>
                            </ul>
                        </div>

                        <div class="right">
                            <div class="main-menu__right">
                                <div class="main-menu__right-login-register">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Iniciar Sesión</a></li>
                                        <li><a href="#">Registrarme</a></li>
                                    </ul>
                                </div>
                                <div class="main-menu__right-cart-search">
                                    <div class="main-menu__right-cart-box">
                                        <a href="#"><span class="icon-shopping-cart"></span></a>
                                    </div>
                                    {{-- <div class="main-menu__right-search-box">
                                        <a href="#" class="thm-btn search-toggler">Search</a>
                                    </div> --}}
                                    <div class="main-menu__right-search-box">
                                        <a href="https://marketingdespega.com/login" target="_blamk" class="thm-btn">Campus Virtual</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>

            </div>
        </div>
    </div>

</header>
