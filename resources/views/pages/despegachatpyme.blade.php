@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Despega Chat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section style="padding: 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center;">
                        Aumenta tus ventas con atención profesional 24/7 al instante.
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

    <section class="why-choose-one">
        <div class="container">
            <div class="row">
                <!--Start Why Choose One Left-->
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="why-choose-one__left">
                                <div class="section-title">
                                    <span class="section-title__tagline">¿Por qué elegir</span>
                                    <h2 class="section-title__title">
                                        DespegaChat?
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="features-one__single">
                                <div class="features-one__single-icon">
                                    <span class="icon-empowerment"></span>
                                </div>
                                <div class="features-one__single-text">
                                    <h4><a href="#">Más ventas, menos esfuerzo</a></h4>
                                    <p>Convierte tus conversaciones en ventas. DespegaChat simplifica tu comunicación y mejora tus resultados.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="features-one__single">
                                <div class="features-one__single-icon">
                                    <span class="icon-human-resources-1"></span>
                                </div>
                                <div class="features-one__single-text">
                                    <h4><a href="#">Atención profesional 24/7</a></h4>
                                    <p>Ahorra tiempo y recursos con DespegaChat. Brinda atención profesional y personalizada, las 24 horas del día.</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="features-one__single">
                                <div class="features-one__single-icon">
                                    <span class="icon-human-resources-1"></span>
                                </div>
                                <div class="features-one__single-text">
                                    <h4><a href="#">Conecta, Supervisa y Vende Más</a></h4>
                                    <p>Con DespegaChat integras tus redes sociales, sumas a tu equipo de ventas y supervisas la atención desde el WhatsApp de tu empresa, todo en un solo lugar.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!--End Why Choose One Left-->
    
                <!--Start Why Choose One Right-->
                <div class="col-xl-6 col-lg-6">
                    <div class="why-choose-one__right wow slideInRight animated clearfix animated" 
                         data-wow-delay="0ms" data-wow-duration="1500ms" 
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInRight;">
                        <div class="why-choose-one__right-img clearfix">
                            <img src="https://marketingdespega.com/storage/uploads/cms/items/20240725021720.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!--End Why Choose One Right-->
    
            </div>
        </div>
    </section>

    <section style="padding: 160px 0px;">
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

    {{-- <section style="padding: 120px 0px; background: #833fdb;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center; color: #fff;">
                        Toda tu comunicación y equipo de ventas, reunidos en un solo lugar.
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-4 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 145px;">
                            <h3>Unifica tu camunicación</h3>
                            <p>Integra Messenger, Instagram y WhatsApp en un solo lugar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                     <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 145px;">
                            <h3>Agiliza la atención al cliente</h3>
                            <p>Todo tu equipo comercial conectado atendiendo y cerrando más negocios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                     <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 145px;">
                            <h3>Supervisa a todo tu equipo</h3>
                            <p>Supervisa las conversaciones con los clientes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section style="padding: 120px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1 style="font-size: 50px; text-align:center;">
                        Integra tu WhatsApp con aplicaciones externas
                    </h1>
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/integracion.png') }}" alt="">
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    
    <section style="padding: 120px 0px; background: #f8f8f8;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        Funciones de Marketing que te facilitarán la vida y aumentarán tus ventas con WhatsApp.
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Chat Multiagente</h3>
                            <p>Delegue el trabajo creando usuarios con varios permisos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Chat de WhatsApp</h3>
                            <p>Te brindamos una experiencia de mensajería intuitiva, sin complicaciones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Bots 24/7</h3>
                            <p>Crea respuestas automáticas a las preguntas frecuentes. También puedes usar bots inteligentes con IA.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>API para conectarse a otros servicios</h3>
                            <p>Conexión perfecta entre diferentes servicios, lo que permite compartir datos e integrar funciones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Flujos de trabajo</h3>
                            <p>Podrás crear flujos de conversación personalizados para cada etapa del proceso de venta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Múltiples números de teléfono</h3>
                            <p>Admite varios números de teléfono para la misma cuenta comercial de WhatsApp.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Botones interactivos</h3>
                            <p>Los bots interactivos brindan respuestas inteligentes y atractivas, además de imágenes, documentos, videos, audios y botones interactivos para mejorar la interacción del usuario.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Gestión de plantillas</h3>
                            <p>Maneje las plantillas directamente dentro de la aplicación sin necesidad de visitar Meta para crear plantillas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp animated" 
                     data-wow-delay="0ms" data-wow-duration="1500ms" 
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; text-align:center;">
                    <div class="features-one__single">
                        <div class="features-one__single-text" style="height: 115px;">
                            <h3>Administrar contactos</h3>
                            <p>Importe y exporte contactos sin esfuerzo usando el formato XLSX.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

@stop