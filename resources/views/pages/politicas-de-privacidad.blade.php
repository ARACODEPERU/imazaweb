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
                                <li class="active">Politicas De Privacidad</li>
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
                                <h2 class="section-title__title">Politicas De Privacidad</h2>
                            </div>
                            <h4>Última actualización: [Fecha Actual]</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                En DespegaChat, valoramos tu privacidad y queremos que te sientas seguro al usar nuestros servicios. Esta política te explica cómo cuidamos tu información personal.
                            </p>
                            <br>
                            <h4>1. ¿Qué información recopilamos?</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Cuando te registras en DespegaChat o usas nuestros servicios, podemos recopilar información como:
                            </p>
                            <br>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>1.1.- Datos básicos:</b>
                                Tu nombre, correo electrónico, documento de identidad, país, WhatsApp.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>1.2.- Información de Pago:</b>
                                Si realizas una compra, los datos de tu tarjeta para procesar el pago de forma segura.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>1.3.- Cómo usas DespegaChat:</b>
                                Qué páginas visitas, cuánto tiempo pasas en nuestra web y otras cosas que nos ayudan a mejorar tu experiencia.
                            </p>
                            <br>
                            <h4>2. ¿Para qué usamos tu información?</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Usamos tu información para:
                            </p>
                            <br>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>2.1.- Ofrecerte los mejores servicios:</b> 
                                Personalizar tu experiencia y recomendarte cursos que te puedan interesar.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>2.2.- Procesar tus pagos:</b>
                                Si compras algún curso, necesitamos tus datos para realizar la transacción.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>2.3.- Comunicarnos contigo:</b>
                                Enviarte actualizaciones sobre nuestros servicios, noticias de DespegaChat y ofertas especiales.
                            </p>
                            <br>
                            <h4>3. ¿Compartimos tu información?</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Podemos compartir tu información con empresas que nos ayudan a prestar 
                                nuestros servicios, como las que procesan pagos. Estas empresas están obligadas a proteger tu información también.
                            </p>
                            <br>
                            <h4>4. ¿Cómo protegemos tu información?</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Tomamos medidas de seguridad para proteger tu 
                                información de accesos no autorizados. Sin embargo, recuerda que ningún sistema es completamente infalible.
                            </p>
                            <br>
                            <h4>5. Tus Derechos</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Tienes derecho a:
                            </p>
                            <br>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>5.1.- Saber qué información tenemos sobre ti::</b>
                                Puedes pedirnos una copia de tus datos.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>5.2.- Corregir información incorrecta:</b>
                                Si algún dato está mal, puedes pedirnos que lo corrijamos.
                            </p>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                <b>5.3.- Eliminar tu cuenta:</b>
                                Puedes pedirnos que eliminemos tu cuenta y tus datos.
                            </p>
                            <br>
                            <h4>6. Cambios en esta política</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Podemos actualizar esta política de vez en cuando. Te avisaremos si hay cambios importantes.
                            </p>
                            <br>
                            <h4>7. ¿Tienes preguntas?</h4>
                            <p class="about-two__text-box-text" style="padding: 0px 25px;">
                                Si tienes alguna duda, puedes escribirnos a info@marketingdespega.com
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="padding: 0px 25px;">En resumen, en DespegaChat nos comprometemos a proteger tu privacidad y a usar tu información de forma responsable.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->



@stop
