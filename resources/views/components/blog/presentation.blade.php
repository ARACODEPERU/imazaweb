<section class="blog-one" style=" background: #f8f8f8;">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">{{ $blog_title[0]->content }}</span>
            <h2 class="section-title__title">{{ $blog_title[1]->content }}</h2>
        </div>
        <div class="row">

            @foreach ($blogs as $blog )
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img">
                            <img src="{{ $blog->imagen }}" alt="" />
                        </div>
                        <div class="blog-one__single-content">
                            <div class="blog-one__single-content-overlay-mata-info">
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="icon-clock"></span>{{ formatShortMonth($blog->created_at) }}</a></li>
                                    <li><a href="#"><span class="icon-user"></span>{{ $blog->author->name }} </a></li>
                                    {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                </ul>
                            </div>
                            <h2 class="blog-one__single-content-title">
                                <a href="{{ route('blog_article_by_url', $blog->url) }}">
                                    {{ $blog->title }}
                                </a>
                                </h2>
                            <p class="blog-one__single-content-text">
                                {{ $blog->short_description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ URL('themes/imazaweb/images/blog/blog-v1-img2.jpg') }}" alt="" />
                    </div>
                    <div class="blog-one__single-content">
                        <div class="blog-one__single-content-overlay-mata-info">
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                <li><a href="#"><span class="icon-user"></span>Admin </a></li>
                                <li><a href="#"><span class="icon-chat"></span> Comments</a></li>
                            </ul>
                        </div>
                        <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers
                                Stand out in Discussions</a></h2>
                        <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by
                            copytyping refreshing the whole area.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="blog-one__single">
                    <div class="blog-one__single-img">
                        <img src="{{ URL('themes/imazaweb/images/blog/blog-v1-img3.jpg') }}" alt="" />
                    </div>
                    <div class="blog-one__single-content">
                        <div class="blog-one__single-content-overlay-mata-info">
                            <ul class="list-unstyled">
                                <li><a href="#"><span class="icon-clock"></span>20 June</a></li>
                                <li><a href="#"><span class="icon-user"></span>Admin </a></li>
                                <li><a href="#"><span class="icon-chat"></span> Comments</a></li>
                            </ul>
                        </div>
                        <h2 class="blog-one__single-content-title"><a href="news-details.html">Helping Answers
                                Stand out in Discussions</a></h2>
                        <p class="blog-one__single-content-text">Lorem ipsum is simply free text on used by
                            copytyping refreshing the whole area.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
