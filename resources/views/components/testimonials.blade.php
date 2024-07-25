<section class="testimonials-one clearfix">
    <div class="auto-container">
        <div class="section-title text-center">
            <span class="section-title__tagline">{{ $titles[0]->item->content }}</span>
            <h2 class="section-title__title">{{ $titles[1]->item->content }}</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonials-one__wrapper">
                    <div class="testimonials-one__pattern"><img
                            src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}"
                            alt="" />
                    </div>
                    <div class="shape1"><img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}"
                            alt="" />
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                @foreach ($data as $k => $group)  
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">
                                            {{ $group->item->items[0]->content }}
                                        </h4>
                                        <p class="testimonials-one__single-text">
                                            {{ $group->item->items[1]->content }}
                                        </p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ asset('storage/'.$group->item->items[2]->content) }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>{{ $group->item->items[3]->content }}</h5>
                                                <p>{{ $group->item->items[4]->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img1.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>Kevin Martin</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img2.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>Christine Eve</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img3.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>David Cooper</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img1.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>Kevin Martin</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img2.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>Christine Eve</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img3.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>David Cooper</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="testimonials-one__single-inner">
                                        <h4 class="testimonials-one__single-title">Amazing Courses</h4>
                                        <p class="testimonials-one__single-text">Lorem ipsum is simply free
                                            text
                                            dolor sit amet, consectetur notted adipisicing elit sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <div class="testimonials-one__single-client-info">
                                            <div class="testimonials-one__single-client-info-img">
                                                <img src="{{ URL('themes/imazaweb/images/testimonial/testimonials-v1-client-info-img1.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="testimonials-one__single-client-info-text">
                                                <h5>Kevin Martin</h5>
                                                <p>Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
