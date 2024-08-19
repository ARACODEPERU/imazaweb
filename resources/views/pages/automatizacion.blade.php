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
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__text-box">
                            <h1 class="">¿Pierdes ventas por no atender a tiempo a tus clientes en WhatsApp?</h1>
                            <p class="about-two__text-box-text">
                                Deja de perder clientes por no responder a tiempo en WhatsApp. Con nuestra asesoría, 
                                podrás automatizar la atención al cliente y garantizar respuestas rápidas y eficientes 
                                las 24 horas del día, liberando a tu equipo para que cierre las ventas en llamadas.
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
                        <h4>Beneficios de nuestra Asesoría:</h4>
                        <ul style="list-style: none;">
                            <li>
                                <b>•	Automatización 24/7: </b> Implementa sistemas que permiten atender a 
                                tus clientes de manera automática en cualquier momento.
                            </li>
                            <li>
                                <b>•	Integración de Equipos: </b> Centraliza la atención de todos tus vendedores 
                                en un único número de WhatsApp, mejorando la coordinación y eficiencia.
                            </li>
                            <li>
                                <b>•	Respuestas Rápidas: </b> Crea y guarda mensajes automáticos para responder 
                                rápidamente a las consultas más frecuentes.
                            </li>
                            <li>
                                <b>•	Gestión de Clientes: </b> Utiliza etiquetas y un CRM integrado para organizar 
                                y gestionar la información de tus clientes de manera efectiva.
                            </li>
                            <li>
                                <b>•	Acceso Multidispositivo: </b> Permite que tu equipo atienda a los clientes 
                                desde cualquier dispositivo, en cualquier lugar.
                            </li>
                            <li>
                                <b>•	Transferencia de Conversaciones: </b> Facilita la transferencia de conversaciones 
                                entre diferentes áreas o agentes, asegurando una atención continua y sin interrupciones.
                            </li>
                            <li>
                                <b>•	Envíos Masivos: </b> Realiza envíos masivos de mensajes promocionales para 
                                mantener a tus clientes informados y aumentar tus ventas.
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h4 style="color: #833fdb; text-align:center">
                            Prepárate para transformar tu atención al cliente y llevar tus ventas a nuevas alturas.  
                        </h4>
                        <br>
                        <h4 style="color: #833fdb; text-align:center">
                            ¡Contáctanos para una asesoría gratuita y descubre cómo podemos ayudarte a automatizar tu atención al cliente de manera efectiva!
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->



@stop
