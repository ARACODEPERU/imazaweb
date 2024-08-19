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
                                <li class="active">Sucripción</li>
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
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__single-img">
                            {{-- <img src="{{ asset('storage/'.$visions[3]->content) }}" alt=""/> --}}
                            <img src="" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <p class="about-two__text-box-text">
                            Con nuestro servicio de Suscripciones, te embarcas en un viaje de transformación continua. 
                            Imagina tener el poder de:
                        </p>
                        <ul style="list-style: none;">
                            <li>
                                <b>a) Mantenerte a la vanguardia</b> lcon capacitación avanzada en automatización y marketing.
                            </li>
                            <li>
                                <b>b) Recibir asesoria experta</b> que optimizará tus procesos comerciales, convirtiendo cada desafío en 
                                oportunidades de crecimiento.
                            </li>
                            <li>
                                <b>c) Acceder a las últimas tendencias y herramientas,</b> posicionándote como líder en la revolución digital.
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-empowerment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Características</a></h4>
                                <p>
                                    Mensual $ 25 <br>
                                    Anual $ 150, equivale a $ 12.50 mensuales
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-human-resources-1"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Capacitación Avanzada</a></h4>
                                <p>Acceso a cursos y talleres mensuales sobre automatización y marketing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-recruitment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Asesoría Experta</a></h4>
                                <p>Sesión mensual de asesoría para optimizar procesos comerciales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-recruitment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Tendencias y Herramientas</a></h4>
                                <p>Acceso continuo a las últimas tendencias y herramientas del mercado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-recruitment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Soporte Prioritario</a></h4>
                                <p>Soporte técnico y de atención al cliente prioritario.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-recruitment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Materiales Exclusivos</a></h4>
                                <p>Acceso a guías, plantillas y recursos exclusivos cada mes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="features-one__single">
                            <div class="features-one__single-icon">
                                <span class="icon-recruitment"></span>
                            </div>
                            <div class="features-one__single-text">
                                <h4><a href="#">Descuentos Especiales</a></h4>
                                <p>Descuentos en servicios adicionales y eventos especiales.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h4 style="color: #833fdb; text-align:center">
                            Prepárate para ser el arquitecto de tu éxito, liderando el proceso de automatización y elevando tus ventas a nuevas alturas. 
                        </h4>
                        <br>
                        <h4 style="color: #833fdb; text-align:center">
                            Suscríbete y transforma tu potencial en resultados extraordinarios.
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->
    



@stop
