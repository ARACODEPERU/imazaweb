@extends('layouts.webpage')

@section('content')
    {{-- <x-home.slider /> --}}

    <section style="padding: 60px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center; color: #5b5a5a;">
                        "Eleva la experiencia de tus clientes y haz crecer tu negocio con <b style="color: #c843be;">Despega Chat y el poder de la IA"</b>
                    </h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="about-one__btn" style="margin-top: 0px;">
                        <a href="" class="thm-btn">Comienza Gratis</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="categories-one__btn" style="margin-top: 0px;">
                        <a href="" class="thm-btn">Agenda una Demo</a>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <img src="https://cdn.prod.website-files.com/6410e1eea16628fb630ae69b/6633ac66eb9bb448a48b2284_inboxmercately.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Features One Start-->
    <x-features />
    <!--Features One End-->

    <section style="padding: 20px 0px 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        Descubre la fórmula para vender más en WhatsApp
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/chateabots.png') }}" alt="">
                    <div style="height: 10px; background-color: #ac8dd4; margin-bottom: 10px;"></div>
                    <h3>Chatea</h3>
                    <p>Nuestros bots humanizados atienden a tus clientes 24/7.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/remarketing.png') }}" alt="">
                    <div style="height: 10px; background-color: #a573e7; margin-bottom: 10px;"></div>
                    <h3>Prospecta</h3>
                    <p>Campañas de remarketing a todos tus clientes sin riesgos de bloqueo.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/automatiza.png') }}" alt="">
                    <div style="height: 10px; background-color: #9254e4; margin-bottom: 10px;"></div>
                    <h3>Automatiza</h3>
                    <p>Nuestros bots humanizados responden a tus clientes 24/7 con la precisión que necesitan.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/vende.png') }}" alt="">
                    <div style="height: 10px; background-color: #680de0; margin-bottom: 10px;"></div>
                    <h3>Vende</h3>
                    <p>Cierra más negocios y lleva a tu empresa a un nivel más alto.</p>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #f8f8f8;">
        <div class="auto-container" style="">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        Funciones exclusivas para tu WhatsApp.
                    </h1>
                    <p style="text-align:center;">
                        Disfruta del poder de la automatización y la inteligencia artificial
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern">
                            <img src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}" alt="" />
                        </div>
                        <div class="shape1">
                            <img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 250px;">
                                            <h3>Automatización intuitiva:</h3>
                                            <p>
                                                Diseña chatbots inteligentes con solo unos clics sin necesidad de ser un experto en programación.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 250px;">
                                            <h3>
                                                Integración de tu página web y redes sociales: 
                                            </h3>
                                            <p>
                                                Mejora la experiencia de usuario en tu sitio web y redes sociales con atención al instante.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 250px;">
                                            <h3>
                                                Sin restricciones en tus comunicaciones:
                                            </h3>
                                            <p>
                                                A diferencia de otros, nuestros planes no se establecen por cantidad de contactos mensuales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-one clearfix" style="padding: 140px 0px;">
        <div class="auto-container" style="height: 450px;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h1 style="font-size: 50px; text-align:center; color: #fff;">
                            Características generales de Despega Chat
                        </h1>
                        <br>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern">
                            <img src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}" alt="" />
                        </div>
                        <div class="shape1">
                            <img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p style="font-size: 20px;">
                                                Conecta Messenger, Instagram, WhatsApp Business y WhatsApp Api, Web site, Telegram, Email y otros.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p style="font-size: 20px;">
                                                Gestiona múltiples cuentas de WhatsApp desde un solo panel.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p style="font-size: 20px;">
                                                Organiza tus chats según el estado en tu proceso de venta.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p style="font-size: 20px;">
                                                Entrena a la IA para conocer tus productos, responder con imágenes, audios, documentos y brindar asesoría 24/7.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p style="font-size: 20px;">
                                                Organiza tus chats por niveles de urgencia.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p style="font-size: 20px;">
                                                Segmenta tu audiencia para campañas masivas más efectivas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px;">
        <div class="auto-container" style="">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center; color: #5b5a5a;">
                        <b style="color: #5298d3;">Con DESPEGA CHAT,</b>
                        podrás crear tu propio asistente virtual con inteligencia artificial en tan solo unos clics.
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern">
                            <img src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}" alt="" />
                        </div>
                        <div class="shape1">
                            <img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 150px;">
                                            <p style="line-height: 25px;">
                                                Comprende y responde a los mensajes de audio de tus clientes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 150px;">
                                            <p style="line-height: 25px;">
                                                Humaniza tu atención.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 150px;">
                                            <p style="line-height: 25px;">
                                                Nuestra IA espera al cliente finalizar con el envío de todos sus mensajes para entender su idea y luego responde con naturalidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h4 style="color: #833fdb; text-align:center">
                                    Es decir, interactúa contigo de forma natural, entendiendo tanto tus palabras como tus imágenes.
                                </h4>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #f8f8f8;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-4">
                    <h1 style="font-size: 40px;">
                        LA AUTOMATIZACIÓN HA LLEGADO PARA QUEDARSE
                    </h1>
                    <br>
                    <p>
                        <b>
                            Atiende a cientos de clientes simultáneamente con la agilidad de la inteligencia artificial.
                        </b>
                        <br> 
                        Nuestra tecnología te permite crear tu chatbot en minutos y crear experiencias únicas para tus clientes.
                    </p>
                </div>
                <div class="col-md-8" style="text-align:center;">
                    <br>
                    <img style="width: 99%; padding: 10px;" src="{{ asset('themes/imazaweb/images/automatizacion.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        INTEGRACIONES VIA API Y WEBHOOK
                    </h1>
                    <br>
                    <p>
                        <b>
                            Integra tu WhatsApp con otras plataformas.
                        </b>
                        <br> 
                        Mediante la integración de sistemas CRM, hojas de cálculo y otras fuentes de datos, 
                        se puede lograr una atención al cliente omnicanal y altamente segmentada.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/integracion.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #f8f8f8;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        PLANIFICA TUS COMUNICACIONES CON ANTICIPACIÓN
                    </h1>
                    <br>
                    <p>
                        Programa mensajes personalizados para enviarlos automáticamente a tus 
                        clientes o grupos de WhatsApp. Ideal para recordatorios de citas, reuniones o lanzamientos.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- <section style="padding: 140px 0px;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        MIDE EL ÉXITO DE TU EQUIPO COMERCIAL
                    </h1>
                    <br>
                    <p>
                        <b>
                            Gestiona de forma eficiente todas las etapas del proceso de venta
                        </b>
                        <br> 
                        Toma el control total de tu gestión comercial y mejora la eficiencia de tu equipo de ventas. 
                        Conoce en detalle las métricas de atención al cliente, identifica a tus mejores vendedores y optimiza tus procesos comerciales.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #f8f8f8;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        UNE LA POTENCIA DE UN CRM CON LA VERSATILIDAD DE WHATSAPP
                    </h1>
                    <br>
                    <p>
                        <b>
                            Asigna clientes entre tus vendedores de forma automatizada e inteligente
                        </b>
                        <br> 
                        Descubre la solución perfecta para gestionar tus conversaciones de WhatsApp. Con un CRM multiagente, 
                        podrás mejorar la colaboración en equipo, optimizar la asignación de clientes y obtener una visión completa de tu negocio.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}



        <!--About One Start-->
        {{-- <x-about /> --}}
        <!--About One End-->
        <!--Courses One Start-->
        {{-- <x-courses.list-card /> --}}
        <!--Courses One End-->


    <!--Registration One Start-->
    {{-- <x-register /> --}}
    <!--Registration One End-->
    <!--Categories One Start-->
    {{-- <x-courses.category-list-card /> --}}
    <!--Categories One End-->
    <!--Testimonials One Start-->
    {{-- <x-testimonials /> --}}
    <!--Testimonials One End-->
    <!--Company Logos One Start-->
    {{-- <x-company-clients /> --}}
    <!--Company Logos One End-->

    <!--Blog One Start-->
    <x-blog.presentation />
    <!--Blog One End-->
    <!--Start Newsletter One-->
    {{-- <x-subscription /> --}}
    <!--End Newsletter One-->

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
