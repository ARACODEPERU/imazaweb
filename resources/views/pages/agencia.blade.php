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
                                <li class="active">Automatización</li>
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
                    <div class="col-md-2"></div>
                    <div class="col-md-8 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <p class="about-two__text-box-text">
                            Te ofrecemos un acompañamiento continuo a través de nuestra agencia, brindándote 
                            asesoría personalizada para que puedas aprovechar al máximo las herramientas y 
                            estrategias implementadas. 
                        </p>
                        <br>
                        <p class="about-two__text-box-text">
                            Además, podemos automatizar todas tus redes sociales desde una sola plataforma 
                            con inteligencia artificial (IA). Esto te permitirá gestionar y programar 
                            publicaciones, responder a mensajes y analizar el rendimiento de tus campañas 
                            de manera eficiente y centralizada.
                        </p>
                        <br>
                        <p class="about-two__text-box-text">
                            Nuestro equipo te acompaña con estrategias diseñadas para ayudarte a crecer 
                            tus ventas y mejorar tu presencia en línea. Nos aseguramos de que cada acción 
                            esté alineada con tus objetivos comerciales, optimizando tu tiempo y recursos 
                            para obtener los mejores resultados.
                        </p>
                        <br>
                        <p class="about-two__text-box-text">
                            También tendrás acceso a analíticas detalladas para medir la productividad 
                            de tu equipo comercial. Esto te permitirá identificar áreas de mejora, 
                            tomar decisiones informadas y maximizar el rendimiento de tu equipo.
                        </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->

    
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
