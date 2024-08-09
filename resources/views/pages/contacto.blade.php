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
                                <li class="active">Contacto</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <br>
    <!--Contact Page Start-->
    <section class="contact-page" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-chat"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4><a href="tel:123456789">92 666 888 0000</a></h4>
                            <p>Llamanos</p>
                        </div>
                    </div>
                    
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-message-1"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4><a href="mailto:info@templatepath.com">info@company.com</a></h4>
                            <p>Envia un email</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Nombres Completos" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Correo Electrónico" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Teléfono" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Motivo" name="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Escriba el mensaje"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">
                                        <i class="fa fa-paper-plane" aria-hidden="true" style="font-size: 16px;"></i> Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->




@stop
