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



@stop
