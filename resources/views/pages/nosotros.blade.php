@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{ route('index_main') }}">Home</a></li>
                                <li class="active">Nosotros</li>
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
                    <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/categories-v1-img2.jpg') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-two__text-box">
                            <div class="section-title">
                                <h2 class="section-title__title">Nuestra Visión</h2>
                            </div>
                            <p class="about-two__text-box-text">
                                Ser aliados clave para empresas de todos los tamaños, proporcionando herramientas de automatización y estrategias de marketing que impulsan el crecimiento y la eficiencia. Nos esforzamos por ofrecer soluciones fáciles de implementar que satisfagan plenamente las necesidades de nuestros clientes, garantizando su competitividad y éxito sostenido.
                            </p>
                            <br>
                            <p class="about-two__text-box-text">
                                En nuestra práctica, nos apasiona ayudar a las empresas a alcanzar su máximo potencial a través de la automatización y el marketing estratégico. Somos tu aliado esencial para impulsar tu crecimiento y eficiencia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->

    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="about-two__bottom-content">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-two__text-box">
                            <div class="section-title">
                                <span class="section-title__tagline">#Lider</span>
                                <h2 class="section-title__title">Jose Ronald Suclupe</h2>
                                <span class="section-title__tagline">
                                    Especialista en Marketing & Automatización | Trainer Comercial
                                </span>
                            </div>
                            <p class="about-two__text-box-text">
                                Soy un apasionado del marketing, la gestión comercial y la atención al cliente, con más de 10 años de experiencia liderando proyectos académicos y dirigiendo equipos comerciales. Como fundador y CEO de DESPEGA Marketing & Automatización, mi misión es impulsar a nuestros clientes hacia el éxito, ayudándolos a alcanzar y superar sus objetivos con soluciones innovadoras y personalizadas. Mi trayectoria se destaca por la capacidad de entender las necesidades de los clientes y convertir esos insights en estrategias efectivas que generen resultados tangibles. Creo en el poder de la automatización y el marketing estratégico para transformar negocios, haciendo que cada interacción con los clientes sea una oportunidad para crear valor y fomentar el crecimiento sostenible.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/categories-v1-img2.jpg') }}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->






@stop
