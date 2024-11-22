@extends('layouts.webpage')

@section('content')
    {{-- <x-home.slider /> --}}

    
    <section style="padding: 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center;">
                        "Eleva la experiencia de tus clientes y haz crecer tu negocio con Despega Chat"
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

    <!--Features One Start-->
    <x-features />
    <!--Features One End-->
    <!--About One Start-->
    <x-about />
    <!--About One End-->
    <!--Courses One Start-->
    {{-- <x-courses.list-card /> --}}
    <!--Courses One End-->
    <!--Registration One Start-->
    <x-register />
    <!--Registration One End-->
    <!--Categories One Start-->
    <x-courses.category-list-card />
    <!--Categories One End-->
    <!--Testimonials One Start-->
    <x-testimonials />
    <!--Testimonials One End-->
    <!--Company Logos One Start-->
    {{-- <x-company-clients /> --}}
    <!--Company Logos One End-->
    <!--Why Choose One Start-->
    <x-why-choose-one />
    <!--Why Choose One End-->
    <!--Blog One Start-->
    <x-blog.presentation />
    <!--Blog One End-->
    <!--Start Newsletter One-->
    {{-- <x-subscription /> --}}
    <!--End Newsletter One-->
@stop
