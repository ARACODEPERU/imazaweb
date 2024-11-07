<header class="main-header main-header--one  clearfix">
    <div class="main-header--one__top clearfix">
        <div class="container">
            <div class="main-header--one__top-inner clearfix">
                <div class="main-header--one__top-left" style="padding: 0px;">
                    <div class="main-header--one__top-logo">
                        <a href="{{ route('index_main') }}">
                            <img style="height: 55px;" src="{{ asset('storage/'.$header[0]->content) }}"
                                alt="" />
                            {{-- <img style="width: 250px;"  src="{{  URL('themes/imazaweb/images/resources/logo.png')  }}"
                                    alt="" /> --}}
                        </a>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    <ul class="main-header--one__top-social-link list-unstyled clearfix">
                        <li><a href="{{ $header[1]->content }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="{{ $header[2]->content }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        {{-- <li><a href="{{ $header[3]->content }}" target="_blank"><i class="fab fa-youtube"></i></a></li> --}}
                        <li><a href="{{ $header[4]->content }}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="{{ $header[5]->content }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        {{-- <li><a href="{{ $header[6]->content }}" target="_blank"><i class="fab fa-twitter"></i></a></li> --}}
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
                                    <h6>Escribenos a:</h6>
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
                                <li class="{{ Route::currentRouteName()== 'index_main' ? "dropdown current" : '' }}">
                                    <a href="{{ route('index_main') }}">Home</a>
                                </li>
                                <li class="{{ Route::currentRouteName()== 'web_nosotros' ? "dropdown current" : '' }}">
                                    <a href="{{ route('web_nosotros') }}">Nosotros</a>
                                </li>
                                {{-- <li class="{{ Route::currentRouteName()== 'web_cursos' ? "dropdown current" : '' }}">
                                    <a href="{{ route('web_cursos') }}">Cursos</a>
                                    <ul>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="course-details.html">Course Details</a></li>
                                    </ul>
                                </li> --}}
                                <li class="{{ Route::currentRouteName()== 'web_despegachatempresarial' ? "dropdown current" : '' }}">
                                    <a href="">DespegaChat</a>
                                    <ul>
                                        <li><a href="{{ route('web_despegachatempresarial') }}">CRM - Empresarial</a></li>
                                        <li><a href="{{ route('web_despegachatpyme') }}">CRM - Pyme</a></li>
                                        <li><a href="{{ route('web_despegachatvendedores') }}">CRM - Vendedores</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName()== 'web_servicios' ? "dropdown current" : '' }}">
                                    <a href="{{ route('web_servicios') }}">Servicios</a>
                                    <ul>
                                        <li><a href="{{ route('web_capacitacion') }}">Capacitación</a></li>
                                        {{-- <li><a href="{{ route('web_suscripcion') }}">Suscripción</a></li> --}}
                                        <li><a href="{{ route('web_automatizacion') }}">Automatización</a></li>
                                        <li><a href="{{ route('web_agencia') }}">Agencia</a></li>
                                        {{-- <li><a href="{{ route('web_imagen_profesional') }}">Imagen profesional</a></li> --}}
                                    </ul>
                                </li>
                                <li class="{{ Route::currentRouteName()== 'blog_principal' ? "dropdown current" : '' }}">
                                    <a href="{{ route('blog_principal') }}">Blog</a>
                                    {{-- <ul>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="news-details.html">News Details</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="{{ Route::currentRouteName()== 'web_contacto' ? "dropdown current" : '' }}">
                                    <a href="{{ route('web_contacto') }}">Contacto</a>
                                </li> --}}
                            </ul>
                        </div>

                        <div class="right">
                            <div class="main-menu__right">
                                {{-- <div class="main-menu__right-login-register">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="" data-bs-toggle="modal"
                                            data-bs-target="#login">Iniciar Sesión</a>
                                        </li>
                                        <li><a href="" data-bs-toggle="modal"
                                            data-bs-target="">Registrarme</a></li>
                                    </ul>
                                </div> --}}
                                <div class="main-menu__right-cart-search">
                                    {{-- <div class="main-menu__right-cart-box">
                                        <a href="{{ route('web_carrito') }}">
                                            <span class="icon-shopping-cart"></span>
                                            <span id="contadorCarritoMovil" class="contadorCarritoMovil" style="font-weight: 700; padding: 5px 7px; font-size: 16px; position: absolute; margin-top: -10px;">

                                            </span>
                                            <span style="display:none" id="contadorCarritoWeb" style="font-weight: 700; padding: 5px 7px; font-size: 16px; position: absolute; margin-top: -10px;">

                                            </span>
                                        </a>
                                    </div> --}}
                                    {{-- <div class="main-menu__right-search-box">
                                        <a href="#" class="thm-btn search-toggler">Search</a>
                                    </div> --}}
                                    {{-- <div class="main-menu__right-search-box">
                                        <a href="{{ route('login') }}" target="_bla_k" class="thm-btn">Campus Virtual</a>
                                    </div> --}}
                                    <div class="main-menu__right-search-box">
                                        <a href="{{ route('web_contacto') }}" target="_bla_k" class="thm-btn">Contactanos</a>
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



<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{{ asset('storage/'.$header[9]->content) }}" width="155" alt="" />
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="icon-phone-call"></i>
                <a href="tel:{{ $header[7]->content }}">{{ $header[7]->content }}</a>
            </li>
            <li>
                <i class="icon-letter"></i>
                <a href="mailto:{{ $header[8]->content }}">{{ $header[8]->content }}</a>
            </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top" style="padding: 20px 8px;">
            <div class="mobile-nav__social">
                <a href="{{ $header[1]->content }}" target="_blank" class="fab fa-facebook" style=" font-size: 20px;"></a>
                <a href="{{ $header[4]->content }}" target="_blank" class="fab fa-tiktok" style=" font-size: 20px;"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
