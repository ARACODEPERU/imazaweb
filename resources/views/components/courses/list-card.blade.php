
    <section class="courses-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline"> {{ $courses_title[0]->content }} </span>
                <h2 class="section-title__title"> {{ $courses_title[1]->content }}</h2>
            </div>
            <div class="row">

                @foreach ($courses as $course )
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                            <div class="courses-one__single-img">
                                <img src="{{ $course->image }}"
                                    alt="" />
                                <div class="overlay-text">
                                    <p>{{ $course->category_description }}</p>
                                </div>
                            </div>
                            <div class="courses-one__single-content">
                                {{-- <div class="courses-one__single-content-overlay-img">
                                    <img width="32" height="32" src="{{ asset('storage/'.$course->course->teacher->person->image) }}"
                                        alt="" />
                                </div>
                                <h6 class="courses-one__single-content-name">{{ $course->course->teacher->person->full_name }}</h6> --}}
                                <h4 class="courses-one__single-content-title">
                                    <a href="{{ route('web_curso_descripcion', $course->id) }}">
                                        {{ $course->name }}
                                    </a>
                                </h4>
                                <p class="course-details__new-courses-price" style="margin-bottom: 5px;">S/ {{ $course->price }}</p>
                                <a onclick="agregarAlCarrito({ id: {{ $course->id }}, nombre: '{{ $course->name }}', precio: {{ $course->price }} })" class="thm-btn" style="padding: 5px 15px; font-size: 11px;">
                                    <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 16px;"></i> Agregar al carrito
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="courses-one__single-img">
                            <img src="{{ URL('themes/imazaweb/images/resources/courses-v1-img2.jpg') }}"
                                alt="" />
                            <div class="overlay-text">
                                <p>free</p>
                            </div>
                        </div>
                        <div class="courses-one__single-content">
                            <div class="courses-one__single-content-overlay-img">
                                <img src="{{ URL('themes/imazaweb/images/resources/courses-v1-overlay-img2.png') }}"
                                    alt="" />
                            </div>
                            <h6 class="courses-one__single-content-name">Christine Eve</h6>
                            <h4 class="courses-one__single-content-title"><a href="course-details.html">Become a
                                    React Developer</a></h4>
                            <div class="courses-one__single-content-review-box">
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
                            </div>
                            <p class="courses-one__single-content-price">$30.00</p>
                            <ul class="courses-one__single-content-courses-info list-unstyled">
                                <li>2 Lessons</li>
                                <li>10 Hours</li>
                                <li>Beginner</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="categories-one__btn text-center">
                <a href="{{ route('web_cursos') }}" class="thm-btn">Todos los Cursos</a>
            </div>
        </div>
    </section>
