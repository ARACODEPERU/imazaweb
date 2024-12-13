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
    
    <section style="padding: 100px 0px 140px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center; color: #2D8CFF;">
                        Automatización de Atención al Cliente en WhatsApp
                    </h1>
                    <p class="about-two__text-box-text" style="text-align: center;">
                        Imagina que tus clientes siempre reciban la respuesta que necesitan, justo cuando la esperan. 
                        Nuestra agencia automatiza la atención de tus clientes y a la vez creamos experiencias memorables 
                        que conectan con las emociones.
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-two__text-box" style="text-align: center;">
                        <h1 style="color: #c843be;">¿Qué podemos hacer por ti?</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/example.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="features-one__single">
                                <div class="features-one__single-text">
                                    <h4>Atención instantánea en WhatsApp:</h4>
                                    <p>
                                        Integramos a tu equipo comercial en una sola cuenta de WhatsApp, con 
                                        herramientas que automatizan el seguimiento, asignan agentes en tiempo real 
                                        y te permiten tener control absoluto de cada interacción. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="features-one__single">
                                <div class="features-one__single-text">
                                    <h4>Integración total:</h4>
                                    <p>Unimos tu página web, CRM y otras plataformas en un ecosistema fluido, donde todo trabaja en armonía para hacer crecer tu negocio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="categories-one__btn" style="margin-top: 0px;">
                        <a href="" class="thm-btn-2">Agenda una Demo Gratuita</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    
    <section style="padding: 140px 0px;  background: #f8f8f8;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-two__text-box" style="text-align: center;">
                        <h1 style="color: #c843be;">¿Cómo lo hacemos?</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Flujos de trabajo automáticos:</h4>
                            <p>
                                Diseñamos interacciones que responden con precisión y rapidez, demostrando que tu marca siempre está 
                                presente y lista para ayudar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Atención humanizada y cercana:</h4>
                            <p>
                                Aunque la automatización está al centro, aseguramos que siempre haya espacio para una conexión humana, 
                                porque entendemos que cada cliente es único.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Etiquetado inteligente por niveles de intención de compra:</h4>
                            <p>
                                Clasificamos tus conversaciones automáticamente ayudando a tu equipo comercial a 
                                enfocar sus esfuerzos en quienes tienen mayor probabilidad de cerrar una venta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Seguimiento automático:</h4>
                            <p>
                                Un seguimiento efectivo aumenta las probabilidades de cerrar ventas, y nosotros lo 
                                automatizamos para que aceleres tus ventas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Asignación equitativa de leads:</h4>
                            <p>
                                Repartimos prospectos de manera justa entre tu equipo comercial, 
                                fomentando la colaboración y maximizando resultados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Mensajes de remarketing impactantes:</h4>
                            <p>
                                Llegamos a tus clientes con mensajes personalizados en los momentos clave, 
                                reactivando su interés y manteniéndolos cerca de tu marca.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="categories-one__btn" style="margin-top: 0px;">
                        <a href="" class="thm-btn-2">Agenda una Demo Gratuita</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    
    <section style="padding: 140px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-two__text-box" style="text-align: center;">
                        <h1 style="color: #c843be;">¿Por qué elegirnos?</h1>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/example-2.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <br>
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="features-one__single">
                                <div class="features-one__single-text">
                                    <p>
                                        En cada interacción, buscamos generar confianza, inspirar acción y 
                                        fortalecer la lealtad de tus clientes. Nuestro sistema trabaja por ti las 
                                        24 horas del día, asegurando que tu negocio nunca se detenga.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="features-one__single">
                                <div class="features-one__single-text">
                                    <p>
                                        No se trata solo de automatizar, sino de construir relaciones duraderas 
                                        y significativas con cada cliente. En Despega Chat, te ayudamos a humanizar tu marca, 
                                        combinando el poder de la inteligencia artificial con un enfoque cálido y auténtico.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="features-one__single">
                                <div class="features-one__single-text">
                                    <p>
                                        Nuestra misión es que cada interacción refleje lo mejor de tu negocio, 
                                        con la eficiencia de la tecnología y el toque humano que tus clientes valoran.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="categories-one__btn" style="margin-top: 0px;">
                        <a href="" class="thm-btn-2">Agenda una Demo Gratuita</a>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h4 style="color: #c843be;   text-align:center">
                        ¡Contáctanos ahora y comienza a escribir el próximo capítulo de éxito para tu empresa!
                    </h4>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    
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
