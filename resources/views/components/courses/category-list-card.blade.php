<section class="categories-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">{{ $services[0]->content }}</span>
            <h2 class="section-title__title">{{ $services[1]->content }}</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="categories-one__wrapper">
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <a href="">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{ asset('storage/'.$services[2]->content) }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">01</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>{{ $services[3]->content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <a href="">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{ URL('themes/imazaweb/images/resources/categories-v1-img2.jpg') }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">2</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>Art & Design</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <div class="categories-one__single">
                                <div class="categories-one__single-img">
                                    <img src="{{ URL('themes/imazaweb/images/resources/categories-v1-img3.jpg') }}"
                                        alt="" />
                                    <div class="categories-one__single-overlay">
                                        <div class="categories-one__single-overlay-text1">
                                            <p style="color: #fff;">30 full courses</p>
                                        </div>
                                        <div class="categories-one__single-overlay-text2">
                                            <h4>Art & Design</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="categories-one__single">
                                <div class="categories-one__single-img">
                                    <img src="{{ URL('themes/imazaweb/images/resources/categories-v1-img4.jpg') }}"
                                        alt="" />
                                    <div class="categories-one__single-overlay">
                                        <div class="categories-one__single-overlay-text1">
                                            <p style="color: #fff;">30 full courses</p>
                                        </div>
                                        <div class="categories-one__single-overlay-text2">
                                            <h4>Art & Design</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>
                </div>
                <div class="categories-one__btn text-center">
                    <a href="#" class="thm-btn">view all courses</a>
                </div>
            </div>
        </div>
    </div>
</section>
