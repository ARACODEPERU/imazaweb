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
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__single-img">
                            {{-- <img src="{{ asset('storage/'.$visions[3]->content) }}" alt=""/> --}}
                            <img src="" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h4>Nuestra capacitación te ofrece:</h4>
                        <ul style="list-style: none;">
                            <li>
                                <b>a) Descubrir y aplicar</b> los secretos de la automatización y el marketing estratégico con 
                                contenidos prácticos diseñados para una implementación inmediata. Desde el primer día, 
                                transformarás tu negocio con estrategias probadas y efectivas.
                            </li>
                            <li>
                                <b>b) Despertarás tu pasión</b> por el marketing digital y la gestión comercial con <b>expertos que 
                                    inspiran.</b> Aprenderás con un enfoque <b>estratégico y práctico,</b> y llevarás tu negocio a un paso adelante de tu competencia.
                            </li>
                            <li>
                                c) Con nuestra <b>plataforma E-Learning,</b> no solo tendrás acceso a un conocimiento invaluable; lo tendrás <b>para siempre.</b> 
                                Revivirás cada lección, cada descubrimiento, siempre que lo necesites. Además, recibirás un certificado que valida tu 
                                capacitación y la de tu equipo, <b>sin preocuparte por la fecha de vencimiento.</b>
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

    <!--Why Choose One Start-->
    <x-why-choose-one />
    <!--Why Choose One End-->

    
    <div id="whatsapp">
        <a href="" class="wtsapp" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <style type="text/css">
        #whatsapp .wtsapp{
            position: fixed;
            transform: all .5s ease;
            background-color: #25D366;
            display: block;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border-radius: 50px;
            border-right: none;
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            bottom: 40px;
            right: 20px;
            border: 0;
            z-index: 9999;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        #whatsapp .wtsapp:before{
            content: "";
            position: absolute;
            z-index: -1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        #whatsapp .wtsapp:focus{
            border: none;
            outline: none;
        }

        @keyframes pulse-border{
            0%{
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }
            100%{
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }

    </style>




@stop
