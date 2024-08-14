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
                                <li class="active">Cursos</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->



    <!--Courses One Start-->
    <section class="courses-one courses-one--courses">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">{{ $title[0]->content }}</span>
                <h2 class="section-title__title">{{ $title[1]->content }}</h2>
            </div>

            <div class="row">
                <!--Start case-studies-one Top-->
                <div class="courses-one--courses__top">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="courses-one--courses__menu-box">
                            <ul class="project-filter clearfix post-filter has-dynamic-filters-counter list-unstyled">

                                <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                                @foreach ($categories as $category)
                                    <li data-filter=".{{ $category->description }}"><span class="filter-text">{{ $category->description }}</span></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <!--End case-studies-one Top-->
            </div>


            <div class="row filter-layout masonary-layout">
                <!--Start Single Courses One-->
                @foreach ($courses as $course)
                    <div class="col-xl-3 col-lg-6 col-md-6 filter-item {{ $course->category_description }}">
                        <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="courses-one__single-img">
                                <a href="{{ route('web_curso_descripcion', $course->id) }}"><img src="{{ asset('storage/'.$course->course->image) }}" alt=""/></a>
                                <div class="overlay-text">
                                    <p>{{ $course->category_description }}</p>
                                </div>
                            </div>
                            <div class="courses-one__single-content">
                                <h4 class="courses-one__single-content-title"><a href="{{ route('web_curso_descripcion', $course->id) }}">{{ $course->name }}</a></h4>
                                <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ {{ $course->price }}</p>
                                <a href="" onclick="alert({{ $course->id, $course->price }})" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Single Courses One-->


            </div>
        </div>
    </section>
    <!--Courses One End-->


@stop
