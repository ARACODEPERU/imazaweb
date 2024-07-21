<section class="main-slider main-slider-one">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

        <div class="swiper-wrapper">
            
            @foreach ($sliders as $k => $slide)
            <div class="swiper-slide">
                <div class="shape1"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape1.png') }}"
                        alt="" />
                </div>
                <div class="shape2"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape2.png') }}"
                        alt="" />
                </div>
                <div class="image-layer"
                    style="background-image:url({{ $slide->item->items[0]->content }})">
                    
                    <img src="{{ $slide->item->items[0]->content }}" class="img-fluid" alt="img" />
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__content-tagline">
                            <h2>{{ $slide->item->items[1]->content }}</h2>
                        </div>
                        <h2 class="main-slider__content-title" style="width: 50%;">
                            {{ $slide->item->items[2]->content }}
                        </h2>
                        <p class="main-slider__content-text" style="width: 45%;">
                            {{ $slide->item->items[3]->content }}
                        </p>
                        <div class="main-slider__content-btn">
                            <a href="{{ $slide->item->items[4]->content }}" class="thm-btn">Descubrir Más</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--
            <div class="swiper-slide">
                <div class="shape1"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape1.png') }}"
                        alt="" />
                </div>
                <div class="shape2"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape2.png') }}"
                        alt="" />
                </div>
                <div class="image-layer"
                    style="background-image: url({{ URL('themes/imazaweb/images/slider/slider_01.jpg') }});">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__content-tagline">
                            <h2>#Capacitación</h2>
                        </div>
                        <h2 class="main-slider__content-title">Título <br>vendedor</h2>
                        <p class="main-slider__content-text">Aqui vendria una breve descripción
                            <br> del servicio 
                        </p>
                        <div class="main-slider__content-btn">
                            <a href="#" class="thm-btn">Descubrir Más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="shape1"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape1.png') }}"
                        alt="" />
                </div>
                <div class="shape2"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape2.png') }}"
                        alt="" />
                </div>
                <div class="image-layer"
                    style="background-image: url({{ URL('themes/imazaweb/images/slider/slider_01.jpg') }});">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__content-tagline">
                            <h2>#Suscripción</h2>
                        </div>
                        <h2 class="main-slider__content-title">Título <br>vendedor</h2>
                        <p class="main-slider__content-text">Aqui vendria una breve descripción
                            <br> del servicio 
                        </p>
                        <div class="main-slider__content-btn">
                            <a href="#" class="thm-btn">Descubrir Más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="shape1"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape1.png') }}"
                        alt="" />
                </div>
                <div class="shape2"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape2.png') }}"
                        alt="" />
                </div>
                <div class="image-layer"
                    style="background-image: url({{ URL('themes/imazaweb/images/slider/slider_01.jpg') }});">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__content-tagline">
                            <h2>#Automatización</h2>
                        </div>
                        <h2 class="main-slider__content-title">Título <br>vendedor</h2>
                        <p class="main-slider__content-text">Aqui vendria una breve descripción
                            <br> del servicio 
                        </p>
                        <div class="main-slider__content-btn">
                            <a href="#" class="thm-btn">Descubrir Más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="shape1"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape1.png') }}"
                        alt="" />
                </div>
                <div class="shape2"><img src="{{ URL('themes/imazaweb/images/shapes/slider-v1-shape2.png') }}"
                        alt="" />
                </div>
                <div class="image-layer"
                    style="background-image: url({{ URL('themes/imazaweb/images/slider/slider_01.jpg') }});">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <div class="main-slider__content-tagline">
                            <h2>#Agencia</h2>
                        </div>
                        <h2 class="main-slider__content-title">Título <br>vendedor</h2>
                        <p class="main-slider__content-text">Aqui vendria una breve descripción
                            <br> del servicio 
                        </p>
                        <div class="main-slider__content-btn">
                            <a href="#" class="thm-btn">Descubrir Más</a>
                        </div>
                    </div>
                </div>
            </div>
             -->
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <span class="icon-left"></span>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <span class="icon-right"></span>
            </div>
        </div>

    </div>
</section>
