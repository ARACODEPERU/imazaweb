@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{ route('index_main') }}">Home</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    
    <!--Blog One Start-->
    <section class="blog-one blog-one--blog">
        <div class="container">
            <div class="row">
                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/blog/blog-v1-img1.jpg') }}" alt=""/>
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                    <li><a href="#"><span class="icon-user"></span>Admin  </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers Stand out in Discussions</a></h2>
                            <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by copytyping refreshing the whole area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/blog/blog-v1-img1.jpg') }}" alt=""/>
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                    <li><a href="#"><span class="icon-user"></span>Admin  </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers Stand out in Discussions</a></h2>
                            <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by copytyping refreshing the whole area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/blog/blog-v1-img1.jpg') }}" alt=""/>
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                    <li><a href="#"><span class="icon-user"></span>Admin  </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers Stand out in Discussions</a></h2>
                            <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by copytyping refreshing the whole area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/blog/blog-v1-img1.jpg') }}" alt=""/>
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                    <li><a href="#"><span class="icon-user"></span>Admin  </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers Stand out in Discussions</a></h2>
                            <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by copytyping refreshing the whole area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/blog/blog-v1-img1.jpg') }}" alt=""/>
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                    <li><a href="#"><span class="icon-user"></span>Admin  </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers Stand out in Discussions</a></h2>
                            <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by copytyping refreshing the whole area.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ asset('themes/imazaweb/images/blog/blog-v1-img1.jpg') }}" alt=""/>
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                    <li><a href="#"><span class="icon-user"></span>Admin  </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers Stand out in Discussions</a></h2>
                            <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by copytyping refreshing the whole area.</p>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->
            </div>
        </div>
    </section>
    <!--Blog One End-->




@stop
