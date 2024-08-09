@extends('layouts.webpage')

@section('content')

<!--Page Header Start-->
<section class="page-header clearfix" style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header__wrapper clearfix">
                    <div class="page-header__menu">
                        <ul class="page-header__menu-list list-unstyled clearfix">
                            <li><a href="{{ route('index_main') }}">Home</a></li>
                            <li class="active">{{ $item->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Page Header End-->

    <!--Start Course Details-->
    <section class="course-details">
        <div class="container">
            <div class="row">
                <!--Start Course Details Content-->
                <div class="col-xl-8 col-lg-8">
                    <div class="course-details__content">
                        <!--Start Single Courses One-->
                        <div class="courses-one__single style2 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="courses-one__single-img">
                                <img src="{{ asset($item->image) }}" alt=""/>
                                <div class="overlay-text">
                                    <p>{{ $item->category_description }}</p>
                                </div>
                            </div>
                            <div class="courses-one__single-content">
                                <div class="courses-one__single-content-overlay-img">
                                    <img src="assets/images/resources/course-details-overlay-img.png" alt=""/>
                                </div>
                                <h4 class="courses-one__single-content-title">{{ $item->name }}</h4>
                                <h6 class="courses-one__single-content-name">
                                    <span>{{ formatShortMonth($item->created_at) }}--> Campo no existe</span>
                                </h6>
                                {{-- <div class="courses-one__single-content-review-box">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <div class="rateing-box">
                                        <span>(4)</span>
                                    </div>
                                </div> --}}
                                <div class="course-details__content-text1">
                                    <p>{{ $item->description }}</p>
                                </div>

                            </div>
                        </div>
                        <!--End Single Courses One-->

                        <!--Start Course Details Curriculum-->
                        <div class="course-details__curriculum">
                            <h2 class="course-details__curriculum-title">Plan Curricular</h2>
                            @foreach ( $course->modules as $module )
                                <div class="course-details__curriculum-single">
                                    <h3 class="course-details__curriculum-single-title" style="color: #000;">{{ $module->description }}</h3>
                                    {{-- <p class="course-details__curriculum-single-text">
                                        Aelltes port lacus quis enim var sed efficitur turpis gilla
                                    </p> --}}
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        @foreach ($module->themes as $theme )
                                            <li>
                                                <div class="course-details__curriculum-list-left">
                                                    <div class="course-details__curriculum-list-left-icon">
                                                        <i class="fa fa-play" aria-hidden="true"></i>
                                                    </div>
                                                    <a href="#" class="course-details__curriculum-list-left-title">{{ $theme->description }}</a>
                                                    {{-- <span>Preview</span> --}}
                                                </div>
                                            </li>
                                        @endforeach

                                        {{-- <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__curriculum-list-left-icon">
                                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                                </div>
                                                <a href="#" class="course-details__curriculum-list-left-title">Basic Editing Technology</a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__curriculum-list-left-icon style2">
                                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                                </div>
                                                <a href="#" class="course-details__curriculum-list-left-title">Quiz</a>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div>
                            @endforeach



                        </div>
                        <!--End Course Details Curriculum-->

                        <!--Start Course Details Reviews-->
                        {{-- <div class="course-details__reviews">
                            <h3 class="course-details__reviews-title">Reviews</h3>
                            <div class="course-details__progress-review">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-7 col-md-7">
                                        <div class="course-details__progress clearfix">
                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Excellent</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 90%;"></span>
                                                </div>
                                                <p class="course-details__progress-count">2</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Very Good</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 80%;"></span>
                                                </div>
                                                <p class="course-details__progress-count">1</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Average</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 70%;"></span>
                                                </div>
                                                <p class="course-details__progress-count">1</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Poor</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 0%;" class="no-bubble"></span>
                                                </div>
                                                <p class="course-details__progress-count">0</p>
                                            </div>

                                            <div class="course-details__progress-item">
                                                <p class="course-details__progress-text">Terrible</p>
                                                <div class="course-details__progress-bar">
                                                    <span style="width: 0%;" class="no-bubble"></span>
                                                </div>
                                                <p class="course-details__progress-count">0</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="course-details__review-box">
                                            <h2 class="course-details__review-count">4.6</h2>
                                            <div class="course-details__review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            </div>
                                            <p class="course-details__review-text">30 reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Start Course Details Comment-->
                            <div class="course-details__comment">
                                <div class="course-details__comment-single">
                                    <div class="course-details__comment-img">
                                        <img src="assets/images/resources/course-details-comment-img1.png" alt=""/>
                                    </div>
                                    <div class="course-details__comment-text">
                                        <div class="course-details__comment-text-top">
                                            <h3 class="course-details__comment-text-name">David Marks</h3>
                                            <p>3 hours ago</p>
                                            <div class="course-details__comment-review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            </div>
                                        </div>
                                        <p class="course-details__comment-text-bottom">Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                                    </div>
                                </div>

                                <div class="course-details__comment-single">
                                    <div class="course-details__comment-img">
                                        <img src="assets/images/resources/course-details-comment-img2.png" alt=""/>
                                    </div>
                                    <div class="course-details__comment-text">
                                        <div class="course-details__comment-text-top">
                                            <h3 class="course-details__comment-text-name">Christine Eve</h3>
                                            <p>3 hours ago</p>
                                            <div class="course-details__comment-review-stars">
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                            </div>
                                        </div>
                                        <p class="course-details__comment-text-bottom">Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Course Details Comment-->

                            <div class="course-details__add-review">
                                <h2 class="course-details__add-review-title">Add a Review</h2>
                                <p class="course-details__add-review-text">
                                    Rate this Course?
                                    <a href="#" class="fas fa-star active pd-left"></a>
                                    <a href="#" class="fas fa-star active"></a>
                                    <a href="#" class="fas fa-star active"></a>
                                    <a href="#" class="fas fa-star"></a>
                                    <a href="#" class="fas fa-star"></a>
                                </p>

                                <div class="course-details__add-review-form">
                                    <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your name" name="name">
                                                </div>
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="comment-form__input-box">
                                                    <textarea name="message" placeholder="Write message"></textarea>
                                                </div>
                                                <button type="submit" class="thm-btn comment-form__btn">Submit review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                        <!--End Course Details Reviews-->
                    </div>
                </div>
                <!--End Course Details Content-->

                <!--Start Course Details Sidebar-->
                <div class="col-xl-4 col-lg-4">
                    <div class="course-details__sidebar">
                        <div class="course-details__price wow fadeInUp animated" data-wow-delay="0.1s">
                            <h2 class="course-details__price-amount">S/ {{ $item->price }}<span><del>S/ {{ $item->price*1.2 }}</del></span></h2>
                            <div class="course-details__price-btn">
                                <a href="" onclick="alert({{ $item->id }})" class="thm-btn">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i>
                                    Agregar al Carrito
                                </a>
                            </div>
                        </div>

                        {{-- <div class="course-details__sidebar-meta wow fadeInUp animated" data-wow-delay="0.3s">
                            <ul class="course-details__sidebar-meta-list list-unstyled">
                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-clock"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Durations:<span>10 hours</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-folder-open"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Lectures:<span>6</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-user-circle"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Students:<span> Max 6</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="fas fa-play"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Video:<span>8 hours</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-flag"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Skill Level:<span>Advanced</span></a></p>
                                    </div>
                                </li>

                                <li class="course-details__sidebar-meta-list-item">
                                    <div class="icon">
                                        <a href=""><i class="far fa-bell"></i></a>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">Language:<span>English</span></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}


                        <div class="course-details__new-courses wow fadeInUp animated" data-wow-delay="0.5s"
                             style="padding: 15px 25px; text-align:center;">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="https://api.whatsapp.com/send?phone=51967052506&text=Hola&nbsp;Despega.com&nbsp;me&nbsp;pueden&nbsp;ayudar?"
                                        target="_blanck" class="btn btn-success" style="width: 100%;">
                                        <div style="justify-content: space-between;">
                                            <div style="float: left; padding: 5px;">
                                                <img style="width: 50px;"
                                                    src="{{ asset('themes/imazaweb/images/isotipoNegativo.png') }}" alt="">
                                            </div>
                                            <div style="float: left; padding: 5px;">
                                                Para cualquier consulta <br>
                                                <b>¡Escribenos al whatsapp!</b>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="course-details__new-courses wow fadeInUp animated" data-wow-delay="0.5s">
                            <h3 class="course-details__new-courses-title">Nuevos Cursos</h3>
                            <ul class="course-details__new-courses-list list-unstyled">
                                @foreach ($latest_courses as $latest)
                                    <li class="course-details__new-courses-list-item">
                                        <div class="course-details__new-courses-list-item-img">
                                            <a href="{{ route('web_curso_descripcion', $latest->id) }}"><img src="{{ asset($latest->image) }}" width="90px" alt=""/></a>
                                        </div>
                                        <div class="course-details__new-courses-list-item-content">
                                            <h4 class="course-details__new-courses-list-item-content-title">
                                                <a href="{{ route('web_curso_descripcion', $latest->id) }}">{{ $latest->name }}</a>
                                            </h4>
                                            <p class="course-details__new-courses-price">S/ {{ $latest->price }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Course Details Sidebar-->
            </div>
        </div>
    </section>
    <!--End Course Details-->


@stop
