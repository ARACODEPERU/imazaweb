@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('storage/'.$banner->content) }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        {{-- <div class="page-header__title">
                            <h2>Todos muestros cursos y talleres</h2>
                        </div> --}}
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{ route('index_main') }}">Home</a></li>
                                <li class="active">Capacitación</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->
    
    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="about-two__bottom-content">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__text-box">
                            <h1 class="">¿Estás listo para llevar tu negocio al siguiente nivel?</h1>
                            <p class="about-two__text-box-text">
                                En un mundo en constante evolución, la automatización y el marketing estratégico son las 
                                claves para el éxito. Con nuestra capacitación, adquirirás las habilidades y el conocimiento 
                                necesarios para transformar tu negocio y alcanzar resultados extraordinarios.
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__single-img">
                            {{-- <img src="{{ asset('storage/'.$visions[3]->content) }}" alt=""/> --}}
                            <img src="" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-9 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h4>Nuestra capacitación te ofrece:</h4>
                        <ul style="list-style: none;">
                            <li>
                                a) Descubrir y aplicar los secretos de la automatización y el marketing estratégico con 
                                contenidos prácticos diseñados para una implementación inmediata. Desde el primer día, 
                                transformarás tu negocio con estrategias probadas y efectivas.
                            </li>
                            <li>
                                b) Despertarás tu pasión por el marketing digital y la gestión comercial con expertos que 
                                inspiran. Aprenderás con un enfoque estratégico y práctico, y llevarás tu negocio a un paso adelante de tu competencia.
                            </li>
                            <li>
                                c) Con nuestra plataforma E-Learning, no solo tendrás acceso a un conocimiento invaluable; lo tendrás para siempre. 
                                Revivirás cada lección, cada descubrimiento, siempre que lo necesites. Además, recibirás un certificado que valida tu 
                                capacitación y la de tu equipo, sin preocuparte por la fecha de vencimiento.
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h4 style="color: #833fdb;">
                            Invertir en capacitación es invertir en el futuro de tu negocio.
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->



@stop
