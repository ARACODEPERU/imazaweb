@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('storage/'.$banner->content) }});">
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
                @foreach ($articles as $article)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ $article->imagen }}" alt=""/>
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span class="icon-clock"></span>{{ formatShortMonth($article->created_at) }}</a></li>
                                        <li><a href="#"><span class="icon-user"></span>{{ $article->author->name }}</a></li>
                                        {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                    </ul>
                                </div>
                                <h2 class="blog-one__single-content-title"><a href="{{ route('blog_article_by_url', $article->url) }}">{{ $article->title }}</a></h2>
                                <p class="blog-one__single-content-text">{{ $article->short_description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div>
                    {{ $articles->links() }}
                </div>

                <!--End Single Blog One-->
            </div>
        </div>
    </section>
    <!--Blog One End-->




@stop
