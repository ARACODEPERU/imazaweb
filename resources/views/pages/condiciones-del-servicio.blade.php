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
                                <li class="active">Condiciones del servicio</li>
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
                        <div class="about-two__text-box" style="text-align:left;">
                            <div class="section-title">
                                <h2 class="section-title__title">Condiciones del Servicio de DespegaChat</h2>
                            </div>
                            <br>
                            <h4>1. Introducción</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Al suscribirte a los servicios de DespegaChat, aceptas los términos y 
                                condiciones establecidos a continuación. Estos términos rigen tu uso de nuestra plataforma y los servicios relacionados.
                            </p>
                            <br>
                            <h4>2. Descripción del Servicio</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                DespegaChat es una plataforma de software como servicio (SaaS) que te permite gestionar la 
                                atención al cliente a través de WhatsApp de manera eficiente y automatizada. Nuestra plataforma ofrece funcionalidades como:
                            </p>
                            <br>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>2.1.- Automatización 24/7:</b> 
                                Respuestas predeterminadas y flujos de conversación automatizados.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>2.2.- Inteligencia artificial:</b>
                                Análisis de conversaciones y personalización de respuestas.
                            </p>
                            <br>
                            <h4>3. Uso del Servicio</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>3.1.- Uso permitido :</b>
                                Puedes utilizar DespegaChat para gestionar la atención al cliente, automatizar respuestas y mejorar la eficiencia de tus operaciones.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>3.2.- Uso prohibido :</b>
                                No puedes utilizar DespegaChat para actividades ilegales, dañinas o que infrinjan los derechos de terceros.
                            </p>
                            <br>
                            <h4>4. Responsabilidades del Cliente</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>4.1.- Información precisa: </b>
                                Debes proporcionar información precisa y actualizada al registrarte y durante el uso de nuestros servicios.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>4.2.- Contraseñas: </b>
                                Eres responsable de mantener la confidencialidad de tus contraseñas y credenciales de acceso.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>4.3.- Contenido: </b>
                                Eres responsable del contenido que envías a través de DespegaChat y te comprometes a 
                                no enviar contenido que sea ilegal, dañino, ofensivo o que infrinja los derechos de terceros.
                            </p>
                            <br>
                            <h4>5. Responsabilidades de DespegaChat</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>5.1.- Prestación del servicio:</b>
                                Nos comprometemos a prestar el servicio de acuerdo con las especificaciones descritas en estas condiciones.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>5.2.- Seguridad:</b>
                                Implementaremos medidas de seguridad razonables para proteger tus datos.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>5.3.- Disponibilidad:</b>
                                Haremos todo lo posible para mantener el servicio disponible, pero no garantizamos una disponibilidad del 100%.
                            </p>
                            <br>
                            <h4>6. Propiedad Intelectual</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Todos los derechos de propiedad intelectual relacionados con DespegaChat, incluyendo el software, la marca y el contenido, 
                                son propiedad de DespegaChat.
                            </p>
                            <br>
                            <h4>7. Modificaciones</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Podemos modificar estas condiciones en cualquier momento. Te notificaremos sobre cualquier cambio importante.
                            </p>
                            <br>
                            <h4>8. Terminación</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Puedes cancelar tu suscripción en cualquier momento. Nosotros podemos suspender o cancelar tu acceso al 
                                servicio si incumples estas condiciones.
                            </p>
                            <br>
                            <h4>9. Limitación de responsabilidad</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Nuestra responsabilidad por cualquier daño o pérdida se limita, en la medida permitida por la 
                                ley, al monto que hayas pagado por el servicio en los últimos 12 meses.
                            </p>
                            <br>
                            <h4>10. Ley aplicable y jurisdicción</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Estas condiciones se rigen por las leyes de Perú. Cualquier disputa se resolverá en los tribunales de este país.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->



@stop
