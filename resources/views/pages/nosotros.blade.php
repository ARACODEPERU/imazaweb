@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ $banner->content }});">
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
                            <img src="{{ $visions[3]->content }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-two__text-box">
                            <div class="section-title">
                                <h2 class="section-title__title">{{ $visions[0]->content }}</h2>
                            </div>
                            <p class="about-two__text-box-text">
                                {{ $visions[1]->content }}
                            </p>
                            <br>
                            <p class="about-two__text-box-text">
                                {{ $visions[2]->content }}
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
                                <span class="section-title__tagline">{{ $lider[0]->content }}</span>
                                <h2 class="section-title__title">{{ $lider[1]->content }}</h2>
                                <span class="section-title__tagline">
                                    {{ $lider[2]->content }}
                                </span>
                            </div>
                            <p class="about-two__text-box-text">
                                {{ $lider[3]->content }}
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="about-two__single-img">
                            <img src="{{ $lider[4]->content }}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->






@stop
