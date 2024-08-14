@extends('layouts.webpage')

@section('content')


    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        {{-- <div class="page-header__title">
                            <h2>Todos muestros cursos y talleres</h2>
                        </div> --}}
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


    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="blog-one__single style2">
                            <div class="blog-one__single-img">
                                <img src="{{ $article->imagen }}" alt="" />
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span
                                                    class="icon-clock"></span>{{ formatShortMonth($article->created_at) }}</a>
                                        </li>
                                        <li><a href="#"><span class="icon-user"></span>{{ $article->author->name }}
                                            </a></li>
                                        {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                    </ul>
                                </div>
                                <h1 class="blog-one__single-content-title">
                                    {{ $article->title }}
                                </h1>
                            </div>
                        </div>

                        @if (Auth::check())
                            {!! $article->content_text !!}
                        @else
                            <div class="hidde-5">
                                {!! $article->content_text !!}
                            </div>
                            <div class="about-one__btn" 
                                 style=" padding: 20px; text-align: left; border: 2px solid #c843be; border-radius: 10px;">
                                <p>
                                    <b>Disfruta de contenido gratuito.</b>
                                    <br> 
                                    Si eres nuevo, solo regístrate para continuar leyendo. Si ya eres suscriptor, inicia sesión.
                                </p>
                                <a href="" class="thm-btn" style="padding: 5px 25px;" data-bs-toggle="modal"
                                    data-bs-target="#login">
                                    Continuar leyendo
                                </a>
                            </div>
                        @endif

                        <style>
                            .hidde-5 {
                                overflow: hidden;
                                max-height: 15em;
                                line-height: 1.2em;
                            }
                        </style>


                        <!--Start News Details Bottom -->
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Tags</span>
                                @foreach ($article->keywords as $tag)
                                    <a href="#">{{ $tag }}</a>
                                @endforeach
                            </p>
                            {{-- <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <!--End News Details Bottom -->

                        <!--Start Author One -->
                        {{-- <div class="author-one">
                            <div class="author-one__image">
                                <img src="assets/images/blog/news-details-author.jpg" alt="">
                            </div>
                            <div class="author-one__content">
                                <h3>Kevin Martin</h3>
                                <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                            </div>
                        </div> --}}
                        <!--End Author One -->

                        <!--Start Comment One -->
                        {{-- <div class="comment-one">
                            <h3 class="comment-one__title">2 Comments</h3>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-img1.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__content-text">
                                            <h3>David Marks<span>3 hours ago</span></h3>
                                        </div>
                                        <div class="comment-one__content-btn">
                                            <a href="#" class="thm-btn">Reply</a>
                                        </div>
                                    </div>
                                    <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs <br>condmentum lightly believable. If you are going to use a of <br> you need to be sure there.</p>
                                </div>
                            </div>
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-img2.png" alt="">
                                </div>
                                <div class="comment-one__content">
                                    <div class="comment-one__content-top">
                                        <div class="comment-one__content-text">
                                            <h3>David Marks<span>3 hours ago</span></h3>
                                        </div>
                                        <div class="comment-one__content-btn">
                                            <a href="#" class="thm-btn">Reply</a>
                                        </div>
                                    </div>
                                    <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs <br>condmentum lightly believable. If you are going to use a of <br>you need to be sure there.</p>
                                </div>
                            </div>
                        </div> --}}
                        <!--End Comment One -->

                        <!--Start Comment Form -->
                        {{-- <div class="comment-form">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                        <!--End Comment Form -->
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        {{-- <div class="sidebar__single sidebar__search wow fadeInUp animated animated animated" data-wow-delay="0.1s" data-wow-duration="1200m">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div> --}}
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.1s">
                            <h3 class="sidebar__title">Curso recomendado</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img1.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.1s">
                            <h3 class="sidebar__title">Posts recientes</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($latest_articles as $item)
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img style="width: 50px;" src="{{ $item->imagen }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p><a href="#"><i
                                                                class="far fa-user-circle"></i>{{ $item->author->name }}</a>
                                                    </p>
                                                    <h3><a href="news-details.html">{{ $item->title }}</a></h3>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__category wow fadeInUp animated" data-wow-delay="0.3s">
                            <h3 class="sidebar__title">Todas las categorias</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                @foreach ($categories as $category)
                                    <li><a href="#"><i
                                                class="far fa-arrow-alt-circle-right"></i>{{ $category->description }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- <div class="sidebar__single sidebar__tags wow fadeInUp animated" data-wow-delay="0.5s">
                            <h3 class="sidebar__title">Tags</h3>
                            <ul class="sidebar__tags-list list-unstyled">
                                    <li><a href="#">{{ $etiqueta }}</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--News Details End-->

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="login-7">
                    <div class="login-7-inner">
                        <div id="particles-js">
                            <canvas class="particles-js-canvas-el" width="1903" height="952"
                                style="width: 100%; height: 100%;"></canvas>
                        </div>
                        <div class="container">
                            <div id="divLogin" class="row">
                                <div class="col-lg-12">
                                    <div class="form-info">
                                        <div class="form-section align-self-center">
                                            <div class="btn-section clearfix">
                                                <button id="btnLogin1" onclick="displayLogin()"
                                                    class="link-btn active btn-1 active-bg">
                                                    Login
                                                </button>
                                                <button id="btnRegister1" onclick="displayRegister()"
                                                    class="link-btn btn-2 default-bg">
                                                    Registrar
                                                </button>
                                            </div>
                                            <div class="logo">
                                                <a href="/">
                                                    <img src="{{ $company->logo }}" alt="logo">
                                                </a>
                                            </div>
                                            <h1>Bienvenido!</h1>
                                            <div class="typing">
                                                <h3>Iniciar sesión en su cuenta</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                            <form action="{{ route('web_login') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Correo Electrónico</label>
                                                    <input name="email" type="email" class="form-control"
                                                        id="email" placeholder="Correo Electrónico"
                                                        aria-label="Email Address" value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label for="password" class="form-label">Contraseña</label>
                                                    <input name="password" type="password" class="form-control"
                                                        autocomplete="off" id="password" placeholder="Contraseña"
                                                        aria-label="Password" value="{{ old('password') }}">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="checkbox form-group clearfix">
                                                    <div class="form-check float-start mb-0">
                                                        <input class="form-check-input" type="checkbox" id="rememberme">
                                                        <label class="form-check-label" for="rememberme">
                                                            Recordarme
                                                        </label>
                                                    </div>
                                                    <a href="forgot-password-7.html"
                                                        class="float-end forgot-password">¿Olvidaste tu contraseña?</a>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg btn-theme">Login</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="divRegister" class="row" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-info">
                                        <div class="form-section align-self-center">
                                            <div class="btn-section clearfix">
                                                <button id="btnLogin2" onclick="displayLogin()"
                                                    class="link-btn active btn-1 default-bg">
                                                    Login
                                                </button>
                                                <button id="btnRegister2" onclick="displayRegister()"
                                                    class="link-btn btn-2 active-bg">
                                                    Registrar
                                                </button>
                                            </div>
                                            <div class="logo">
                                                <a href="/">
                                                    <img src="assets/img/logos/logo-2.png" alt="logo">
                                                </a>
                                            </div>
                                            <h1>Bienvenido!</h1>
                                            <div class="typing">
                                                <h3>Crea una cuenta</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                            <form action="{{ route('web_register') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name" class="form-label">Nombres:</label>
                                                            <input name="name" type="text" class="form-control"
                                                                id="name" placeholder="Nombres"
                                                                aria-label="Full Name" value="{{ old('name') }}">
                                                        </div>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="app" class="form-label">Ap.
                                                                Paterno:</label>
                                                            <input name="app" type="text" class="form-control"
                                                                id="app" placeholder="Ap. Paterno"
                                                                aria-label="Full Name" value="{{ old('app') }}">
                                                        </div>
                                                        @error('app')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="apm" class="form-label">Ap.
                                                                Materno:</label>
                                                            <input name="apm" type="text" class="form-control"
                                                                id="apm" placeholder="Ap. Materno"
                                                                aria-label="Full Name" value="{{ old('apm') }}">
                                                        </div>
                                                        @error('apm')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="dni" class="form-label">DNI:</label>
                                                            <input name="dni" type="text" class="form-control"
                                                                id="dni" placeholder="DNI" aria-label="Full Name"
                                                                value="{{ old('dni') }}">
                                                        </div>
                                                        @error('dni')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone" class="form-label">Teléfono:</label>
                                                            <input name="phone" type="text" class="form-control"
                                                                id="phone" placeholder="Teléfono"
                                                                aria-label="Full Name" value="{{ old('phone') }}">
                                                        </div>
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email_register" class="form-label">Correo
                                                                Electrónico</label>
                                                            <input name="email_register" type="email"
                                                                class="form-control" id="email_register"
                                                                placeholder="Correo Electrónico"
                                                                aria-label="Email Address"
                                                                value="{{ old('email_register') }}">
                                                        </div>
                                                        @error('email_register')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group checkbox clearfix">
                                                    <div class="clearfix float-start">
                                                        <div class="form-check mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="rememberme">
                                                            <label class="form-check-label" for="rememberme">
                                                                Estoy de acuerdo con las politicas de privacidad
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg btn-theme">Registrar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .img-fluid {
            max-width: 100% !important;
            height: auto;
        }

        .form-control:focus {
            box-shadow: none;
        }

        /** Login 7 start **/
        .login-7-inner {
            position: relative;
            width: 100%;
            min-height: 100vh;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            padding: 30px 0;
        }

        .login-7-inner:before {
            content: "";
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
            background: url(../img/img-7.jpg) top left repeat;
            z-index: -99;
        }

        .login-7-bg {
            background-image: linear-gradient(to bottom, #9143f9, #23067a);
        }

        .login-7-inner #particles-js {
            background-size: cover;
            background-position: 50% 50%;
            position: fixed;
            min-height: 100vh;
            width: 100%;
            z-index: -999;
        }

        .login-7 h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: 'Jost', sans-serif;
        }

        .login-7 .logo {
            top: 80px;
            position: absolute;
        }

        .login-7 .logo img {
            height: 30px;
        }

        .login-7 .form-info {
            background: #fff;
            border-radius: 0;
            max-width: 580px;
            margin: 0 auto;
        }

        .login-7 .form-section {
            padding: 160px 80px 60px;
            border-radius: 10px 0 0 10px;
            text-align: left;
            position: relative;
        }

        .login-7 label {
            color: #535353;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .login-7 .form-section p {
            font-size: 16px;
            color: #535353;
        }

        .login-7 .form-section a {
            color: #535353;
            text-decoration: none;
            font-size: 16px;
        }

        .login-7 .form-section p {
            margin-bottom: 30px;
        }

        .login-7 .form-section ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .login-7 .form-section .social-list li {
            display: inline-block;
            margin-bottom: 5px;
        }

        .login-7 .form-section .thembo {
            margin-left: 4px;
        }

        .login-7 .form-section h1 {
            font-size: 27px;
            font-weight: 600;
            color: #7878ff;
        }

        .login-7 .form-section h3 {
            margin: 0 0 35px;
            font-size: 20px;
            font-weight: 500;
            color: #040404;
        }

        .login-7 .form-section .typing>* {
            overflow: hidden;
            white-space: nowrap;
            animation: typingAnim 3s steps(50);
            text-transform: uppercase;
        }

        @keyframes typingAnim {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        .login-7 .form-section .form-group {
            margin-bottom: 25px;
        }

        .login-7 .form-section .form-control {
            padding: 10px 20px;
            font-size: 16px;
            outline: none;
            height: 50px;
            color: #535353;
            border-radius: 3px;
            font-weight: 500;
            border: 1px solid #d3d3d3 !important;
        }

        .login-7 .form-section .checkbox .terms {
            margin-left: 3px;
        }

        .login-7 .form-section .terms {
            margin-left: 3px;
        }

        .login-7 .btn-section {
            border-radius: 50px;
            margin-bottom: 0;
            display: inline-block;
            top: 80px;
            position: absolute;
            right: 90px;
        }

        .login-7 .btn-section .link-btn {
            font-size: 14px;
            float: left;
            text-align: center;
            width: 100px;
            padding: 6px 5px;
            margin-left: 5px;
            color: #535353;
            border-radius: 3px;
            background: #fff;
            border: 1px solid #d3d3d3;
        }

        .login-7 .btn-section .active-bg {
            color: #fff;
            background: #7878ff;
            border: 1px solid #7878ff;
        }

        .login-7 .btn-section .link-btn:hover {
            color: #fff;
            background: #7878ff;
            border: 1px solid #7878ff;
        }

        .login-7 .form-check-input:focus {
            box-shadow: none;
        }

        .login-7 .form-section .form-check-input {
            width: 20px;
            height: 20px;
            margin-top: 2px;
            border: 1px solid #d3d3d3;
            border-radius: 3px;
            position: absolute;
            background-color: #fff;
        }

        .login-7 .form-check-input:checked {
            background-color: #7878ff;
            border: solid #7878ff;
        }

        .login-7 .form-section .form-check-label {
            padding-left: 5px;
            margin-bottom: 0;
            font-size: 16px;
            color: #535353;
        }

        .login-7 .btn-theme {
            color: #fff;
            text-align: center;
            border: 2px solid transparent;
            display: inline-block;
            position: relative;
            z-index: 1;
            transition: all .7s ease;
            border-radius: 3px;
            font-size: 17px;
            font-weight: 400;
            font-family: 'Jost', sans-serif;
        }

        .login-7 .btn-theme:before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: all .7s ease;
            z-index: -1;
            border-radius: 3px;
        }

        .login-7 .btn-theme:after {
            position: absolute;
            content: "";
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: all .7s ease;
            z-index: -1;
        }

        .login-7 .btn-theme:hover {
            background: transparent;
        }

        .login-7 .btn-theme:hover:before {
            width: 0;
            opacity: 1;
            visibility: visible;
        }

        .login-7 .btn-theme:hover:after {
            width: 0;
            opacity: 1;
            visibility: visible;
        }

        .login-7 .btn-lg {
            padding: 0 50px;
            line-height: 46px;
        }

        .login-7 .btn {
            box-shadow: none !important;
        }

        .login-7 .btn-md {
            padding: 0 45px;
            line-height: 41px;
        }

        .login-7 .btn-primary {
            background: #7878ff;
        }

        .login-7 .btn-primary:before {
            background: #7878ff;
        }

        .login-7 .btn-primary:after {
            background: #7878ff;
        }

        .login-7 .btn-primary:hover {
            color: #7878ff;
            border: 2px solid #7878ff;
        }

        .login-7 .social-list a {
            font-size: 18px;
            margin-right: 15px;
            color: #535353;
        }

        .login-7 .social-list a:hover {
            color: #7878ff;
        }

        @media (max-width: 992px) {
            .login-7-inner:before {
                background: none;
            }

            .login-7 .form-section {
                padding: 120px 34px 40px;
                border-radius: 10px 0 0 10px;
            }

            .login-7 .logo {
                top: 40px;
                left: 40px;
            }

            .login-7 .btn-section {
                top: 40px;
                right: 40px;
            }

            .login-7-bodycolor .ripple-background {
                display: none;
            }
        }

        /** Login 7 end **/
    </style>


@stop
@section('javascripts')
    <script>
        const divLogin = document.getElementById('divLogin');
        const divRegister = document.getElementById('divRegister');

        function displayLogin() {
            divLogin.style.display = 'block';
            divRegister.style.display = 'none';
        }

        function displayRegister() {

            divRegister.style.display = 'block';
            divLogin.style.display = 'none';

        }
    </script>
@stop
