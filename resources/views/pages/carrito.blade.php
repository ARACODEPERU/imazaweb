@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
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
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                                <td style="line-height: 2em;">
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                                <td style="line-height: 2em;">
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                                <td style="line-height: 2em;">
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
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
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.3s">
                        <h2 class="sidebar__title">DATOS DEL COMPRADOR</h2>
                        <form class="row g-3">
                            <div class="col-md-12">
                              <label for="inputName" class="form-label">Nombres :</label>
                              <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPaterno" class="form-label">Ap. Paterno :</label>
                              <input type="text" class="form-control" id="inputPaterno">
                            </div>
                            <div class="col-md-6">
                              <label for="inputMaterno" class="form-label">Ap. Materno :</label>
                              <input type="text" class="form-control" id="inputMaterno">
                            </div>
                            <div class="col-md-12">
                              <label for="inputDoc" class="form-label">Tipo de Documento :</label>
                              <select id="inputState" class="form-select">
                                <option selected>Seleccionar</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="inputDNI" class="form-label">DNI :</label>
                              <input type="text" class="form-control" id="inputDNI">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPhone" class="form-label">Teléfono :</label>
                              <input type="text" class="form-control" id="inputPhone">
                            </div>
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">Correo Electrónico :</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="thm-btn" style="padding: 10px 20px;">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp; Comprar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
