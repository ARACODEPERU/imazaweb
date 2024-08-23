<div>
    @extends('layouts.webpage')

    @section('content')

        <!--Page Header Start-->
        <section class="page-header clearfix"
            style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
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
                                    <li class="active">Gracias</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Page Header End-->
        <br>
        <section class="courses-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.3s">
                            <h2 class="sidebar__title">Hola Nombre del comprador</h2>
                            <p>
                                A nombre de toda la familia de <b>DESPEGA.COM</b> te damos la bienvenida a nuestra plataformas de
                                estudio, al mismo tiempo te hacemos recordar que cualquier duda puedes comunicarte con 
                                nuestro equipo de asesores.
                            </p>
                            <p>
                                Los accesos al campus virtual han sido enviados a tu correo: <b>connexion.jesus@gmail.com</b>
                            </p>
                            <a href="https://marketingdespega.com/login" target="_blank" class="thm-btn" style="padding: 5px 15px; font-size: 12px;">
                                <i class="fa fa-heart" aria-hidden="true"></i>&nbsp;Gracias por tu compra
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>


    @stop

</div>
