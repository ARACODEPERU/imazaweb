<section class="why-choose-one">
    <div class="container">
        <div class="row">
            <!--Start Why Choose One Left-->
            <div class="col-xl-6 col-lg-6">
                <div class="why-choose-one__left">
                    <div class="section-title">
                        <span class="section-title__tagline">{{ $elegirnos[0]->content }}</span>
                        <h2 class="section-title__title">
                            {{ $elegirnos[1]->content }}
                        </h2>
                    </div>
                    <p class="why-choose-one__left-text">
                        {{ $elegirnos[2]->content }}
                    </p>
                    <div class="why-choose-one__left-learning-box">
                        <div class="icon">
                            <span class="icon-professor"></span>
                        </div>
                        <div class="text">
                            <h4>{{ $elegirnos[3]->content }}</h4>
                        </div>
                    </div>
                    <div class="why-choose-one__left-list">
                        <ul class="list-unstyled">
                            <li class="why-choose-one__left-list-single">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $elegirnos[4]->content }}</p>
                                </div>
                            </li>

                            <li class="why-choose-one__left-list-single">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $elegirnos[5]->content }}</p>
                                </div>
                            </li>

                            <li class="why-choose-one__left-list-single">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p> {{ $elegirnos[6]->content }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="categories-one__btn text-left">
                    <a href="{{ route('web_cursos') }}" class="thm-btn">Nuestros Cursos</a>
                </div>
            </div>
            <!--End Why Choose One Left-->

            <!--Start Why Choose One Right-->
            <div class="col-xl-6 col-lg-6">
                <div class="why-choose-one__right wow slideInRight animated clearfix" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="why-choose-one__right-img clearfix">
                        <img src="{{ asset('storage/'.$elegirnos[7]->content) }}" alt="" />
                        
                    </div>
                </div>
            </div>
            <!--End Why Choose One Right-->

        </div>
    </div>
</section>
