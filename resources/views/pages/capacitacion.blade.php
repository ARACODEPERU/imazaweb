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
    
    <section style="padding: 100px 0px 140px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center; color: #2D8CFF;">
                        Transforma tu Negocio con Capacitaciones en Automatización y Marketing
                    </h1>
                    <p class="about-two__text-box-text" style="text-align: center;">
                        En Despega, diseñamos capacitaciones personalizadas para empresas que buscan 
                        optimizar su operación, mejorar su atención al cliente y aumentar sus ventas 
                        mediante soluciones digitales.
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
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Automatización en WhatsApp:</h4>
                            <p>
                                Configura sistemas inteligentes que trabajan por ti: atención al cliente instantánea y 
                                ventas automáticas disponibles 24/7.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Automatización Web:</h4>
                            <p>
                                Convierte tu página web en una máquina de oportunidades, captando clientes de forma eficiente 
                                y automatizada.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Automatización en Redes Sociales:</h4>
                            <p>
                                Impulsa el engagement y las conversiones con flujos diseñados para conectar con tu 
                                audiencia en el momento justo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-one__single">
                        <div class="features-one__single-text">
                            <h4>Estrategias de Marketing Automatizado:</h4>
                            <p>
                                Aprende a atraer y fidelizar clientes con campañas integradas que optimizan 
                                cada etapa del proceso de venta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section style="padding: 140px 0px; background: #f8f8f8;">
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
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/example-3.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <br><br>
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="features-one__single">
                                <div class="features-one__single-text">
                                    <p>
                                        Con nuestra experiencia, simplificarás procesos complejos, 
                                        empoderarás a tu equipo con las herramientas adecuadas y 
                                        asegurarás el crecimiento sostenible de tu negocio.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h4 style="color: #c843be;   text-align:center">
                        ¡Contáctanos y transforma la forma vender en tu empresa!
                    </h4>
                </div>
                <div class="col-md-3"></div>
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
