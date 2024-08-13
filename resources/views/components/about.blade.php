<!--About One Start-->
<section class="about-one clearfix">
    <div class="container">
        <div class="row">
            <!-- Start About One Left-->
            <div class="col-xl-6">
                <div class="about-one__left">
                    <ul class="about-one__left-img-box list-unstyled clearfix">
                        <li class="about-one__left-single">
                            <div class="about-one__left-img1">
                                <img src="{{ asset('storage/'.$nosotrosPresentacionArea[7]->content) }}" alt="" />
                            </div>
                        </li>
                        <li class="about-one__left-single">
                            <div class="about-one__left-img2">
                                <img src="{{ asset('storage/'.$nosotrosPresentacionArea[8]->content) }}" alt="" />
                            </div>
                        </li>
                    </ul>
                    <div class="about-one__left-overlay"  style="width: 20%;">
                        <div class="icon">
                            <span class="icon-relationship"></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About One Left-->


            <!-- Start About One Right-->
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title">
                        <span class="section-title__tagline">{{ $nosotrosPresentacionArea[0]->content }}</span>
                        <h2 class="section-title__title">{{ $nosotrosPresentacionArea[1]->content }}</h2>
                    </div>
                    <div class="about-one__right-inner">
                        <p class="about-one__right-text">
                            {{ $nosotrosPresentacionArea[2]->content }}
                        </p>
                        <ul class="about-one__right-list list-unstyled">
                            <li class="about-one__right-list-item">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $nosotrosPresentacionArea[3]->content }}</p>
                                </div>
                            </li>

                            <li class="about-one__right-list-item">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $nosotrosPresentacionArea[4]->content }}</p>
                                </div>
                            </li>

                            <li class="about-one__right-list-item">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $nosotrosPresentacionArea[5]->content }}</p>
                                </div>
                            </li>

                            <li class="about-one__right-list-item">
                                <div class="icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $nosotrosPresentacionArea[6]->content }}</p>
                                </div>
                            </li>
                        </ul>

                        <div class="about-one__btn">
                            <a href="{{ route('web_nosotros') }}" class="thm-btn">Más sobre nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About One Right-->
        </div>
    </div>
</section>
<!--About One End-->
