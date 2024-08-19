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
                                <li class="active">Imagen Profesional</li>
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
                        <p class="about-two__text-box-text">
                            Ofrecemos tarjetas personales en la web por un año con una inversión muy accesible. 
                            Con estas tarjetas, podrás detallar los productos o servicios que brindas, asegurando 
                            que tus clientes siempre tengan un medio para contactarte. 
                        </p>
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
                        <h4>Beneficios:</h4>
                        <ul style="list-style: none;">
                            <li>
                                <b>•	Visibilidad continua: </b> Mantendrás presencia en línea permanente,
                                facilitando que tus clientes te encuentren y se comuniquen contigo en todo momento.
                            </li>
                            <li>
                                <b>•	Información detallada: </b> Presentarás de manera clara y profesional 
                                todos los productos o servicios que ofreces.
                            </li>
                            <li>
                                <b>•	Accesibilidad: </b> Tus clientes podrán acceder a tu información desde 
                                cualquier dispositivo, en todo lugar.
                            </li>
                            <li>
                                <b>•	Profesionalismo: </b> Mejorarás tu imagen profesional con una tarjeta 
                                personal en línea que refleja tu marca y tus valores.
                            </li>
                            <li>
                                <b>•	Integración de redes sociales: </b> Incluye botones para todas tus redes 
                                sociales y opciones de contacto, permitiendo que tus clientes se comuniquen contigo con un solo clic.
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <p class="about-two__text-box-text">
                            Aprovecha esta oportunidad para fortalecer tu presencia en línea y mantener una 
                            comunicación fluida con tus clientes.
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        
                        <h4 style="color: #833fdb; text-align:center">
                            Al elegirnos obtienes más que una agencia de consultoría. Obtienes un socio estratégico 
                            que te acompañará en cada paso del camino hacia el éxito.
                        </h4>
                        <br>
                        
                        <h4 style="color: #833fdb; text-align:center">
                            ¡Tu éxito es nuestro éxito!
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->



@stop
