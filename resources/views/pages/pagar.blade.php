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
                                <li class="active">Mi Carrito</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="courses-one courses-one--courses">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <table class="table wow fadeInUp animated" data-wow-delay="0.1s">
                        <thead class="table-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.2s" style="padding: 15px 25px;">
                        <h2 class="sidebar__title" style="margin-top: 10px;">
                            <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; TOTAl : &nbsp; S/ 450.00
                        </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.2s" style="padding: 15px 25px;">
                        <h2 class="sidebar__title">JESÚS ANAYA AGUIRRE</h2>
                        <p>
                            Agradecemos su preferencia por nuestros productos. Por favor, proceda a registrar 
                            sus datos para confirmar la compra.
                        </p>
                    </div>
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.3s">
                        <h2 class="sidebar__title">AQUI VENDRIA EL MERCADO PAGO INTEGRADO COMO CELMOVIL</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
