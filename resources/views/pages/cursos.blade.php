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
                <span class="section-title__tagline">Consultar nueva lista</span>
                <h2 class="section-title__title">Explora Cursos - Talleres</h2>
            </div>

            <div class="row">
                <!--Start case-studies-one Top-->
                <div class="courses-one--courses__top">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="courses-one--courses__menu-box">
                            <ul class="project-filter clearfix post-filter has-dynamic-filters-counter list-unstyled">
                                <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                                <li data-filter=".featured"><span class="filter-text">Featured</span></li>
                                <li data-filter=".business"><span class="filter-text">Business</span></li>
                                <li data-filter=".photography"><span class="filter-text">Photography</span></li>
                                <li data-filter=".development"><span class="filter-text">Development</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End case-studies-one Top-->
            </div>


            <div class="row filter-layout masonary-layout">
                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item development business">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item development business featured">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img2.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item photography filter-item development">
                    <div class="courses-one__single wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img8.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item photography development">
                    <div class="courses-one__single wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img8.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item development photography featured">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img8.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item business development photography">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img8.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item featured photography development">
                    <div class="courses-one__single wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img8.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->

                <!--Start Single Courses One-->
                <div class="col-xl-3 col-lg-6 col-md-6 filter-item photography featured">
                    <div class="courses-one__single wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/resources/courses-v1-img8.jpg') }}" alt=""/>
                            <div class="overlay-text">
                                <p>Categoria</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a React Developer</a></h4>
                            <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ 30.00</p>
                            <a href="" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Single Courses One-->
            </div>
        </div>
    </section>
    <!--Courses One End-->


@stop