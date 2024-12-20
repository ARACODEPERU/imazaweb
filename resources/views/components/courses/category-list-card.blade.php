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


                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <a href="{{ $services[4]->content }}">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{ asset('storage/'.$services[3]->content) }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">01</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>{{ $services[2]->content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        {{-- <div class="col-md-2 wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <a href="{{ $services[7]->content }}">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                        <img src="{{ asset('storage/'.$services[6]->content) }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">02</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>{{ $services[5]->content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}

                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            <a href="{{ $services[10]->content }}">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                            <img src="{{ asset('storage/'.$services[9]->content) }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">02</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>{{ $services[8]->content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <a href="{{ $services[13]->content }}">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                            <img src="{{ asset('storage/'.$services[12]->content) }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">03</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>{{ $services[11]->content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 

                        {{-- <div class="col-md-2 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <a href="{{ $services[16]->content }}">
                                <div class="categories-one__single">
                                    <div class="categories-one__single-img">
                                            <img src="{{ asset('storage/'.$services[15]->content) }}"
                                            alt="" />
                                        <div class="categories-one__single-overlay">
                                            <div class="categories-one__single-overlay-text1">
                                                <p style="color: #fff;">05</p>
                                            </div>
                                            <div class="categories-one__single-overlay-text2">
                                                <h4>{{ $services[14]->content }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>  --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
