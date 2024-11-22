@extends('layouts.webpage')

@section('content')
    {{-- <x-home.slider /> --}}

    <section style="padding: 60px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center;">
                        "Eleva la experiencia de tus clientes y haz crecer tu negocio con Despega Chat"
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

    
    <section style="padding: 120px 0px; background: #f8f8f8;">
        <div class="container">
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
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Automatización intuitiva:</h3>
                            <p>
                                Diseña chatbots inteligentes con solo unos clics sin necesidad de ser un experto en programación.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Chatbots ilimitados para tu sitio web:</h3>
                            <p>Mejora la experiencia de usuario en tu sitio web con chatbots.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Sin restricciones en tus comunicaciones:</h3>
                            <p>A diferencia de otros, nuestros planes no se establecen por cantidad de contactos mensuales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Envía emails personalizados al instante:</h3>
                            <p>
                                Delega el envío de correos electrónicos y adapta cada mensaje a tus clientes. ¡Simplifica tu trabajo!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Nadie te dejará en visto:</h3>
                            <p>
                                Hazles seguimiento automatizado a tus clientes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <section class="testimonials-one clearfix">
        <div class="auto-container" style="height: 750px;">
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
                            <div class="col-xl-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px; height: 200px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Conecta Messenger, Instagram, WhatsApp business y WhatsApp Api, Web site, 
                                                Telegram, Email y otros.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Agenda el envío de seguimientos automatizados para tus clientes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Gestiona múltiples cuentas de WhatsApp desde un solo panel.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Organiza tus chats con etiquetas ilimitadas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Analiza las métricas clave de tus conversaciones.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Utiliza Chat gpt para sugerir mejores respuestas en vivo.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" style="padding: 25px;">
                                            <h4 class="testimonials-one__single-title">
                                                <i class="fa fa-check" style="font-size: 30px;"></i>
                                            </h4>
                                            <p class="testimonials-one__single-text">
                                                Organiza tus chats por niveles de urgencia.
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

        <!--About One Start-->
        {{-- <x-about /> --}}
        <!--About One End-->
        <!--Courses One Start-->
        {{-- <x-courses.list-card /> --}}
        <!--Courses One End-->


    <!--Registration One Start-->
    <x-register />
    <!--Registration One End-->
    <!--Categories One Start-->
    <x-courses.category-list-card />
    <!--Categories One End-->
    <!--Testimonials One Start-->
    <x-testimonials />
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
