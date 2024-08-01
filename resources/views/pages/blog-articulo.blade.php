@extends('layouts.webpage')

@section('content')


    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>News</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">News</li>
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
                                <img src="{{ $article->imagen }}" alt=""/>
                            </div>
                            <div class="blog-one__single-content">
                                <div class="blog-one__single-content-overlay-mata-info">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span class="icon-clock"></span>{{ formatShortMonth($article->created_at) }}</a></li>
                                        <li><a href="#"><span class="icon-user"></span>{{ $article->author->name }} </a></li>
                                        {{-- <li><a href="#"><span class="icon-chat"></span> Comments</a></li> --}}
                                    </ul>
                                </div>
                                <h2 class="blog-one__single-content-title">
                                    {{ $article->title }}
                                </h2>
                            </div>
                        </div>

                        @if (Auth::check())
                            {!! $article->content_text !!}
                        @else
                            <div class="hidde-5">
                                {!! $article->content_text !!}
                            </div>
                            <div class="about-one__btn" style="text-align: right;">
                                <a href="" class="thm-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Inicia sesión para seguir
                                </a>
                            </div>
                        @endif

                        <style>
                            .hidde-5{
                                overflow: hidden;
                                max-height: 7em;
                                line-height: 1.2em;
                            }
                        </style>


                        <!--Start News Details Bottom -->
                        <div class="news-details__bottom">
                            <p class="news-details__tags">
                                <span>Tags</span>
                                <a href="#">Education</a>
                                <a href="#">Courses</a>
                            </p>
                            <div class="news-details__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!--End News Details Bottom -->

                        <!--Start Author One -->
                        <div class="author-one">
                            <div class="author-one__image">
                                <img src="assets/images/blog/news-details-author.jpg" alt="">
                            </div>
                            <div class="author-one__content">
                                <h3>Kevin Martin</h3>
                                <p>Cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum lightly believable. If you are going to use a of you need to be sure there.</p>
                            </div>
                        </div>
                        <!--End Author One -->

                        <!--Start Comment One -->
                        <div class="comment-one">
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
                        </div>
                        <!--End Comment One -->

                        <!--Start Comment Form -->
                        <div class="comment-form">
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
                        </div>
                        <!--End Comment Form -->
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search wow fadeInUp animated animated animated" data-wow-delay="0.1s" data-wow-duration="1200m">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.1s">
                            <h3 class="sidebar__title">Recent Posts</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img1.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>Admin</a></p>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img2.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>Admin</a></p>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="assets/images/blog/recent-posts-img3.png" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p><a href="#"><i class="far fa-user-circle"></i>Admin</a></p>
                                                <h3><a href="news-details.html">Learn how access to new courses</a></h3>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__category wow fadeInUp animated" data-wow-delay="0.3s">
                            <h3 class="sidebar__title">All Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Programing</a></li>
                                <li class="active"><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Teaching & Academics</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Health & Fitness</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Business</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Art & Design</a></li>
                                <li><a href="#"><i class="far fa-arrow-alt-circle-right"></i>Education</a></li>
                            </ul>
                        </div>

                        <div class="sidebar__single sidebar__tags wow fadeInUp animated" data-wow-delay="0.5s">
                            <h3 class="sidebar__title">Tags</h3>
                            <ul class="sidebar__tags-list list-unstyled">
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Programing</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Teachings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--News Details End-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="login-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 form-section">
                                <div class="form-inner">
                                    <a href="login-5.html" class="logo">
                                        <img src="{{ asset('storage/'.$company->logo_document) }}" alt="logo">
                                    </a>
                                    <h3>Iniciar Sesión</h3>
                                    <form action="#" method="GET">
                                        <div class="form-group form-box">
                                            <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" aria-label="Email Address">
                                        </div>
                                        <div class="form-group form-box">
                                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                                        </div>
                                        <div class="checkbox form-group clearfix">
                                            <div class="form-check float-start">
                                                <input class="form-check-input" type="checkbox" id="rememberme">
                                                <label class="form-check-label" for="rememberme">
                                                    Recordarme
                                                </label>
                                            </div>
                                            <a href="forgot-password-5.html" class="link-light float-end forgot-password">Olvidaste tu password?</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
                                        </div>
                                        <div class="extra-login form-group clearfix">
                                            <span></span>
                                        </div>
                                    </form>
                                    {{-- <div class="clearfix"></div> --}}
                                    {{-- <ul class="social-list">
                                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li>
                                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter twitter-i"></i><span>Twitter</span></a></li>
                                        <li><a href="#" class="google-bg"><i class="fa fa-google google-i"></i><span>Google</span></a></li>
                                    </ul> --}}
                                    <p>Aun no tienes cuenta? <a href="register-5.html" class="thembo"> Registrarme aqui</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 bg-img">
                                <div class="lines">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
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

    /** Login 1 start **/
    .login-1 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        font-family: 'Jost', sans-serif;
    }

    .login-1 {
        top: 0;
        bottom: 0;
        opacity: 1;
        z-index: 999;
        min-height: 100vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 0;
        background: #f3f3f3;
    }

    .login-1:before {
        content: "";
        width: 90px;
        height: 180px;
        position: absolute;
        top: 30px;
        left: 0;
        background: url(../img/img-2.png) top left repeat;
        background-size: cover;
        z-index: -1;
    }

    .login-1:after {
        content: "";
        width: 90px;
        height: 180px;
        position: absolute;
        bottom: 30px;
        right: 0;
        background: url(../img/img-1.png) top left repeat;
        background-size: cover;
        z-index: -1;
    }

    .login-1 .form-section a{
        text-decoration: none;
    }

    .login-1 .form-inner {
        max-width: 570px;
        width: 100%;
        margin: 0 auto;
        text-align: center;
        padding: 70px 80px;
        background: #fff;
        position: relative;
        z-index: 0;
    }

    .login-1 .form-section .extra-login {
        float: left;
        width: 100%;
        text-align: center;
        position: relative;
        margin: 10px 0 35px!important;
    }

    .login-1 .form-section .extra-login::before {
        position: absolute;
        left: 0;
        top: 10px;
        width: 100%;
        height: 1px;
        background: #e4e4e4;
        content: "";
    }

    .login-1 .form-section .extra-login > span {
        width: auto;
        float: none;
        display: inline-block;
        padding: 1px 20px;
        z-index: 1;
        position: relative;
        font-size: 14px;
        color: #424242;
        text-transform: capitalize;
        background: #fff;
    }

    .login-1 .form-section p {
        color: #424242;
        margin-bottom: 0;
        font-size: 16px;
    }

    .login-1 .form-section p a {
        color: #424242;
    }

    .login-1 .form-section ul {
        list-style: none;
        padding: 0;
        margin: 0 0 20px;
    }

    .login-1 .form-section .thembo {
        margin-left: 4px;
    }

    .login-1 .form-section h3 {
        margin: 0 0 35px;
        font-size: 22px;
        font-weight: 500;
        color: #121212;
        text-transform: uppercase;
    }

    .login-1 .form-section .form-group {
        margin-bottom: 25px;
    }

    .login-1 .form-section .form-box {
        float: left;
        width: 100%;
        text-align: left;
        position: relative;
    }

    .login-1 .form-section .checkbox{
        margin: 10px 0 35px;
    }

.login-1 .form-section .form-control {
    padding: 14.5px 0;
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #424242;
    font-weight: 500;
    border-radius: 0;
    border: none;
    border-bottom: solid 2px #bdbdbd;
}

.login-1 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 0;
    font-size: 23px;
    color: #777575;
}

.login-1 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-1 .form-section .terms {
    margin-left: 3px;
}

.login-1 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 25px;
    font-size: 16px;
    color: #424242;
}

.login-1 .form-section .form-check .form-check-input {
    margin-left: -25px;
}

.login-1 .form-section .form-check a {
    color: #424242;
}

.login-1 .form-check-input:focus {
    box-shadow: none;
}

.login-1 .form-check-input:checked {
    background-color: #1c5fda;
    border-color: #1c5fda!important;
}

.login-1 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0;
    vertical-align: top;
    position: absolute;
    border: 2px solid #c5c3c3;
    border-radius: 0;
    top: 2px;
}

.login-1 .form-section a.forgot-password {
    font-size: 16px;
    color: #424242;
}

.login-1 .logo img {
    margin-bottom: 15px;
    height: 35px;
}

.login-1 .btn-theme {
    position: relative;
    display: inline-block;
    width: 100%;
    color: #ffffff;
    overflow: hidden;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    border: none;
}

.login-1 .btn-theme:hover {
    color: #fff;
}

.login-1 .btn-theme:hover::before {
    left: 0%;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
}

.login-1 .btn-theme:before {
    position: absolute;
    content: '';
    left: 96%;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
    transform: skewX(-25deg);
}

.login-1 .btn-theme span {
    position: relative;
    z-index: 1;
}

.login-1 .btn-check:focus+.btn, .btn:focus {
    outline: 0;
    box-shadow: none;
}

.login-1 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-1 .btn-md{
    padding: 0 45px;
    line-height: 50px;
}

.login-1 .btn{
    box-shadow: none!important;
}

.login-1 .btn-primary {
    background: #1c5fda;
}

.login-1 .btn-theme:before {
    background: #1658d1;
}

.login-1 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-1 .mb-35{
    margin-bottom: 35px!important;
}

/** Social list **/
.login-1 .social-list{
    margin-bottom: 30px;
}

.login-1 .social-list .buttons {
    display: flex;
    justify-content: center;
}

.login-1 .social-list a {
    color: #fff;
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 3px 5px;
    font-size: 20px;
    overflow: hidden;
    position: relative;
    transition: transform 0.2s linear 0s, border-radius 0.2s linear 0.2s;
}

.login-1 .social-list a i {
    transition: transform 0.2s linear 0s;
    position: relative;
    z-index: 3;
}

.login-1 .social-list a:hover {
    transform: rotate(-90deg);
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
}

.login-1 .social-list a:hover i {
    transform: rotate(90deg);
}

.login-1 .social-list a.facebook-bg {
    background: #4867aa;
}

.login-1 .social-list a.twitter-bg {
    background: #33CCFF;
}

.login-1 .social-list a.google-bg {
    background: #db4437;
}

.login-1 .social-list a.dribbble-bg {
    background: #2392e0;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-1 .form-inner {
        padding: 50px;
    }
}

@media (max-width: 768px) {
    .login-1 .form-inner {
        padding: 40px 30px;
    }
}
/** Login 1 end **/

/** Login 2 start **/
.login-2{
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: #efefef;
}

.login-2:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 50%;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
    border-radius: 0 100% 100% 0;
    background: #fff;
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
}

.login-2 .container{
    max-width: 1120px;
    margin: 0 auto;
}

.login-2 a {
    text-decoration: none;
}

.login-2 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-2 .info{
    top: 35%;
    max-width: 400px;
    margin:0 auto;
}

.login-2 .waviy .color-yellow{
    color: #ff0000;
}

.login-2 .waviy {
    position: relative;
}

.login-2 .waviy span {
    position: relative;
    display: inline-block;
    font-size: 35px;
    color: #000;
    text-transform: uppercase;
    animation: flip 2s infinite;
    font-weight: 700;
    margin-bottom: 15px;
    animation-delay: calc(.2s * var(--i))
}

@keyframes flip {
    0%,80% {
        transform: rotateY(360deg)
    }
}

.login-2 p{
    margin-bottom: 25px;
    font-size: 15px;
}

.login-2 .form-check-input:checked {
    display: none;
}

.login-2 .form-info {
    justify-content: center;
    align-items: center;
    padding: 100px 90px;
}

.login-2 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-2 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-2 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 100px;
    border: 1px solid #d9d9d9;
    padding: 14.5px 45px 14.5px 20px;
}

.login-2 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-2 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 20px;
    font-size: 20px;
    color: #535353;
}

.login-2 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
}

.login-2 .bg-img {
    top: 0;
    bottom: 0;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    border-right: solid 1px #e7e7e7;
}

.login-2 .login-box {
    background: #fff;
    margin: 0 auto;
    position: relative;
    z-index: 0;
}

.login-2 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #ff0000;
    border: solid 1px #ff0000;
}

.login-2 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 100px;
    text-transform: uppercase;
}

.login-2 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-2 .login-inner-form p{
    margin: 0;
    color: #535353;
}

.login-2 .login-inner-form p a{
    color: #535353;
}

.login-2 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-2 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-2 .login-inner-form .btn-theme {
    background: #ff0000;
    border: none;
    color: #fff;
}

.login-2 .login-inner-form .btn-theme:hover {
    background: #eb0707;
}

.login-2 .logo img{
    margin-bottom: 15px;
    height: 30px;
}

.login-2 .nav-pills li{
    display: inline-block;
}

.login-2 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-2 .login-inner-form .form-check a {
    color: #d6d6d6;
    float: right;
}

.login-2 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-2 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 20px;
    height: 20px;
    top: 1px;
    margin-left: -22px;
    border-radius: 100px;
    background: #fff;
    border: 1px solid #d9d9d9;
}

.login-2 .login-inner-form .form-check-label {
    padding-left: 20px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-2 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #e6e6e6;
    line-height: 18px;
    font-size: 12px;
    content: "\2713";
}

.login-2 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-2 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
    margin-left: 3px;
}

.login-2 .form-section{
    text-align: center;
}

.login-2 .form-section h3{
    font-size: 25px;
    margin-bottom: 30px;
    font-weight: 400;
    color: #040404;
}

.login-2 .form-section .text {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 0;
    color: #535353;
}

.login-2 .form-section .text a{
    color: #535353;
}

/** Social buttons start **/
.social-buttons{
    display: flex;
    text-align: center;
}

.login-2 .social-button {
    position: relative;
    width: 55px;
    height: 55px;
    line-height: 55px;
    border-radius: 50px;
    background: #f3f3f3;
    text-align: center;
    margin: 0 5px 5px 0;
    font-size: 18px;
}

.login-2 .social-button::after {
    content: '';
    position: absolute;
    top: -1px;
    left: 50%;
    display: block;
    width: 0;
    height: 0;
    border-radius: 50px;
    transition: 0.3s;
    text-align: center;
}

.login-2 .social-button:focus, .social-button:hover {
    color: #fff;
}

.login-2 .social-button:focus::after, .social-button:hover::after {
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    margin-left: calc(-50% - 1px);
}

.login-2 .social-button i, .social-button svg {
    position: relative;
    z-index: 1;
    transition: 0.3s;
}

.login-2 .social-button-facebook {
    color: #4867aa;
}

.login-2 .social-button-facebook::after {
    background: #4867aa;
}

.login-2 .social-button-twitter {
    color: #33CCFF;
}

.login-2 .social-button-twitter::after {
    background: #33CCFF;
}

.login-2 .social-button-linkedin {
    color: #2392e0;
}

.login-2 .social-button-linkedin::after {
    background: #2392e0;
}

.login-2 .social-button-google {
    color: #db4437;
}

.login-2 .social-button-google::after {
    background: #db4437;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-2 .bg-img{
        display: none;
    }

    .login-2 .form-info{
        padding: 50px 30px;
    }

    .login-2 .login-box{
        max-width: 600px;
        margin: 0 auto;
    }


    .login-2:before {
        background: #efefef;
    }
}
/** Login 2 end **/

/** Login 3 start **/
.login-3{
    background: #eef1f6;
}

.login-3 a {
    text-decoration: none;
}

.login-3 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-3 .bg-img{
    background: url(../img/img-3.jpg) top left repeat;
    background-size: cover;
    top: 0;
    bottom: 0;
    min-height: 100vh;
    text-align: left;
    z-index: 10;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 30px;
}

.login-3 .bg-img:after {
    position: absolute;
    right: -1px;
    top: 0;
    width: 276px;
    height: 100%;
    content: "";
    z-index: -1;
    background: url(../img/img-51.png) top left repeat;
}

.login-3 .form-check-input:checked {
    display: none;
}

.login-3 .form-section{
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-3 .form-section .form-box {
    width: 100%;
    position: relative;
}

.login-3 .login-inner-form {
    max-width: 450px;
    color: #535353;
    width: 100%;
    text-align: center;
}

.login-3 .login-inner-form p{
    color: #535353;
    font-size: 16px;
    margin: 0;
}

.login-3 .login-inner-form p a{
    color: #535353;
    font-weight: 500;
}

.login-3 .login-inner-form img {
    margin-bottom: 15px;
    height: 30px;
}

.login-3 .login-inner-form h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-3 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-3 .login-inner-form .form-control {
    outline: none;
    width: 100%;
    padding: 10px 25px;
    font-size: 16px;
    outline: 0;
    font-weight: 400;
    color: #535353;
    height: 55px;
    border-radius: 3px;
    border: 1px solid #fff;
}

.login-3 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-3 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-3 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-3 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-3 .login-inner-form .btn-theme {
    background: #ffa637;
    border: none;
    color: #fff;
}

.login-3 .login-inner-form .btn-theme:hover {
    background: #ed972c;
}

.login-3 .login-inner-form .checkbox .terms {
    margin-left: 3px;
}

.login-3 .informeson {
    color: #fff;
    max-width: 450px;
}

.login-3 .informeson h1{
    color: #fff;
    margin-bottom: 20px;
    font-size: 35px;
    font-weight: 600;
    text-transform: uppercase;
}

.login-3 .informeson p{
    color: #fff;
    margin-bottom: 25px;
    line-height: 25px;
    font-size: 15px;
}

.login-3 .none-2{
    display: none;
}

.login-3 .btn-section {
    margin-bottom: 30px;
}

.login-3 .login-inner-form .terms{
    margin-left: 3px;
}

.login-3 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-3 .login-inner-form .form-check a {
    color: #535353;
    float: right;
}

.login-3 .login-inner-form .form-check-input {
    display: none;
}

.login-3 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 20px;
    top: 0;
    height: 20px;
    margin-left: -25px;
    border: 1px solid #fff;
    border-radius: 2px;
    background-color: #fff;
}

.login-3 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
}

.login-3 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #ffa637;
    border-color: #ffa637;
}

.login-3 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 17px;
    font-size: 14px;
    content: "\2713";
    padding-left: 1px;
}

.login-3 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-3 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
}

.login-3 h1 {
    color: #fff;
    font-size: 35px;
    margin-bottom: 20px;
}

.login-3 .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
}

/* Social list */
.login-3 .social-list a {
    transition: transform 0.4s linear 0s, border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
    border-radius: 50%;
}

.login-3 .social-list a i {
    transition: transform 0.4s linear 0s;
}

.login-3 .social-list a:hover {
    transform: rotate(360deg);
    border-radius: 50px;
}

.login-3 .social-list a:hover i {
    transform: rotate(-360deg);
}

.login-3 .social-list .buttons {
    display: flex;
}

.login-3 .social-list a {
    text-decoration: none !important;
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 4px 5px;
    font-size: 20px;
    overflow: hidden;
    position: relative;
    background: #fff;
}

.login-3 .social-list a i {
    position: relative;
    z-index: 3;
}

.login-3 .social-list a.facebook-bg {
    color: #4867aa;
}

.login-3 .social-list a.twitter-bg {
    color: #33CCFF;
}

.login-3 .social-list a.google-bg {
    color: #db4437;
}

.login-3 .social-list a.dribbble-bg {
    color: #2392e0;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-3 .bg-img {
        display: none;
    }

    .login-3 .form-section{
        padding: 30px 15px;
    }
}
/** Login 3 end **/

/** Login 4 start **/
.login-4 .login-inner-form {
    color: #fff;
    position: relative;
}

.login-4 .bg-color-4 {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 50px;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
}

.login-4 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-4 .form-section{
    max-width: 400px;
    margin: 0 auto;
    width: 100%;
}

.login-4 .login-inner-form .form-group {
    margin-bottom: 35px;
}

.login-4 .login-inner-form .form-control {
    font-size: 15px;
    outline: none;
    color: #535353;
    border: 1px solid #dbdbdb;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .06);
    border-radius: 100px;
    height: 55px;
}

.login-4 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-4 .login-inner-form .form-box .form-control {
    float: left;
    width: 100%;
    padding: 13px 15px 13px 65px;
}

.login-4 .login-inner-form .form-box i {
    position: absolute;
    left: 0;
    width: 55px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    background: #132b83;
    font-size: 20px;
    color: #fff;
    border-radius: 100px;
}

.login-4 .info {
    color: #fff;
    margin: 0 auto;
    max-width: 800px;
}

.login-4 .bg-img {
    top: 0;
    bottom: 0;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-4 .info P{
    color: #535353;
    font-size: 17px;
    line-height: 30px;
    margin-bottom: 0;
}

.login-4 .login-inner-form .forgot{
    margin: 0;
    line-height: 40px;
    color: #fff;
    font-size: 14px;
    float: right;
}

.login-4 .btn-theme {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    width: 100%;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-4 .login-inner-form p{
    margin: 0;
    color: #fff;
}

.login-4 .login-inner-form p a{
    color: #fff;
}

.login-46 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-4 .logo{
    text-align: center;
    margin-bottom: 15px;
}

.login-4 .logo img{
    height: 25px;
}

.login-4 h3{
    text-align: center;
    margin: 0 0 24px;
    font-size: 25px;
    color: #fff;
    font-weight: 400;
}

.login-4 .form-check-input:checked {
    background-color: #132b83!important;
    border-color: #132b83!important;
}

.login-4 .login-inner-form .social-list{
    padding: 0;
    text-align: center;
}

.login-4 .login-inner-form .social-list li {
    display: inline-block;
}

.login-4 .login-inner-form .social-list li a {
    display: inline-block;
    text-align: center;
}

.login-4 .login-inner-form .extra-login {
    float: left;
    width: 100%;
    margin: 35px 0;
    text-align: center;
    position: relative;
}

.login-4 .login-inner-form .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e7e7e79e;
    content: "";
}

.login-4 .login-inner-form .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #ff5a00;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #fff;
    text-transform: capitalize;
}

.login-4 .form-check-input:focus {
    box-shadow: none;
}

.login-4 .login-inner-form .terms{
    margin-left: 3px;
}

.login-4 .login-inner-form .checkbox {
    margin-bottom: 25px;
    font-size: 15px;
}

.login-4 .login-inner-form .form-check{
    margin-bottom: 0;
}

.login-4 .login-inner-form .form-check a {
    color: #fff;
}

.login-4 .login-inner-form .form-check-label {
    padding-left: 2px;
    margin-bottom: 0;
    font-size: 15px;
    color: #fff;
}

.login-4 .btn{
    box-shadow: none!important;
}

.login-4 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
    border-radius: 55px;
}

.login-4 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-4 .btn-primary{
    background: #132b83;
}

.login-4 .btn-primary:hover {
    background: #0d2478;
}

.login-4 .form-section a {
    text-decoration: none;
}

.login-4 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 1px;
    position: absolute;
    border: 1px solid #fbf1f1;
    border-radius: 100%;
    background-color: #fbf1f1;
    margin-left: -22px;
}

.login-4 .login-inner-form .checkbox a {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
}

.login-4 .form-section p {
    margin: 28px 0 0;
    font-size: 15px;
    color: #fff;
    font-weight: 400;
}

.login-4 .form-section p a {
    color: #fff;
}

.login-4 .info .animated-text{
    margin-bottom: 30px!important;
}

.login-4 .info .animated-text, .infoCont {
    max-width: 100%;
    display: table;
    border-spacing: 2px;
    margin: auto;
}

.login-4 .info #username {
    display: table-row;
}

.login-4 .info .char1, .char2, .char3, .char4, .char5, .char6, .char7, .char8 {
    width: 55px;
    height: 55px;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
    border-radius: 55px;
    -webkit-animation: swing-in-top-fwd 1s cubic-bezier(0.680, -0.550, 0.265, 1.550) both;
    text-align: center;
    text-transform: uppercase;
    font-size: 22px;
    line-height: 55px;
    font-weight: 600;
    box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
    display: table-cell;
    margin: 5px!important;
}

.login-4 .info .username {
    margin: auto;
    max-width: 100%;
    display: table-cell;
    padding: 40px;
    border-radius: 5px;
    -webkit-animation: swing-in-top-fwd 1s cubic-bezier(0.680, -0.550, 0.265, 1.550) both;
    text-align: center;
    font-size: 15px;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
    box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
}

@-webkit-keyframes swing-in-top-fwd {
    0% {
        -webkit-transform: rotateX(-100deg);
        -webkit-transform-origin: top;
        opacity: 0;
    }
    100% {
        -webkit-transform: rotateX(0deg);
        -webkit-transform-origin: top;
        opacity: 1;
    }
}

/* Social list */
.login-4 .social-list a {
    transition: transform 0.4s linear 0s, border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
    border-radius: 50%;
}

.login-4 .social-list a i {
    transition: transform 0.4s linear 0s;
}

.login-4 .social-list a:hover {
    transform: rotate(360deg);
    border-radius: 3px;
}

.login-4 .social-list a:hover i {
    transform: rotate(-360deg);
}

.login-4 .social-list .buttons {
    display: flex;
    max-width: 230px;
    margin: 0 auto;
}

.login-4 .social-list a {
    text-decoration: none !important;
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    margin:0 4px 5px;
    font-size: 20px;
    overflow: hidden;
    position: relative;
    background: #fff;
}

.login-4 .social-list a i {
    position: relative;
    z-index: 3;
}

.login-4 .social-list a.facebook-bg {
    color: #4867aa;
}

.login-4 .social-list a.twitter-bg {
    color: #33CCFF;
}

.login-4 .social-list a.google-bg {
    color: #db4437;
}

.login-4 .social-list a.dribbble-bg {
    color: #2392e0;
}

/** MEDIA **/
@media (max-width: 1200px) {
    .login-4 .info .char1, .char2, .char3, .char4, .char5, .char6, .char7, .char8 {
        width: 40px;
        height: 40px;
        font-size: 18px;
        line-height: 40px;
    }
}

@media (max-width: 992px) {
    .login-4 .bg-img{
        display: none;
    }

    .login-4 .bg-color-4 {
        padding: 30px 15px;
    }
}
/** Login 4 end **/

/** Login 5 start **/
.login-5 .form-section {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
    background: #fff2f2;
}

.login-5 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
    color: #040404;
}

.login-5 a {
    text-decoration: none;
    color: #535353;
}

.login-5 .form-section p p{
    color: #535353;
}

.login-5 .form-inner {
    max-width: 500px;
    width: 100%;
}

.login-5 .bg-img {
    background: url(../img/img-5.jpg) top left repeat;
    background-size: cover;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-5 .bg-img:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(36 10 99 / 47%);
}

.login-5 .form-section .extra-login {
    margin-bottom: 25px;
    position: relative;
}

.login-5 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-5 .form-section .extra-login > span {
    padding: 1px 20px;
    position: relative;
    font-size: 15px;
    color: #535353;
    background: #fff2f2;
}

.login-5 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0px;
    position: absolute;
    border-radius: 2px;
    border: none;
    background-color: #fff;
    margin-left: -22px;
}

.login-5 .form-check-input:focus {
    border-color: snow;
    outline: 0;
    box-shadow: none;
}

.login-5 .form-check-input:checked {
    background-color: #f5c025!important;
}

.login-5 .form-section p {
    margin-bottom: 0;
    font-size: 16px;
}

.login-5 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-5 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-5 .form-section .thembo {
    margin-left: 4px;
}

.login-5 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
}

.login-5 .form-section .form-group {
    margin-bottom: 25px;
}

.login-5 .form-section .form-control {
    padding: 11px 20px 9px;
    font-size: 16px;
    outline: none;
    height: 55px;
    color: #535353;
    border-radius: 3px;
    font-weight: 500;
    border: 1px solid transparent;
    background: #fff;
}

.login-5 .form-section .form-check {
    margin-bottom: 0;
}

.login-5 .form-section .form-check-label {
    padding-left: 5px;
    font-size: 16px;
    color: #535353;
}

.login-5 .form-section a.forgot-password {
    font-size: 16px;
}

.login-5 .form-section a.forgot-password:hover{
    color: #535353;
}

.login-5 .logo img {
    margin-bottom: 15px;
    height: 25px;
}

.login-5 .btn-theme {
    position: relative;
    display: inline-block;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    width: 100%;
}

.login-5 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 3px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-5 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-5 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-5 .btn{
    box-shadow: none!important;
}

.login-5 .btn-primary{
    background: #f5c025;
}

.login-5 .btn-primary:after {
    background: #e3af18;
}

.login-5 .lines {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    z-index: -1;
}

.login-5 .line {
    position: absolute;
    width: 5px;
    height: 100%;
    top: 0;
    left: 50%;
    background: rgba(255, 255, 255, 0.1);
    overflow: hidden;
}

.login-5 .line::after {
    content: '';
    display: block;
    position: absolute;
    height: 15vh;
    width: 100%;
    top: -50%;
    left: 0;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #ffffff 75%, #ffffff 100%);
    animation: drop 7s 0s infinite;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(0.4, 0.26, 0, 0.97);
    z-index: -888;
}

.login-5 .line:nth-child(1) {
    margin-left: -40%;
}

.login-5 .line:nth-child(1)::after {
    animation-delay: 1s;
}

.login-5 .line:nth-child(3) {
    margin-left: 40%;
}

.login-5 .line:nth-child(3)::after {
    animation-delay: 2s;
}

.login-5 .line:nth-child(4) {
    margin-left: -20%;
}

.login-5 .line:nth-child(4)::after {
    animation-delay: 3s;
}

.login-5 .line:nth-child(5) {
    margin-left: 20%;
}

.login-5 .line:nth-child(5)::after {
    animation-delay: 4s;
}

@keyframes drop {
    0% {top: -50%; }
    100% {top: 110%; }
}

.login-5 .info{
    max-width: 650px;
}

.login-5 .info p {
    color: #fff;
    opacity: 0.8;
    font-size: 15px;
    line-height: 25px;
}

.login-5 .social-list li a {
    font-size: 13px;
    font-weight: 600;
    width: 130px;
    margin: 2px 0 3px 0;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-5 .social-list li a i{
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    border-radius: 3px;
}

.login-5 .social-list li a span{
    margin-right: 7px;
}

.login-5 .name_wrap h1 {
    position: relative;
    font-size: 55px;
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 20px;
    display: inline-block;
    overflow: hidden;
}

.login-5 h1 span {
    color: transparent;
    -webkit-text-stroke: 1px #fff;
    padding-left: 2px;
}

/** Social media **/
.login-5 .facebook-bg {
    background: #4867aa;
}

.login-5 .twitter-bg {
    background: #33CCFF;
}

.login-5 .google-bg {
    background: #db4437;
}

.login-5 .google-i {
    background: #c3291c;
}

.login-5 .facebook-i {
    background: #3b589e;
}

.login-5 .twitter-i {
    background: #0cace0;
}

@media (max-width: 1200px){
    .login-5 .name_wrap h1 {
        font-size: 40px;
    }
}

@media (max-width: 992px){
    .login-5 .bg-img {
        display: none;
    }

    .login-5 .social-list li a {
        width: 120px;
    }
}
/** Login 5 end **/

/** Login 6 start **/
.login-6 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-6 {
    z-index: 0;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient(to bottom, #db3390, #d73131c2);
    padding: 30px 0;
}

.login-6 #particles-js {
    background-size: cover;
    background-position: 50% 50%;
    position: fixed;
    min-height: 100vh;
    width: 100%;
    z-index: -999;
}

.login-6 .form-section{
    max-width: 500px;
    margin: 0 auto;
    width: 100%;
    background: #fff;
    padding: 50px;
    border-radius: 30px;
    box-shadow: 0 0 35px rgb(0 0 0 / 10%);
    text-align: left;
    position: relative;
    z-index: 0;
}

.login-6 .form-section:before {
    content: "";
    width: 100%;
    height: 91px;
    position: absolute;
    top: 0;
    right: 0;
    background: url(../img/img-6.png) top left repeat;
    background-size: cover;
    z-index: -1;
    border-radius: 30px 30px 0 0;
}

.login-6 .form-box{
    width: 100%;
}

.login-6 .login-inner-form .form-group {
    margin-bottom: 35px;
}

.login-6 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-6 .login-inner-form .form-control {
    padding: 14.5px 0;
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #535353;
    font-weight: 500;
    border: none;
    border-bottom: solid 2px #bdbdbd;
    border-radius: 0;
}

.login-6 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-6 .login-inner-form .form-box .form-control {
    float: left;
    width: 100%;
    padding: 13px 15px 13px 30px;
}

.login-6 .login-inner-form .form-box i {
    position: absolute;
    top: 8px;
    left: 0;
    font-size: 23px;
    color: #777575;
}

.login-6 .info {
    color: #fff;
    margin: 0 117px 0 auto;
    text-align: right;
    max-width: 700px;
}

.login-6 .bg-img {
    top: 0;
    bottom: 0;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-6 .login-inner-form .forgot{
    margin: 0;
    line-height: 40px;
    color: #fff;
    font-size: 14px;
    float: right;
}

.login-6 .btn-theme {
    border: none;
    color: #ffffff;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    width: 100%;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-6 .login-inner-form p{
    margin: 0;
    color: #e7e7e7;
}

.login-6 .login-inner-form p a{
    color: #e7e7e7;
}

.login-46 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-6 .logo{
    margin-bottom: 15px;
}

.login-6 .logo img{
    height: 25px;
}

.login-6 h1{
    margin: 0 0 35px;
    font-size: 23px;
    color: #040404;
    font-weight: 400;
}

.login-6 .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
}

.login-6 .form-check-input:checked {
    background-color: #039ae0!important;
    border-color: #039ae0!important;
}

.login-6 .form-check-input:focus {
    box-shadow: none;
}

.login-6 .login-inner-form .terms{
    margin-left: 3px;
}

.login-6 .login-inner-form .checkbox {
    margin-bottom: 35px;
    font-size: 15px;
}

.login-6 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
}

.login-6 .login-inner-form .form-check a {
    color: #535353;
    float: right;
}

.login-6 .login-inner-form .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-6 .btn{
    box-shadow: none!important;
}

.login-6 .btn-lg{
    padding: 0 50px;
    line-height: 50px;
}

.login-6 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-6 .btn-primary{
    background-image: linear-gradient(to bottom, #3b63c5, #39a4ff);
}

.login-6 .btn-primary:hover {
    background-image: linear-gradient(to bottom, #355dbf, #3199f1);
}

.login-6 .form-section a {
    text-decoration: none;
}

.login-6 .form-section .form-check-input {
    width: 18px;
    height: 18px;
    margin-top: 3px;
    position: absolute;
    border: 2px solid #bdbdbd;
    border-radius: 0;
    background-color: #fff;
    margin-left: -22px;
}

.login-6 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
}

.login-6 .form-section p {
    font-size: 16px;
    color: #535353;
    text-align: left;
    margin-bottom: 0;
}

.login-6 .form-section p a {
    color: #535353;
}

/** Social media **/
.login-6 .social-list{
    margin-bottom: 20px;
}

.login-6 .social-list .social-list-inner {
    padding: 0;
    list-style: none;
    margin: 0;
}

.login-6 .social-list .social-list-inner li {
    display: inline-block;
    margin: 0 2px 5px 0;
    position: relative;
    font-size: 20px;
}

.login-6 .social-list .social-list-inner i {
    color: #fff;
    position: absolute;
    top: 21px;
    left: 21px;
    transition: all 265ms ease-out;
}

.login-6 .social-list .social-list-inner a {
    display: inline-block;
}

.login-6 .social-list .social-list-inner a:before {
    transform: scale(1);
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    content: " ";
    width: 60px;
    height: 60px;
    border-radius: 100%;
    display: block;
    background: linear-gradient(45deg, #39a4ff, #3b63c5);
    transition: all 265ms ease-out;
}

.login-6 .social-list .social-list-inner a:hover:before {
    transform: scale(0);
    transition: all 265ms ease-in;
}

.login-6 .social-list .social-list-inner a:hover i {
    transform: scale(2.2);
    -ms-transform: scale(2.2);
    -webkit-transform: scale(2.2);
    background: -webkit-linear-gradient(45deg, #39a4ff, #3b63c5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: all 265ms ease-in;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-6 .form-section {
        padding: 50px 30px;
    }
}
/** Login 6 end **/

/** Login 7 start **/
.login-7-inner {
    position: relative;
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

.login-7-bg{
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

.login-7 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
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

.login-7 .form-section p{
    font-size: 16px;
    color: #535353;
}

.login-7 .form-section a{
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

.login-7 .form-section .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
    text-transform: uppercase;
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
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
    border: 1px solid #d3d3d3!important;
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

.login-7 .btn-lg{
    padding: 0 50px;
    line-height: 46px;
}

.login-7 .btn{
    box-shadow: none!important;
}

.login-7 .btn-md{
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

    .login-7-bodycolor .ripple-background{
        display: none;
    }
}
/** Login 7 end **/

/** Login 8 start **/
.login-8 {
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    overflow: hidden;
    background: #fff5f5;
}

.login-8 .ocean {
    width: 100%;
    position: absolute;
    bottom: 0;
}

.login-8 .wave {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
    position: absolute;
    top: -128px;
    width: 6400px;
    height: 198px;
    animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
    transform: translate3d(0, 0, 0);
}

.login-8 .wave:nth-of-type(2) {
    top: -145px;
    animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -0.125s infinite, swell 7s ease -1.25s infinite;
    opacity: 1;
}

@keyframes wave {
    0% {
        margin-left: 0;
    }
    100% {
        margin-left: -1600px;
    }
}

@keyframes swell {
    0%, 100% {
        transform: translate3d(0, -25px, 0);
    }
    50% {
        transform: translate3d(0, 5px, 0);
    }
}

.login-8 .container{
    max-width: 1660px;
    margin: 0 auto;
}

.login-8 .form-section {
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.login-8 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-8 a {
    text-decoration: none;
}

.login-8 .form-inner {
    max-width: 600px;
    width: 100%;
    padding: 70px;
    text-align: center;
    z-index: 999;
    background: #fff;
    box-shadow: 0 0 5px rgb(0 0 0 / 10%);
}

.login-8 .form-section .extra-login {
    position: relative;
}

.login-8 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-8 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 14px;
    color: #535353;
    text-transform: capitalize;
    background: #fff;
}

.login-8 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0px;
    vertical-align: top;
    position: absolute;
    border-radius: 2px;
    border: none;
    background-color: #f7f7f7;
    margin-left: -22px;
}

.login-8 .form-check-input:focus {
    border-color: snow;
    outline: 0;
    box-shadow: none;
}

.login-8 .form-check-input:checked {
    background-color: #2ad4bc;
}

.login-8 .form-section p {
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-8 .form-section p a {
    color: #535353;
}

.login-8 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-8 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-8 .form-section .thembo {
    margin-left: 4px;
}

.login-8 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-8 .form-section .form-group {
    width: 100%;
    position: relative;
    margin-bottom: 25px;
}

.login-8 .form-section .form-control {
    padding: 11px 20px 9px;
    font-size: 16px;
    outline: none;
    height: 55px;
    color: #535353;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #f7f7f7;
}

.login-8 .form-section .form-check {
    margin-bottom: 0;
}

.login-8 .form-section .form-check a {
    color: #535353;
}

.login-8 .form-section .form-check-label {
    padding-left: 5px;
    font-size: 16px;
    color: #535353;
}

.login-8 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
}

.login-8 .logo img {
    margin-bottom: 15px;
    height: 25px;
}

.login-8 .btn-theme {
    position: relative;
    display: inline-block;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    width: 100%;
}

.login-8 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 3px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-8 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-8 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-8 .btn{
    box-shadow: none!important;
}

.login-8 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-8 .btn-primary{
    background: #2ad4bc;
    border-color: #51d4bc;
}

.login-8 .btn-primary:after {
    background: #1abfa8;
}

.login-8 .title{
    font-size: 40px;
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 110px;
}

.login-8 .bg-img p{
    padding-left: 15px;
}

.login-8 .bottom-container, .login-8 .top-container {
    position: fixed;
    padding: 15px;
}

.login-8 .bottom-container {
    color: #232323;
}

.login-8 .top-container {
    background-color: #2ad4bc;
    color: #fff;
    clip-path: circle(13% at 85% 50%);
    animation: circleMove 20s ease-in-out infinite;
}

@keyframes circleMove {
    0%, 100% {
        clip-path: circle(13% at 85% 50%);
    }
    50% {
        clip-path: circle(13% at 15% 50%);
    }
}

/* Social list */
.login-8 .social-list .buttons {
    display: flex;
    justify-content: center;
    margin-bottom: 25px;
}

.login-8 .social-list a {
    text-decoration: none !important;
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 2px 5px;
    font-size: 20px;
    overflow: hidden;
    position: relative;
}

.login-8 .social-list a {
    transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
}
.login-8 .social-list a:hover {
    border-radius: 50%;
}

.login-8 .social-list a i {
    position: relative;
    z-index: 3;
}

.login-8 .social-list a.facebook-bg {
    background: #4867aa;
}

.login-8 .social-list a.twitter-bg {
    background: #33CCFF;
}

.login-8 .social-list a.google-bg {
    background: #db4437;
}

.login-8 .social-list a.dribbble-bg {
    background: #2392e0;
}

/** Social media **/
@media (max-width: 992px) {
    .login-8 .form-inner {
        padding: 50px;
    }

    .login-8 .bg-img{
        display: none;
    }
}

@media (max-width: 768px) {
    .login-8 .form-inner {
        padding: 50px 30px;
    }
}
/** Login 8 end **/

/** Login 9 start **/
.login-9{
    background-size: cover;
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: #fff5f5;
}

.login-9 .container{
    max-width: 1160px;
    margin: 0 auto;
}

.login-9 a {
    text-decoration: none;
}

.login-9 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-9 .login-inner-form {
    color: #cccccc;
    position: relative;
}

.login-9 .form-check-input:checked {
    display: none;
}

.login-9 .form-info {
    justify-content: center;
    align-items: center;
    padding: 80px;
}

.login-9 .form-box{
    width: 100%;
    text-align: center;
}

.login-9 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-9 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-9 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    font-weight: 500;
    border: 1px solid #d9d9d9;
    padding: 14.5px 45px 14.5px 20px;
}

.login-9 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-9 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 20px;
    font-size: 20px;
    color: #535353;
}

.login-9 .login-inner-form label{
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
}

.login-9 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
    color: #535353;
    font-size: 15px;
    float: right;
}

.login-9 .bg-img {
    background: url(../img/img-9.jpg) top left repeat;
    background-size: cover;
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    position: relative;
    display: flex;
    padding: 30px;
}

.login-9 .bg-img:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(0,#000000a1,rgb(255 255 255 / 0%));
}

.login-9 .login-box {
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-9 .text-info{
    bottom: 20px;
    position: absolute;
    left: 30px;
    right: 30px;
}

.login-9 .text-info .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
    text-transform: uppercase;
}

.login-9 .text-info h1{
    color: #fff;
    font-size: 35px;
    margin-bottom: 20px;
}

.login-9 .text-info p{
    color: #ededed;
    font-size: 15px;
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
}

.login-9 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #5ad352;
    border: solid 1px #5ad352;
}

.login-9 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    text-transform: uppercase;
}

.login-9 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-9 .login-inner-form p{
    margin: 0;
    color: #535353;
}

.login-9 .login-inner-form p a{
    color: #535353;
}

.login-9 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-9 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-9 .login-inner-form .btn-theme {
    background: #5ad352;
    border: none;
    color: #fff;
}

.login-9 .login-inner-form .btn-theme:hover {
    background: #4fcb47;
}

.login-9 .logo{
    height: 35px;
}

.login-9 .logo img{
    height: 25px;
}

.login-9 .logo-2{
    margin-bottom: 15px;
}

.login-9 .logo-2 img{
    height: 30px;
}

.login-9 .nav-pills li{
    display: inline-block;
}

.login-9 .login-inner-form .checkbox {
    margin-bottom: 25px;
    font-size: 14px;
}

.login-9 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-9 .login-inner-form .form-check a {
    color: #d6d6d6;
    float: right;
}

.login-9 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-9 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border-radius: 3px;
    background: #fff;
    border: 1px solid #d9d9d9;
}

.login-9 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-9 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #e6e6e6;
    line-height: 16px;
    font-size: 14px;
    content: "\2713";
}

.login-9 .btn-section {
    top: 35px;
    position: absolute;
    left: 30px;
    margin-bottom: 0;
}

.login-9 .btn-section .link-btn {
    font-size: 14px;
    text-align: center;
    font-weight: 400;
    color: #5ad352;
    padding: 10px 18px;
    text-decoration: none;
    text-decoration: blink;
    text-transform: uppercase;
    border-radius: 3px;
    background: #fff;
}

.login-9 .btn-section .link-btn:hover{
    background: #5ad352;
    color: #fff;
}

.login-9 .btn-section .link-btn.active{
    background: #5ad352;
    color: #fff;
}

.login-9 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-9 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
    margin-left: 3px;
}

.login-9 .form-section{
    text-align: center;
}

.login-9 .form-section h3{
    font-size: 25px;
    margin-bottom: 30px;
    font-weight: 400;
    color: #040404;
}

.login-9 .form-section .text {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 0;
    color: #535353;
}

.login-9 .form-section .text a{
    color: #535353;
}

.login-9 .form-section .extra-login {
    float: left;
    width: 100%;
    text-align: center;
    position: relative;
    margin-bottom: 25px;
}

.login-9 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e4e4e4;
    content: "";
}

.login-9 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 14px;
    color: #535353;
    text-transform: capitalize;
    background: #fff;
}

/** Social list **/
.login-9 .social-list{
    margin-bottom: 20px;
}

.login-9 .social-list .buttons {
    display: flex;
    justify-content: center;
}

.login-9 .social-list a {
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 3px 5px;
    font-size: 18px;
    overflow: hidden;
    position: relative;
    transition: transform 0.2s linear 0s, border-radius 0.2s linear 0.2s;
}

.login-9 .social-list a i {
    transition: transform 0.2s linear 0s;
    position: relative;
    z-index: 3;
}

.login-9 .social-list a:hover {
    transform: rotate(-90deg);
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
}

.login-9 .social-list a:hover i {
    transform: rotate(90deg);
}

.login-9 .social-list a.facebook-bg {
    background: #4867aa;
}

.login-9 .social-list a.twitter-bg {
    background: #33CCFF;
}

.login-9 .social-list a.google-bg {
    background: #db4437;
}

.login-9 .social-list a.dribbble-bg {
    background: #2392e0;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-9 .bg-img{
        display: none;
    }

    .login-9 .form-section h3{
        font-size: 23px;
    }

    .login-9 .form-info{
        padding: 50px 30px;
    }

    .login-9 .login-box{
        max-width: 600px;
        margin: 0 auto;
    }
}
/** Login 9 end **/

/** Login 10 start **/
.login-10 {
    top: 0;
    width: 100%;
    text-align: center;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: linear-gradient(to bottom right, #17ffff 0%, #2500b7e8 100%);
}

.login-10 a {
    text-decoration: none;
}

.login-10 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-10 .form-section {
    max-width: 550px;
    margin: 0 auto;
    padding: 70px 50px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 999;
}

.login-10 .form-check-input:checked {
    display: none;
}

.login-10 .form-section p{
    color: #535353;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-10 .form-section p a{
    color: #535353;
}

.login-10 .form-section .extra-login {
    float: left;
    width: 100%;
    margin: 25px 0 25px;
    text-align: center;
    position: relative;
}

.login-10 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-10 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #fff;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #535353;
    text-transform: capitalize;
}

.login-10 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-10 .logo-2 img{
    margin-bottom: 15px;
    height: 30px;
}

.login-10 .form-section .social-list li {
    display: inline-block!important;
    margin-bottom: 5px;
}

.login-10 .form-section .social-list li a {
    font-size: 15px;
    font-weight: 400;
    width: 130px;
    margin: 2px 0 3px 0;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-family: 'Jost', sans-serif;
}

.login-10 .form-section .social-list li a i{
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
    border-radius: 3px;
}

.login-10 .form-section .social-list li a span{
    margin-right: 7px;
}

.login-10 .form-section .thembo{
    margin-left: 4px;
}

.login-10 .form-section h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
    text-align: center;
}

.login-10 .form-section .form-group {
    margin-bottom: 25px;
}

.login-10 .form-section .form-control {
    font-size: 16px;
    outline: none;
    background: #efefef;
    padding: 12px 25px;
    color: #535353;
    height: 60px;
    border-radius: 3px;
    border: 1px solid #efefef;
}

.login-10 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-10 .form-section .btn-md {
    cursor: pointer;
    height: 60px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-10 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-10 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-10 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-10 .form-section .btn-theme {
    background: #526fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
}

.login-10 .form-section .btn-theme:hover {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    background: #4b67f1;
}

.login-10 .form-section .terms{
    margin-left: 3px;
}

.login-10 .form-section .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
    position: relative;
}

.login-10 .form-section .form-check a {
    color: #535353;
}

.login-10 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-10 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #e8e8e8;
    background: #e8e8e8;
    border-radius: 3px;
}

.login-10 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-10 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #526fff;
    border-color: #526fff;
}

.login-10 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 16px;
    font-size: 14px;
    content: "\2713";
    padding-left: 0;
}

.login-10 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-10 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
    float: right;
    line-height: 60px;
}

.login-10 .animation-container .lightning-container {
    position: absolute;
    top: 50%;
    left: 0;
    display: flex;
    transform: translateY(-50%);
}

.login-10 .animation-container .lightning-container .lightning {
    position: absolute;
    display: block;
    height: 30px;
    width: 30px;
    border-radius: 30px;
    transform-origin: 6px 6px;
    animation-name: woosh;
    animation-duration: 1.5s;
    animation-iteration-count: infinite;
    animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
    animation-direction: alternate;
}

.login-10 .animation-container .lightning-container .lightning.white {
    background-color: yellow;
    box-shadow: 0px 50px 50px 0px rgba(255, 255, 255, 0.3);
}

.login-10 .animation-container .lightning-container .lightning.red {
    background-color: #fc7171;
    box-shadow: 0px 50px 50px 0px rgba(252, 113, 113, 0.3);
    animation-delay: 0.2s;
}

.login-10 .animation-container .boom-container {
    position: absolute;
    display: flex;
    width: 80px;
    height: 80px;
    text-align: center;
    align-items: center;
    transform: translateY(-50%);
    left: 200px;
    top: -145px;
}

.login-10 .animation-container .boom-container .shape {
    display: inline-block;
    position: relative;
    opacity: 0;
    transform-origin: center center;
}

.login-10 .animation-container .boom-container .shape.triangle {
    width: 0;
    height: 0;
    border-style: solid;
    transform-origin: 50% 80%;
    animation-duration: 1s;
    animation-timing-function: ease-out;
    animation-iteration-count: infinite;
    margin-left: -15px;
    border-width: 0 2.5px 5px 2.5px;
    border-color: transparent transparent #42e599 transparent;
    animation-name: boom-triangle;
}

.login-10 .animation-container .boom-container .shape.triangle.big {
    margin-left: -25px;
    border-width: 0 5px 10px 5px;
    border-color: transparent transparent #fade28 transparent;
    animation-name: boom-triangle-big;
}

.login-10 .animation-container .boom-container .shape.disc {
    width: 20px;
    height: 20px;
    border-radius: 100%;
    background-color: #fff;
    animation-name: boom-disc;
    animation-duration: 1s;
    animation-timing-function: ease-out;
    animation-iteration-count: infinite;
}

.login-10 .animation-container .boom-container .shape.circle {
    width: 30px;
    height: 30px;
    animation-name: boom-circle;
    animation-duration: 1s;
    animation-timing-function: ease-out;
    animation-iteration-count: infinite;
    border-radius: 100%;
    margin-left: -30px;
}

.login-10 .animation-container .boom-container .shape.circle.white {
    border: 1px solid white;
}

.login-10 .animation-container .boom-container .shape.circle.big {
    width: 70px;
    height: 70px;
    margin-left: 0px;
}

.login-10 .animation-container .boom-container .shape.circle.big.white {
    border: 2px solid white;
}

.login-10 .animation-container .boom-container .shape:after {
    background-color: rgba(178, 215, 232, 0.2);
}

.login-10 .animation-container .boom-container .shape.triangle, .animation-container .boom-container .shape.circle, .animation-container .boom-container .shape.circle.big, .animation-container .boom-container .shape.disc {
    animation-delay: 0.38s;
    animation-duration: 3s;
}

.login-10 .animation-container .boom-container .shape.circle {
    animation-delay: 0.6s;
}

.login-10 .animation-container .boom-container.second {
    left: 485px;
    top: 155px;
}

.login-10 .animation-container .boom-container.second .shape.triangle, .animation-container .boom-container.second .shape.circle, .animation-container .boom-container.second .shape.circle.big, .animation-container .boom-container.second .shape.disc {
    animation-delay: 1.9s;
}

.login-10 .animation-container .boom-container.second .shape.circle {
    animation-delay: 2.15s;
}

@keyframes woosh {
    0% {
        width: 12px;
        transform: translate(0px, 0px) rotate(-35deg);
    }
    15% {
        width: 50px;
    }
    30% {
        width: 12px;
        transform: translate(214px, -150px) rotate(-35deg);
    }
    30.1% {
        transform: translate(214px, -150px) rotate(46deg);
    }
    50% {
        width: 110px;
    }
    70% {
        width: 12px;
        transform: translate(500px, 150px) rotate(46deg);
    }
    70.1% {
        transform: translate(500px, 150px) rotate(-37deg);
    }
    85% {
        width: 50px;
    }
    100% {
        width: 12px;
        transform: translate(700px, 0) rotate(-37deg);
    }
}
@keyframes boom-circle {
    0% {
        opacity: 0;
    }
    5% {
        opacity: 1;
    }
    30% {
        opacity: 0;
        transform: scale(3);
    }
}
@keyframes boom-triangle-big {
    0% {
        opacity: 0;
    }
    5% {
        opacity: 1;
    }
    40% {
        opacity: 0;
        transform: scale(2.5) translate(50px, -50px) rotate(360deg);
    }
}
@keyframes boom-triangle {
    0% {
        opacity: 0;
    }
    5% {
        opacity: 1;
    }
    30% {
        opacity: 0;
        transform: scale(3) translate(20px, 40px) rotate(360deg);
    }
}
@keyframes boom-disc {
    0% {
        opacity: 0;
    }
    5% {
        opacity: 1;
    }
    40% {
        opacity: 0;
        transform: scale(2) translate(-70px, -30px);
    }
}

/** Social media **/
.login-10 .facebook-bg {
    background: #4867aa;
}

.login-10 .facebook-i {
    background: #3b589e;
}

.login-10 .twitter-bg {
    background: #33CCFF;
}

.login-10 .twitter-i {
    background: #0cace0;
}

.login-10 .google-bg {
    background: #db4437;
}

.login-10 .google-i {
    background: #c3291c;
}

@media (max-width: 768px) {
    .login-10 .form-section {
        padding: 50px 30px;
    }

    .login-10 .animation-container{
        display: none;
    }
}

@media (max-width: 500px) {
    .login-10 .form-section .social-list li a i {
        display: none;
    }

    .login-10 .form-section .social-list li a {
        width: 105px;
    }
}
/** Login 10 end **/

/** Login 11 start **/
.login-11{
    background: url(../img/img-11.png) top left repeat;
    background-size: cover;
    min-height: 100vh;
}

.login-11 .bg-color-11 {
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-11 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-11 .container{
    max-width: 1400px;
    margin: 0 auto;
}

.login-11 .form-section{
    max-width: 500px;
    margin-right: auto;
    width: 100%;
    background: #fff;
    padding: 50px;
    border-radius: 0;
}

.login-11 .form-box{
    width: 100%;
}


.login-11 .form-check-input:focus {
    box-shadow: none;
}

.login-11 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-11 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-11 .login-inner-form .form-control {
    font-size: 15px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    border: 1px solid #dbdbdb;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .06);
}

.login-11 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-11 .login-inner-form .form-box .form-control {
    float: left;
    width: 100%;
    padding: 13px 15px 13px 65px;
    height: 55px;
}

.login-11 .login-inner-form .form-box i {
    position: absolute;
    left: 0;
    width: 55px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    background: #5d8dfa;
    border-radius: 3px 0 0 3px;
    font-size: 20px;
    color: #fff;
}

.login-11 .info {
    color: #fff;
    text-align: right;
    max-width: 550px;
    margin-left: auto;
}

.login-11 .bg-img {
    top: 0;
    bottom: 0;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-11 .animate-charcter {
    background-image: linear-gradient(-225deg, #231557 0%, #44107a 29%, #ff1361 67%, #fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 55px;
    font-weight: 700;
    margin-bottom: 20px;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}

.login-11 .login-inner-form .form-label{
    margin-bottom: 5px;
    color: #535353;
    float: left!important;
}

.login-11 .info P{
    color: #e5e1e1;
    font-size: 15px;
    line-height: 25px;
    margin-bottom: 0;
}

.login-11 .login-inner-form .forgot{
    margin: 0;
    line-height: 40px;
    color: #fff;
    font-size: 14px;
    float: right;
}

.login-11 .btn-theme {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    width: 100%;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-11 .login-inner-form p{
    margin: 0;
    color: #e7e7e7;
}

.login-11 .login-inner-form p a{
    color: #e7e7e7;
}

.login-46 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-11 .logo{
    text-align: center;
    margin-bottom: 15px;
}

.login-11 .logo img{
    height: 25px;
}

.login-11 h3{
    text-align: center;
    margin: 0 0 24px;
    font-size: 22px;
    color: #5d8dfa;
    font-weight: 500;
}

.login-11 .form-check-input:checked {
    background-color: #5d8dfa!important;
    border-color: #5d8dfa!important;
}

.login-11 .login-inner-form .social-list{
    padding: 0;
    text-align: center;
}

.login-11 .login-inner-form .social-list li {
    display: inline-block;
}

.login-11 .login-inner-form .social-list li a {
    margin: 1px;
    font-size: 15px;
    font-weight: 400;
    width: 120px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-11 .login-inner-form .social-list li a:hover{
    text-decoration: none;
}

.login-11 .login-inner-form .extra-login {
    float: left;
    width: 100%;
    margin: 25px 0;
    text-align: center;
    position: relative;
}

.login-11 .login-inner-form .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #23396726;
    content: "";
}

.login-11 .login-inner-form .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #fff;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #535353;
    text-transform: capitalize;
}

.login-11 .login-inner-form .terms{
    margin-left: 3px;
}

.login-11 .login-inner-form .checkbox {
    margin-bottom: 25px;
    font-size: 15px;
}

.login-11 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
}

.login-11 .login-inner-form .form-check a {
    color: #535353;
    float: right;
}

.login-11 .login-inner-form .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-11 .btn{
    box-shadow: none!important;
}

.login-11 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-11 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-11 .btn-primary{
    background: #5d8dfa;
}

.login-11 .btn-primary:hover {
    background: #517fe7;
}

.login-11 .form-section a {
    text-decoration: none;
}

.login-11 .form-section .form-check-input {
    width: 18px;
    height: 18px;
    margin-top: 1px;
    position: absolute;
    border: 1px solid #dbdbdb;
    border-radius: 0;
    background-color: #fff;
    margin-left: -22px;
}

.login-11 .login-inner-form .checkbox a {
    font-size: 16px;
    font-weight: 400;
    color: #535353;
}

.login-11 .form-section p {
    margin: 28px 0 0;
    font-size: 16px;
    color: #535353;
}

.login-11 .form-section p a {
    color: #535353;
}

.login-11 .facebook-bg {
    background: #4867aa;
}

.login-11 .facebook-bg:hover {
    background: #3b589e;
    color: #fff;
}

.login-11 .twitter-bg {
    background: #33CCFF;
}

.login-11 .twitter-bg:hover {
    background: #56d7fe;
}

.login-11 .google-bg {
    background: #db4437;
}

.login-11 .google-bg:hover {
    background: #dc4e41;
}

/** MEDIA **/
@media (max-width: 1200px) {
    .login-11 .info {
        margin: 0;
    }

    .login-11 .waviy {
        font-size: 33px;
    }
}

@media (max-width: 992px) {
    .login-11 .bg-img{
        display: none;
    }

    .login-11 .login-inner-form .social-list li a {
        width: 100px;
        height: 35px;
        line-height: 35px;
        font-size: 14px;
    }

    .login-11 .bg-color-11 {
        padding: 30px 15px;
    }

    .login-11 .form-section {
        padding: 50px 30px;
        margin: 0 auto;
    }
}
/** Login 11 end **/

/** Login 12 start **/
.login-12 .login-inner-form .col-pad-0{
    padding: 0;
}

.login-12 .bg-img{
    background: url(../img/img-12.jpg) top left repeat;
    background-size: cover;
    top: 0;
    bottom: 0;
    min-height: 100vh;
    text-align: right;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 50px 30px 40px;
}

.login-12 .bg-img:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(74 0 255 / 64%);
}

.login-12 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-12 .form-section{
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
}

.login-12 .login-inner-form {
    max-width: 500px;
    width: 100%;
}

.login-12 .logo{
    top: 40px;
    position: absolute;
    right: 45px;
}

.login-12 .logo img{
    height: 30px;
}

.login-12 .login-inner-form p{
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-12 .login-inner-form p a{
    color: #535353;
    font-weight: 500;
    margin-left: 4px;
}

.login-12 .login-inner-form img {
    margin-bottom: 15px;
    height: 30px;
}

.login-12 .login-inner-form h1{
    font-size: 30px;
    color: #ffc801;
}

.login-12 .login-inner-form h3 {
    margin: 0 0 35px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-12 label {
    color: #535353;
    font-size: 16px;
    margin-bottom: 5px;
}

.login-12 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-12 .login-inner-form .form-control{
    width: 100%;
    padding: 10px 20px;
    font-size: 16px;
    border: 1px solid #d6d6d6;
    background: #fff;
    outline: none;
    color: #535353;
    border-radius: 0;
    height: 55px;
}

.login-12 .login-inner-form .input-text label {
    color: #535353;
    font-size: 14px;
    font-weight: 500;
    text-align: left;
}

.login-12 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
}

.login-12 .login-inner-form .form-check a {
    color: #535353;
    float: right;
}

.login-12 .login-inner-form .checkbox {
    margin-bottom: 25px;
    font-size: 16px;
}

.login-12 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: -24px;
}

.login-12 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
}

.login-12 a {
    text-decoration: none;
}

.login-12 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    font-weight: 500;
    color: #535353;
}

.login-12 .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 2px;
    vertical-align: top;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    position: absolute;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
    border: 1px solid #afabab;
}

.login-12 .login-inner-form .terms{
    margin-left: 4px;
}

.login-12 .form-check-input:focus {
    border-color: #ffc801!important;
    outline: 0;
    box-shadow: none;
}

.login-12 .form-check-input:checked {
    background-color: #ffc801!important;
}

.login-12 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-12 .btn-theme {
    position: relative;
    display: inline-block;
    width: 100%;
    color: #ffffff;
    overflow: hidden;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 0;
    border:none;
}

.login-12 .btn-theme:hover {
    color: #fff;
}

.login-12 .btn-theme:hover::before {
    left: 0%;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
}

.login-12 .btn-theme:before {
    position: absolute;
    content: '';
    left: 97%;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
    transform: skewX(336deg);
}

.login-12 .btn-theme span {
    position: relative;
    z-index: 1;
}

.login-12 .informeson {
    color: #fff;
    max-width: 600px;
    margin: 0 0 0 auto;
    z-index: 20;
}

.login-12 .informeson h2 {
    margin: 0 0 30px 0;
    font-size: 60px;
    color: yellow;
}

.login-12 .animated-text h2{
    display: block;
    text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);
    background: url(../img/animated-text.png) repeat-y;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-animation: aitf 80s linear infinite;
    -webkit-transform: translate3d(0, 0, 0);
    -webkit-backface-visibility: hidden;
}

@-webkit-keyframes aitf {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}

.login-12 .btn-section{
    margin-bottom: 30px;
}

.login-12 .informeson p{
    color: #fff;
    opacity: 0.9;
    line-height: 25px;
    font-size: 15px;
    margin-bottom: 40px;
}

.login-12 .logo-2{
    display: none;
}

.login-12 .btn-theme-2 {
    padding: 0 35px;
    display: inline-block;
    position: relative;
    z-index: 5;
    transition: .7s ease;
    background: transparent;
    line-height: 41px;
    font-size: 16px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 0;
}

.login-12 .btn-theme-2:hover{
    color: #fff;
}

.btn-theme-2:before, .btn-theme-2:after {
    color: #fff;
}

.login-12 .btn-theme-2:before, .btn-theme-2:before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    z-index: -1;
    transition: all .7s ease;
    border-radius: 0;
}

.login-12 .btn-theme-2:after, .btn-theme-2:after {
    position: absolute;
    content: "";
    top: 0;
    right: 0;
    width: 0;
    height: 100%;
    z-index: -1;
    transition: all .7s ease;
    border-radius: 0;
}

.login-12 .btn-theme-2:hover:before, .btn-theme-2:hover:after {
    width: 50%;
}

.login-12 .btn-theme-2 {
    border: 2px solid #ffc801;
    border-radius: 0;
    color: #ffc801;
}

.login-12 .btn-theme-2:before, .btn-theme-2:after {
    background: #ffc801;
}

.login-12 .btn-theme-3 {
    color: #fff;
    text-align: center;
    border: 2px solid transparent;
    display: inline-block;
    padding: 0 35px;
    position: relative;
    z-index: 1;
    transition: all .7s ease;
    border-radius: 50px;
    line-height: 41px;
    font-size: 16px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 0;
}

.login-12 .btn-theme-3:before {
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
    border-radius: 50px 0 0 50px;
}

.login-12 .btn-theme-3:after {
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
    border-radius: 0 50px 50px 0;
}

.login-12 .btn-theme-3:hover {
    background: transparent;
}

.login-12 .btn-theme-3:hover:before {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-12 .btn-theme-3:hover:after {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-12 .btn-theme-3 {
    background: #ffc801;
}

.login-12 .btn-theme-3:before {
    background: #ffc801;
}

.login-12 .btn-theme-3:after {
    background: #ffc801;
}

.login-12 .btn-theme-3:hover {
    color: #ffc801;
    border: 2px solid #ffc801;
}

.login-12 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-12 .btn{
    box-shadow: none!important;
}

.login-12 .btn-md{
    padding: 0 45px;
    line-height: 50px;
}

.login-12 .btn-primary {
    background: #ffc801;
}

.login-12 .btn-primary:before {
    background: #eab802;
}

.login-4 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

/** social box **/
.login-12 .social-box {
    bottom: 30px;
    position: absolute;
    right: 55px;
    left: 55px;
}

.login-12 .social-box ul{
    padding: 0;
    margin-bottom: 0;
}

.login-12 .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-12 .social-list li a {
    font-size: 14px;
    font-weight: 500;
    width: 135px;
    margin: 2px 0 3px 0;
    height: 45px;
    line-height: 45px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
    box-shadow: 0 0 5px rgb(0 0 0 / 20%);
    font-family: 'Jost', sans-serif;
}

.login-12 .social-list li a i {
    height: 45px;
    width: 45px;
    line-height: 45px;
    float: left;
    color: #fff;
    font-size: 14px;
}

.login-12 .social-list li a span {
    margin-right: 10px;
}

.login-12 .social-list .facebook-color {
    color: #4867aa;
}

.login-12 .social-list .facebook-i {
    background: #4867aa;
}

.login-12 .twitter-color {
    color: #33CCFF;
}

.login-12 .twitter-i {
    background: #33CCFF;
}

.login-12 .google-color {
    color: #db4437;
}

.login-12 .google-i {
    background: #db4437;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-12 .logo-2{
        display: inherit;
    }

    .login-12 .bg-img{
        display: none;
    }

    .login-12 .form-section{
        padding: 30px 15px;
    }
}
/** Login 12 end **/

/** Login 13 start **/
.login-13 {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
}

.login-13 .form-info {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
}

.login-13 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-13 .form-section{
    max-width: 450px;
    margin: 0 auto;
    width: 100%;
}

.login-13 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-13 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-13 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    border: 1px solid #efefef;
    background: #efefef;
    height: 55px;
    float: left;
    width: 100%;
    padding: 13px 40px 11px 15px;
}

.login-13 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 15px;
    font-size: 18px;
    color: #535353;
}

.login-13 .form-section a {
    text-decoration: none;
}

.login-13 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
    color: #efefef;
    font-size: 15px;
}

.login-13 .bg-img {
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    overflow: hidden;
    background: #fff;
    border-radius: 0 0 350px 0;
}

.bg-img-inner:before {
    content: "";
    width: 20%;
    height: 20%;
    position: absolute;
    top: 50px;
    left: 50px;
    border-radius: 100% 0 100% 100%;
    background-image: linear-gradient(to bottom, #ffb100, #ff8e00);
}

.login-13 .bg-img-inner:after {
    content: "";
    width: 30%;
    height: 60%;
    position: absolute;
    top: 20%;
    right: 0;
    z-index: -1;
    -webkit-clip-path: polygon(0 0, 30% 0, 70% 10%);
    clip-path: polygon(0 0, 100% 50%, 100% 80%);
    background-image: linear-gradient(to bottom, #ffb100, #ff8e00);
}

.login-13 .info{
    z-index: 999;
    max-width: 650px;
}

.login-13 .info p {
    margin-bottom: 0;
    line-height: 28px;
}

.login-13 .form-section .form-check .form-check-input {
    margin-left: -22px;
}

.login-13 .center h1{
    color: rgba(255,0,0,0.1);
    font-size: 50px;
    text-transform: uppercase;
    font-weight: 700;
    background-size: cover;
    background-image: url(https://cdn-images-1.medium.com/max/2000/1*Jalb56N34pBIGCjQULtW3A.jpeg);
    -webkit-background-clip: text;
    animation: background-text-animation 15s linear infinite;
    margin-bottom: 20px;
}

@keyframes background-text-animation {
    0%{
        background-position: left 0px top 50%;
    }
    50%{
        background-position: left 1500px top 50%;
    }
    100%{
        background-position: left 0px top 50%;
    }
}

.login-13 .login-inner-form p{
    margin: 0;
    color: #efefef;
}

.login-13 .login-inner-form p a{
    color: #efefef;
}

.login-13 .logo img{
    height: 30px;
    margin-bottom: 20px;
}

.login-13 .nav-pills li{
    display: inline-block;
}

.login-13 .login-inner-form .form-group.mb-35{
    margin-bottom: 35px;
}

.login-13 .login-inner-form .form-group.mb-30{
    margin-bottom: 30px;
}

.login-13 .login-inner-form .terms{
    margin-left: 3px;
}

.login-13 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
}

.login-13 .login-inner-form .form-check a {
    color: #efefef;
}

.login-13 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-13 .login-inner-form .form-check-label {
    padding-left: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: #efefef;
}

.login-13 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 2px;
    position: absolute;
    border: 1px solid #efefef;
    border-radius: 2px;
}

.login-13 .form-check-input:focus {
    border-color: #fff;
    outline: 0;
    box-shadow: none;
}

.login-13 .form-check-input:checked {
    background-color: #ff8a00!important;
    border-color: #ff8a00!important;
}

.login-13 .btn-section{
    top: 20px;
    position: absolute;
    left: 0px;
    float: right;
    display: inline-block;
    width: 100px;
}

.login-13 .btn-section .link-btn {
    font-size: 14px;
    float: left;
    background: transparent;
    font-weight: 400;
    line-height: 50px;
    width: 120px;
    text-decoration: none;
    text-decoration: blink;
    text-align: center;
    color: #fff!important;
    border-radius: 0 50px 50px 0;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.login-13 .btn-section .active-bg{
    background-image: linear-gradient(to bottom, #585858, #000000);
}

.login-13 .btn-section .default-bg{
    background-image: linear-gradient(to bottom, #ffb400, #ff8a00);
}

.login-13 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #efefef;
    margin-left: 3px;
}

.login-13 .form-section{
    text-align: center;
}

.login-13 .form-section h3{
    font-size: 25px;
    margin-bottom: 40px;
    font-weight: 400;
    color: #fff;
}

.login-13 .form-section p {
    margin: 25px 0 0;
    font-size: 15px;
    color: #efefef;
}

.login-13 .form-section p a {
    color: #efefef;
}

.login-13 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 40px 0 0;
}

.login-13 .form-section .social-list li {
    display: inline-block;
}

.login-13 .form-section .social-list li a {
    font-size: 13px;
    font-weight: 600;
    width: 135px;
    margin: 0 2px 5px 0;
    height: 45px;
    line-height: 45px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
}

.login-13 .form-section .social-list li a i {
    height: 45px;
    width: 45px;
    line-height: 45px;
    float: left;
    color: #fff;
}

.login-13 .none-2 {
    display: none;
}

.login-13 .btn-theme {
    color: #fff;
    text-align: center;
    border: 2px solid transparent;
    display: inline-block;
    padding: 0 50px;
    position: relative;
    line-height: 46px;
    z-index: 1;
    transition: all .7s ease;
    border-radius: 3px;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    width: 100%;
}

.login-13 .btn-theme:before {
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

.login-13 .btn-theme:after {
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

.login-13 .btn-theme:hover {
    background: transparent;
}

.login-13 .btn-theme:hover:before {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-13 .btn-theme:hover:after {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-13 .btn-lg{
    padding: 0 30px;
    line-height: 51px;
}

.login-13 .btn{
    box-shadow: none!important;
}

.login-13 .btn-md{
    padding: 0 45px;
    line-height: 41px;
}

.login-13 .btn-primary {
    background-image: linear-gradient(to bottom, #ffb400, #ff8a00);
}

.login-13 .btn-primary:before {
    background-image: linear-gradient(to bottom, #ffb400, #ff8a00);
}

.login-13 .btn-primary:after {
    background-image: linear-gradient(to bottom, #ffb400, #ff8a00);
}

.login-13 .btn-primary:hover {
    color: #ff8a00;
    border: 2px solid #ff8a00;
}

/** Social media **/
.login-13 .facebook-i {
    background: #4867aa;
    color: #fff;
}

.login-13 .twitter-i {
    background: #33CCFF;
    color: #fff;
}

.login-13 .google-i {
    background: #db4437;
    color: #fff;
}

.login-13 .facebook-color{
    color: #4867aa;
}

.login-13 .twitter-color {
    color: #33CCFF;
}

.login-13 .google-color {
    color: #db4437;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-13 .bg-img{
        display: none;
    }

    .login-13 .none-2 {
        display: block;
    }

    .login-13 .btn-section {
        display: none;
    }

    .login-13 .form-section .form-section-innner:before{
        display: none;
    }

    .login-13 .form-section .form-section-innner:after {
        display: none;
    }
}
/** Login 13 end **/

/** Login 14 start **/
.login-14 {
    z-index: 999;
}

.login-14 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-14 .form-section {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: url(../img/img-14.jpg);
    z-index: 999;
}

.login-14 .form-section a{
    text-decoration: none;
}

.login-14 .form-inner {
    max-width: 550px;
    width: 100%;
    margin: 0 15px;
    text-align: center;
    padding: 50px;
    z-index: 1;
    background: #fff;
}

.login-14 .bg-img {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 30px;
    z-index: 999;
}

.login-14 .info .animated-text{
    margin-bottom: 30px!important;
}

.login-14 .info .animated-text, .infoCont {
    max-width: 100%;
    display: table;
    border-spacing: 2px;
    margin: auto;
}

.login-14 .info #username {
    display: table-row;
}

.login-14 .info .char1, .char2, .char3, .char4, .char5, .char6, .char7, .char8 {
    -webkit-animation: swing-in-top-fwd 1s cubic-bezier(0.680, -0.550, 0.265, 1.550) both;
    text-align: center;
    text-transform: uppercase;
    font-size: 22px;
    line-height: 50px;
    font-weight: 600;
    box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
    display: table-cell;
    margin: 5px!important;
}

.login-14 .info .char-color{
    background-image: linear-gradient(to bottom, #211297, #170e5d)!important;
    border-radius: 3px;
    width: 55px;
    height: 55px;
    color: #dbdbdb;
}

.login-14 .info .username {
    margin: auto;
    max-width: 100%;
    display: table-cell;
    padding: 40px;
    border-radius: 5px;
    -webkit-animation: swing-in-top-fwd 1s cubic-bezier(0.680, -0.550, 0.265, 1.550) both;
    text-align: center;
    font-size: 15px;
    background-image: linear-gradient(to bottom, #211297, #170e5d);
    box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.2);
    color: #dbdbdb;
}

@-webkit-keyframes swing-in-top-fwd {
    0% {
        -webkit-transform: rotateX(-100deg);
        -webkit-transform-origin: top;
        opacity: 0;
    }
    100% {
        -webkit-transform: rotateX(0deg);
        -webkit-transform-origin: top;
        opacity: 1;
    }
}

.login-14 .info {
    z-index: 999;
}

.login-14 .form-section .extra-login {
    float: left;
    width: 100%;
    text-align: center;
    position: relative;
}

.login-14 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e4e4e4;
    content: "";
}

.login-14 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 14px;
    color: #535353;
    text-transform: capitalize;
    background: #fff;
}

.login-14 .form-section p {
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-14 .form-section p a {
    color: #535353;
}

.login-14 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-14 .form-section .thembo {
    margin-left: 4px;
}

.login-14 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-14 .form-section .form-group {
    margin-bottom: 25px;
}

.login-14 .form-section .form-box {
    position: relative;
}

.login-14 .form-section .form-control {
    padding: 14.5px 20px;
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    border: 1px solid #dadadae8;
    background: #fff;
}

.login-14 .form-section img {
    margin-bottom: 5px;
    height: 40px;
}

.login-14 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 23px;
    color: #777575;
}

.login-14 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-14 .form-section .terms {
    margin-left: 3px;
}

.login-14 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 25px;
    font-size: 16px;
    color: #535353;
}

.login-14 .form-section .form-check .form-check-input {
    margin-left: -25px;
}

.login-14 .form-check-input:focus {
    border-color: #211297;
    outline: 0;
    box-shadow: none;
}

.login-14 .form-check-input:checked {
    background-color: #211297;
    border-color: #211297!important;
}

.login-14 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0;
    vertical-align: top;
    position: absolute;
    border: 1px solid #c5c3c3;
    border-radius: 3px;
}

.login-14 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
}

.login-14 .logo img {
    margin-bottom: 15px;
    height: 25px;
}

.login-14 .info {
    max-width: 800px;
}

.login-14 .info h1 {
    margin-bottom: 20px;
    font-size: 45px;
    font-weight: 700;
    text-transform: uppercase;
}

.login-14 .info p {
    line-height: 28px;
    color: #535353;
}

.login-14 .btn-theme {
    position: relative;
    display: inline-block;
    width: 100%;
    color: #ffffff;
    overflow: hidden;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    border: none;
}

.login-14 .btn-theme:hover {
    color: #fff;
}

.login-14 .btn-theme:hover::before {
    left: 0%;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
}

.login-14 .btn-theme:before {
    position: absolute;
    content: '';
    left: 96%;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
    transform: skewX(-25deg);
}

.login-14 .btn-theme span {
    position: relative;
    z-index: 1;
}

.login-14 .btn-check:focus+.btn, .btn:focus {
    outline: 0;
    box-shadow: none;
}

.login-14 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-14 .btn-md{
    padding: 0 45px;
    line-height: 50px;
}

.login-14 .btn{
    box-shadow: none!important;
}

.login-14 .btn-primary {
    background: #211297;
}

.login-14 .btn-theme:before{
    background: #1a0d85;
}

.login-14 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-14 .social-list {
    padding: 0;
    text-align: center;
}

.login-14 .social-list li {
    display: inline-block;
}

.login-14 .social-list li a {
    margin: 1px;
    font-size: 14px;
    font-weight: 500;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 0;
    display: inline-block;
    text-align: center;
    color: #fff;
    margin-bottom: 5px;
}

.login-14 .social-list li a:hover {
    text-decoration: none;
}

.login-14 .facebook-bg {
    background: #4867aa;
}

.login-14 .facebook-bg:hover {
    background: #3d5996;
}

.login-14 .twitter-bg {
    background: #33CCFF;
}

.login-14 .twitter-bg:hover {
    background: #56d7fe;
}

.login-14 .google-bg {
    background: #db4437;
}

.login-14 .google-bg:hover {
    background: #dc4e41;
}

:root{
    --animation-duration:1s;
    --bounce-height:calc(205px - 100vh);
}

.login-14 {
    overflow: hidden;
}

.login-14 #suport{
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align:center;
}

.login-14 #smash{
    animation-name: smash;
    animation-duration: var(--animation-duration);
    animation-direction: alternate;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    transform-origin: bottom;
}

.login-14 #translateShadow,#rotateImg,#light{
    border-radius: 50%;
    display:inline-block;
    width: 200px;
    height: 200px;
}

.login-14 #light{
    background-image:  radial-gradient(circle at 20% 20%, rgba(255, 221, 179,.7),rgba(255, 221, 179,.5) 10%, transparent 30% ,rgba(83,42,0,.8) 85%);
    position:absolute;
    z-index: 1;
}

.login-14 #translateShadow{
    animation-name: translateShadow;
    animation-duration: var(--animation-duration);
    animation-direction: alternate;
    animation-iteration-count: infinite;
    animation-timing-function: ease-out;
}

.login-14 #rotateImg{
    background-image: url("data:image/svg+xml;utf8, <svg xmlns='http://www.w3.org/2000/svg' viewBox='75 75 251 251' fill='rgb(83,42,0)'><path d='M313.3,145.3c-14.4-19.3-38.8-50.5-67.1-61.6c-4.6-1.7-16.2-5.1-21.3-6.3	c-26.3-5.3-54.5-2.3-80.4,10.4c-30.2,14.8-52.9,40.6-63.8,72.5c-10.9,31.8-8.7,66,6.2,96.1l0.1,0.2c2.1,4.2,4.4,8.3,6.9,12.2l0,0	c0,0,0,0,0,0c23.6,36.9,64.4,58,106.5,58c18.7,0,37.6-4.1,55.4-12.9c30.2-14.8,52.9-40.6,63.8-72.5 	C330.3,209.6,328.1,175.5,313.3,145.3z M238.3,86.2c25.2,12.5,41.2,36.6,46,68.5c-24.3,0.8-45.4-15.7-67.4-33.1 	c-18.4-14.5-37.3-19.3-58.9-34.2C184.6,77.6,212.8,77.7,238.3,86.2z M85.4,161.9c10.4-30.6,32.2-55.3,61.2-69.6 	c0.9-0.4,1.7-0.8,2.6-1.2c23.6,2.3,44.4,18.6,64.6,34.5c21.4,16.9,43.4,34.1,68.8,34.1c0.8,0,1.5,0,2.3-0.1c1,9.5,1.1,19.7,0.2,30.4 	c-9.8-3.3-19.3-5.9-25.7-7.6c-37.6-9.8-79.7-16.1-112.5-16.7c-24-0.5-53,1.8-66,14.2C81.8,173.9,83.4,167.8,85.4,161.9z M91.4,254.4 	l-0.1-0.2c-10.1-20.5-14.1-42.8-11.9-65l0.5,0.2c5.3-12.9,29-19.5,66.7-18.8c32.5,0.7,74.1,6.8,111.4,16.6 	c10.1,2.6,18.9,5.3,26.5,7.8c-1.2,10.2-3.3,20.4-6.3,30.3c-19.8-8.8-48.7,2.6-81.8,15.7c-32,12.6-68.1,26.8-99.7,23 	C94.9,261,93.1,257.7,91.4,254.4z M187.8,321.2c-34.6-3.6-67-21.9-87.5-51.7c31.8,2.4,66.9-11.4,98-23.7 	c32.4-12.8,60.6-23.9,78.4-15.5c-5.6,17.2-13.6,33.4-23.5,47c-12.8,17.7-34.5,39.5-65.6,43.3L187.8,321.2z M253.5,309.4 	c-15.6,7.7-32.1,11.6-48.4,12.3c36.2-12.4,62.8-49,76.1-88.8c9.1,6.7,14.2,20.1,15.8,40.6C285.7,288.6,270.9,300.9,253.5,309.4z 	 M314.8,239.8c-3.3,9.8-7.8,19-13.3,27.4c-2.4-19.7-8.5-32.6-18.7-39.3c3.1-10.3,5.4-20.8,6.6-31.1c19.2,6.9,29.2,13.2,30.7,17.3 	l0.4-0.2C319.6,222.6,317.7,231.3,314.8,239.8z M290,191.7c1.1-11.3,1-22.1-0.2-32.4c6.8-0.9,13.8-3,21.1-6.8l-2.3-4.5 	c-6.8,3.4-13.2,5.4-19.5,6.3c-1.6-11.1-4.6-21.4-8.8-30.7c-4.6-10.3-10.8-19.2-18.3-26.6c19.5,11.6,36,28.7,46.8,50.5 	c9.3,18.9,13.4,39.4,12.3,59.8C314.9,201.6,302.6,196.1,290,191.7z'/></svg>");
    background-color: darkorange;
    background-size: 100%;
    animation-name: rotateImg;
    animation-duration: calc(var(--animation-duration) * 5.3);
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}

@keyframes translateShadow {
    0% {transform: translateY(0) ;box-shadow: 40px 40px  10px #444466}
    100% {transform: translateY(var(--bounce-height));box-shadow:40px 350px  250px #444466}
}

@keyframes smash{
    0% {transform: scaleY(.7)}
    15%  {transform: scaleY(1)}
}

@keyframes rotateImg {
    100% {transform:rotate(360deg)}
}

@media (max-width: 992px) {
    .login-14 .bg-img {
        display: none;
    }

    .login-14 .form-section {
        padding: 30px 0;
    }

    .login-14 .form-inner {
        padding: 40px 30px;
    }
}
/** Login 14 end **/

/** Login 15 start **/
.login-15 {
    background: rgba(0, 0, 0, 0.04) url(../img/img-15.jpg) top left repeat;
    z-index: 999;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    min-height: 100vh;
    text-align: center;
    position: relative;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
}

.login-15 a {
    text-decoration: none;
}

.login-15 .login-inner-form {
    max-width: 500px;
    margin: 0 0 0 auto;
}

.login-15 .login-inner-form .details {
    padding: 50px;
    background: #fff;
    border-radius: 5px;
    margin-bottom: 30px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-15 .login-inner-form p {
    color: #717171;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-15 .form-check-input:checked {
    display: none;
}

.login-15 .login-inner-form p a {
    font-weight: 500;
    color: #717171;
}

.login-15 .login-inner-form .extra-login {
    float: left;
    width: 100%;
    margin: 30px 0 25px;
    text-align: center;
    position: relative;
}

.login-15 .login-inner-form .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-15 .login-inner-form .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #fff;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-family: Open Sans;
    font-size: 14px;
    color: #717171;
    text-transform: capitalize;
}

.login-15 .login-inner-form ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.login-15 .login-inner-form .social-list li {
    display: inline-block;
}

.login-15 .login-inner-form .social-list li a {
    margin: 1px;
    font-size: 14px;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
}

.login-15 .login-inner-form .thembo {
    margin-left: 4px;
}

.login-15 .login-inner-form h3 {
    margin: 0 0 25px;
    font-size: 27px;
    font-weight: 400;
    text-align: center;
    color: #313131;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-15 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-15 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-15 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #717171;
    border-radius: 3px;
    border: 1px solid #dbdbdb;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .06);
    padding: 12px 15px 12px 45px;
}

.login-15 .login-inner-form .form-box i {
    position: absolute;
    top: 11px;
    color: #717171;
    left: 15px;
    font-size: 19px;
}

.login-15 .login-inner-form .checkbox a {
    font-size: 16px;
}

.login-15 .login-inner-form .checkbox .terms {
    margin-left: 3px;
}

.login-15 .login-inner-form .btn-md {
    cursor: pointer;
    height: 50px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    text-transform: uppercase;
}

.login-15 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-15 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-15 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-15 .login-inner-form .btn-theme {
    background: #c823ea;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
}

.login-15 .login-inner-form .btn-theme:hover {
    background: #ba1fda;
}

.login-15 .none-2 {
    display: none;
}

.login-15 .logo {
    top: 40px;
    position: absolute;
    left: 65px;
}

.login-15 .logo-2 {
    text-align: center;
}

.login-15 .logo-2 img{
    height: 35px;
    margin-bottom: 30px;
}

.login-15 .login-inner-form .terms {
    margin-left: 3px;
}

.login-15 .login-inner-form .checkbox {
    margin-bottom: 25px;
}

.login-15 .login-inner-form .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-15 .login-inner-form .form-check a {
    color: #717171;
    float: right;
}

.login-15 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-15 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 17px;
    height: 17px;
    top: 3px;
    margin-left: -25px;
    border: 1px solid #c5c3c3;
    border-radius: 3px;
    background-color: #fff;
}

.login-15 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #717171;
}

.login-15 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    border-color: #c823ea;
    background: #c823ea;
}

.login-15 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 12px;
    content: "\2713";
}

.login-15 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-15 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #717171;
    float: right;
}

/** Social media **/
.login-15 .facebook-bg {
    background: #4867aa;
    color: #fff;
}

.login-15 .facebook-bg:hover {
    background: #3b589e;
    color: #fff;
}

.login-15 .twitter-bg {
    background: #33CCFF;
    color: #fff;
}

.login-15 .twitter-bg:hover {
    background: #56d7fe;
    color: #fff;
}

.login-15 .google-bg {
    background: #db4437;
    color: #fff;
}

.login-15 .google-bg:hover {
    background: #dc4e41;
    color: #fff;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-15 {
        padding: 50px 0;
    }

    .login-15 .login-inner-form {
        margin: 0 auto 0;
    }

    @media (max-width: 768px) {
        .login-15 .login-inner-form .details {
            padding: 50px 30px;
            background: #fff;
        }
    }
}
/** Login 15 end **/

/** Login 16 start **/
.login-16 .login-16-inner {
    z-index: 999;
    position: relative;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    overflow: hidden;
    padding: 30px 0;
}

.login-16 .login-16-inner .ocean {
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    background: #015871;
}

.login-16 .login-16-inner .wave {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
    position: absolute;
    top: -138px;
    width: 6400px;
    height: 138px;
    animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
    transform: translate3d(0, 0, 0);
}

.login-16 .login-16-inner .wave:nth-of-type(2) {
    top: -115px;
    animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -0.125s infinite, swell 7s ease -1.25s infinite;
    opacity: 1;
}

@keyframes wave {
    0% {
        margin-left: 0;
    }
    100% {
        margin-left: -1600px;
    }
}

@keyframes swell {
    0%, 100% {
        transform: translate3d(0, -25px, 0);
    }
    50% {
        transform: translate3d(0, 5px, 0);
    }
}

.login-16 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-16 .login-box {
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    position: relative;
    max-width: 1120px;
    z-index: 999;
}

.login-16 .login-box {
    background-image: linear-gradient(to bottom, #2e3f95, #7ec0c7);
}

.login-16 .login-16-inner:after {
    position: absolute;
    left: -1px;
    top: 30px;
    width: 286px;
    height: 180px;
    content: "";
    z-index: -1;
    background: url(../img/img-16.jfif) top left repeat;
}

.login-16 .form-section {
    text-align: center;
    padding: 80px 90px;
    border-right: solid 1px #e9dede2e;
}

.login-16 .pad-0{
    padding: 0;
}

.login-16 .form-section p{
    margin-bottom: 0;
    font-size: 16px;
    color: #efefef;
}

.login-16 .form-section p a{
    color: #efefef;
}

.login-16 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-16 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-16 .form-section .thembo{
    margin-left: 4px;
}

.login-16 .logo img{
    height: 30px;
    margin-bottom: 20px;
}

.login-16 .form-section h3 {
    text-align: center;
    margin: 0 0 25px;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    color: #ffffff;
}

.login-16 .form-section .form-group {
    margin-bottom: 25px;
}

.login-16 .form-section .form-group .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-16 .form-section .form-group  .form-box .form-control {
    padding: 15px 15px 15px 50px;
    background-color: #fff;
    border: 1px solid #fff;
    border-radius: 0;
}

.login-16 .form-section .form-group .form-box i {
    position: absolute;
    top: 14px;
    left: 20px;
    font-size: 20px;
    color: #777575;
}

.login-16 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-16 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-16 .form-section .terms{
    margin-left: 3px;
}

.login-16 .form-section a {
    text-decoration: none;
}

.login-16 .form-section .checkbox {
    font-size: 15px;
}

.login-16 .form-section .form-check{
    float: left;
    margin-bottom: 0;
}

.login-16 .form-section .form-check a {
    color: #efefef;
}

.login-16 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #efefef;
}

.login-16 .form-section a.forgot-password {
    font-size: 16px;
    color: #efefef;
}

.login-16 .form-check-input:focus {
    border-color: transparent;
    box-shadow: none;
}

.login-16 .form-check-input:checked {
    background-color: #272a2a!important;
    border: 1px solid #272a2a!important;
}

.login-16 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0px;
    border: 1px solid #fff;
    background-color: #fff;
    position: absolute;
    margin-left: -22px;
    border-radius: 0;
}

.login-16 .social-list a {
    width: 45px;
    height: 45px;
    line-height: 45px;
    text-align: center;
    display: inline-block;
    font-size: 19px;
    background: #fff;
    border-radius: 100px;
}

.login-16 .social-list a:hover{
    color: #fff;
}

.login-16 .btn-theme {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    float: left;
}

.login-16 .btn-theme:hover {
    color: #fff;
}

.login-16 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-16 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 7px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-16 .btn-theme{
    background: #272a2a;
}

.login-16 .btn-theme:after {
    background: #050606;
}

.login-16 .btn-lg{
    font-size: 17px;
    padding: 0 50px;
    line-height: 56px;
}

.login-16 .btn{
    box-shadow: none!important;
}

.login-16 .btn-md{
    padding: 0 50px;
    font-size: 15px;
    line-height: 45px;
}

.login-16 .info{
    position: relative;
    width: 350px;
    margin: 0 auto;
    height: 350px;
    text-align: center;
}

.login-16 .info .box h3{
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom: 20px;
    font-weight: 500;
    color: #fff;
}

.login-16 .info .box p{
    color: #efefef;
    font-size: 15px;
}

.login-16 .info .box {
    position: absolute;
    width: 350px;
    margin: 0 auto;
    height: 350px;
    overflow: hidden;
    padding: 20px;
    border: solid 15px #ffffff0f;
}

.login-16 .info .box .content{
    position:absolute;
    top:15px;
    left:15px;
    right:15px;
    bottom:15px;
    border: solid 1px rgb(255 255 255 / 20%);
    padding: 99px 10px;
}

.login-16 .info .box span{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
    box-sizing: border-box;
}

.login-16 .info .box span:nth-child(1) {
    transform:rotate(0deg);
}

.login-16 .info .box span:nth-child(2) {
    transform:rotate(90deg);
}

.login-16 .info .box span:nth-child(3) {
    transform:rotate(180deg);
}

.login-16 .info .box span:nth-child(4) {
    transform:rotate(270deg);
}

.login-16 .info .box span:before {
    content: '';
    position: absolute;
    width:100%;
    height: 3px;
    background: #fff;
    animation: animate 4s linear infinite;
}

@keyframes animate {
    0% {
        transform:scaleX(0);
        transform-origin: left;
    }
    50% {
        transform:scaleX(1);
        transform-origin: left;
    }
    50.1% {
        transform:scaleX(1);
        transform-origin: right;
    }

    100% {
        transform:scaleX(0);
        transform-origin: right;
    }
}

/** Social media **/
.login-16 .facebook-bg{
    color: #4867aa;
}

.login-16 .facebook-bg:hover {
    background: #4867aa;
}

.login-16 .twitter-bg {
    color: #33CCFF;
}

.login-16 .twitter-bg:hover {
    background: #33CCFF;
}

.login-16 .google-bg {
    color: #db4437;
}

.login-16 .google-bg:hover {
    background: #db4437;
}

.login-16 .linkedin-bg {
    color: #2392e0;
}

.login-16 .linkedin-bg:hover {
    background: #1c82ca;
}

@media (max-width: 1200px) {
    .login-16 .form-section {
        padding: 80px 50px;
    }
}

@media (max-width: 992px) {
    .login-16 .form-section {
        padding: 50px 30px;
        border-right: none;
    }

    .login-16 .bg-img{
        display: none;
    }

    .login-16 .login-box {
        max-width: 500px;
    }
}
/** Login 16 end **/

/** Login 17 start **/
.login-17 {
    background: url(../img/img-17.jpg) top left repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.login-17 a {
    text-decoration: none;
}

.login-17:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgb(0 0 0 / 20%);
}

.login-17 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-17 .form-check-input:checked {
    display: none;
}

.login-17 .form-section {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 0;
    border-radius: 100% 0 0 100%;
    background: #fff;
    border: solid 10px #000;
}

.login-17 .form-inner {
    max-width: 450px;
    margin: 0 50px;
    text-align: center;
}

.login-17 .bg-img {
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 496px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-17 .form-section .extra-login {
    float: left;
    width: 100%;
    text-align: center;
    position: relative;
}

.login-17 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e4e4e4;
    content: "";
}

.login-17 .form-section .extra-login > span {
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #424242;
    text-transform: capitalize;
    background: #fff;
}

.login-17 .form-section p {
    color: #dadada;
    margin-bottom: 0;
    text-align: center;
    font-size: 15px;
}

.login-17 .form-section p {
    color: #424242;
    margin-bottom: 0;
    font-size: 16px;
}

.login-17 .form-section p a {
    color: #424242;
}

.login-17 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-17 .form-section .thembo {
    margin-left: 4px;
}

.login-17 .form-section h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #121212;
}

.login-17 .form-section .form-group {
    margin-bottom: 25px;
}

.login-17 .form-section .form-box {
    float: left;
    width: 100%!important;
    text-align: left;
    position: relative;
}

.login-17 .form-section .form-control {
    padding: 15.5px 20px;
    font-size: 16px;
    outline: none;
    color: #424242;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-17 .form-section img {
    margin-bottom: 5px;
    height: 40px;
}

.login-17 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 23px;
    color: #424242;
}

.login-17 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-17 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
}

.login-17 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-17 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-17 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-17 .form-section .btn-theme {
    background: #ff574d;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
    border-radius: 3px;
    font-weight: 400;
}

.login-17 .form-section .btn-theme:hover {
    background: #ef4b22;
}

.login-17 .form-section .terms {
    margin-left: 3px;
}

.login-17 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-17 .form-section .form-check a {
    color: #424242;
    float: right;
}

.login-17 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-17 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #c5c3c3;
    border-radius: 3px;
    background-color: #fff;
}

.login-17 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #424242;
}

.login-17 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background: #ff574d;
    border-color: #ff574d;
}

.login-17 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 14px;
    padding-left: 3px;
    content: "\2713";
}

.login-17 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-17 .form-section a.forgot-password {
    font-size: 16px;
    color: #424242;
    float: right;
}

.login-17 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

.login-17 .info {
    max-width: 590px;
    padding: 10px 20px;
}

.login-17 .info h1 {
    color: #fff;
    margin-bottom: 30px;
    font-family: 'Jost', sans-serif;
    font-size: 50px;
}

.login-17 .info p {
    color: #e6e6e6;
    line-height: 28px;
}

.login-17 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-17 .social-list {
    padding: 0;
    text-align: center;
}

.login-17 .social-list li {
    display: inline-block;
}

.login-17 .social-list li a {
    margin: 1px;
    font-size: 14px;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-17 .social-list li a:hover {
    text-decoration: none;
}

.login-17 .facebook-bg {
    background: #4867aa;
}

.login-17 .facebook-bg:hover {
    background: #3d5996;
}

.login-17 .twitter-bg {
    background: #33CCFF;
}

.login-17 .twitter-bg:hover {
    background: #56d7fe;
}

.login-17 .google-bg {
    background: #db4437;
}

.login-17 .google-bg:hover {
    background: #dc4e41;
}

@media (max-width: 992px) {
    .login-17 .form-section {
        border-radius: 0;
        border: none;
    }

    .login-17 .bg-img{
        display: none;
    }
}

@media (max-width: 768px) {
    .login-17 .form-inner {
        margin: 0 15px;
    }
}
/** Login 17 end **/

/** Login 18 start **/
.login-18 {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}

.login-18 .form-section {
    max-width: 600px;
    margin: 0 auto;
    background: url(../img/img-18.jpg) top left repeat;
    background-size: cover;
    padding: 70px;
    border-radius: 100px 0 100px 0;
    z-index: 999;
    position: relative;
}

.login-18 .form-section:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: -999;
    background: rgb(33 9 90 / 53%);
    border-radius: 100px 0 100px 0;
}

.login-18 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-18 .form-section a {
    text-decoration: none;
}

.login-18 .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
    text-transform: uppercase;
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
}

.login-18 .form-section p{
    color: #e2e1e1;
    margin-bottom: 0;
    font-size: 16px;
}

.login-18 .form-section p a{
    color: #e2e1e1;
}

.login-18 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-18 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-18 .logo-2 img{
    margin-bottom: 20px;
    height: 35px;
}

.login-18 .form-section .thembo{
    margin-left: 4px;
}

.login-18 .form-section h3 {
    margin: 0 0 40px;
    font-size: 22px;
    font-weight: 400;
    color: #e2e1e1;
}

.login-18 .form-section .form-group {
    margin-bottom: 30px;
}

.login-18 .form-section .form-control {
    padding: 12px 30px;
    font-size: 16px;
    font-weight: 500;
    outline: none;
    color: #535353;
    border-radius: 50px;
    height: 50px;
    border: 1px solid #fff;
    background: #fff;
}

.login-18 .form-section label{
    color: #e2e1e1;
    font-size: 16px;
}

.login-18 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-18 .form-section .terms{
    margin-left: 3px;
}

.login-18 .form-section .checkbox {
    font-size: 16px;
}

.login-18 .form-section .form-check{
    float: left;
    margin-bottom: 0;
}

.login-18 .form-section .form-check a {
    color: #e2e1e1;
}

.login-18 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 2px;
    position: absolute;
    margin-left: -22px;
    border: none;
    border-radius: 100%;
}

.login-18 .form-check-input:focus {
    box-shadow: none;
}

.login-18 .form-check-input:checked {
    background-color: red;
    border-color: red;
}

.login-18 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #fff;
}

.login-18 .form-section a{
    color: #fff;
}

.login-18 .form-section a.forgot-password {
    font-size: 16px;
    color: #e2e1e1;
    float: right;
}

.login-18 .social-list{
    float: left;
    margin-bottom: 40px;
}

.login-18 .social-list span {
    margin-right: 5px;
    font-weight: 500;
    font-size: 16px;
    color: #e2e1e1;
}

.login-18 .social-list a {
    width: 45px;
    height: 45px;
    line-height: 45px;
    text-align: center;
    display: inline-block;
    font-size: 17px;
    color: rgb(255, 255, 255);
    margin: 0 2px 2px 0;
    border-radius: 50px;
}

.login-18 .btn-theme {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    color: #fff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
    width: 100%;
    float: left;
}

.login-18 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-18 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: #fff;
    content: "";
    border-radius: 7px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-18 .btn-lg{
    padding: 0 50px;
    line-height: 50px;
}

.login-18 .btn{
    box-shadow: none!important;
}

.login-18 .btn-primary {
    background: red;
}

.login-18 .btn-primary:hover{
    color: red;
}

/** Social media **/
.login-18 .facebook-bg{
    background: #4867aa;
}

.login-18 .facebook-bg:hover {
    background: #3b589e;
}

.login-18 .twitter-bg {
    background: #33CCFF;
}

.login-18 .twitter-bg:hover {
    background: #2abdef;
}

.login-18 .google-bg {
    background: #db4437;
}

.login-18 .google-bg:hover {
    background: #dc4e41;
}

.login-18 .linkedin-bg {
    background: #2392e0
}

.login-18 .linkedin-bg:hover {
    background: #1c82ca;
    color: #fff;
}

.login-18 .ocean {
    height: 5%;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    background: #015871;
}

.login-18 .wave {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
    position: absolute;
    top: -198px;
    width: 6400px;
    height: 198px;
    animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) infinite;
    transform: translate3d(0, 0, 0);
}

.login-18 .wave:nth-of-type(2) {
    top: -175px;
    animation: wave 7s cubic-bezier(0.36, 0.45, 0.63, 0.53) -0.125s infinite, swell 7s ease -1.25s infinite;
    opacity: 1;
}

@keyframes wave {
    0% {
        margin-left: 0;
    }
    100% {
        margin-left: -1600px;
    }
}

@keyframes swell {
    0%, 100% {
        transform: translate3d(0, -25px, 0);
    }
    50% {
        transform: translate3d(0, 5px, 0);
    }
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-18 .form-section {
        padding: 50px 30px;
    }
}
/** Login 18 end **/

/** Login 19 start **/
.login-19 {
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
    top: 0;
    text-align: center;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}

.login-19 .cube {
    position: absolute;
    top: 80vh;
    left: 45vw;
    width: 10px;
    height: 10px;
    border: solid 1px #D7D4E4;
    transform-origin: top left;
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    animation: cube 12s ease-in forwards infinite;
}

.login-19 .cube:nth-child(2n) {
    border-color: #FFF ;
}

.login-19 .cube:nth-child(2) {
    animation-delay: 2s;
    left: 25vw;
    top: 40vh;
}

.login-19 .cube:nth-child(3) {
    animation-delay: 4s;
    left: 75vw;
    top: 50vh;
}

.login-19 .cube:nth-child(4) {
    animation-delay: 6s;
    left: 90vw;
    top: 10vh;
}

.login-19 .cube:nth-child(5) {
    animation-delay: 8s;
    left: 10vw;
    top: 85vh;
}

.login-19 .cube:nth-child(6) {
    animation-delay: 10s;
    left: 50vw;
    top: 10vh;
}

/* Animate Background*/
@keyframes Gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
@keyframes cube {
    from {
        transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 1;
    }
    to {
        transform: scale(20) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
    }
}

.login-19 .info{
    padding: 0px 15px;
    max-width: 550px;
    margin-right: auto;
    text-align: left;
}

.login-19 .info p {
    line-height: 25px;
    color: #ddd;
    font-size: 15px;
    margin-bottom: 30px;
}

.login-19 .waviy .color-yellow{
    color: #ffae5b;
}

.login-19 .waviy {
    position: relative;
}

.login-19 .waviy span {
    position: relative;
    display: inline-block;
    font-size: 45px;
    color: #fff;
    text-transform: uppercase;
    animation: flip 2s infinite;
    font-weight: 700;
    margin-bottom: 15px;
    animation-delay: calc(.2s * var(--i))
}

@keyframes flip {
    0%,80% {
        transform: rotateY(360deg)
    }
}

.login-19 .form-section {
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.login-19 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-19 a {
    text-decoration: none;
}

.login-19 .form-inner {
    max-width: 550px;
    width: 100%;
    padding: 60px;
    text-align: center;
    z-index: 999!important;
    background: #fff;
    margin-left: auto;
}

.login-19 .bg-img {
    display: flex;
}

.login-19 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 2px;
    vertical-align: top;
    position: absolute;
    border-radius: 0;
    border: none;
    border: 2px solid #c5c3c3;
    background-color: #fff;
    margin-left: -22px;
}

.login-19 .form-check-input:focus {
    border-color: snow;
    outline: 0;
    box-shadow: none;
}

.login-19 .form-check-input:checked {
    background-color: #ffae5b;
    border: solid #ffae5b;
}

.login-19 .form-section p {
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-19 .form-section p a {
    color: #535353;
}

.login-19 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-19 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-19 .form-section .thembo {
    margin-left: 4px;
}

.login-19 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-19 .form-section .form-group {
    margin-bottom: 25px;
}

.login-19 .form-section .form-group {
    width: 100%;
    position: relative;
}

.login-19 .form-section .form-box {
    width: 100%;
    position: relative;
    float: left;
}

.login-19 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 0;
    font-size: 23px;
    color: #777575;
}

.login-19 .form-section .form-control {
    padding: 14.5px 0;
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #424242;
    font-weight: 500;
    border-radius: 0;
    border: none;
    border-bottom: solid 2px #bdbdbd;
}

.login-19 .form-section .checkbox {
    font-size: 15px;
    margin: 10px 0 35px;
}

.login-19 .form-section .form-check {
    margin-bottom: 0;
}
.login-19 .mb-35{
    margin-bottom: 35px!important;
}

.login-19 .form-section .form-check a {
    color: #535353;
}

.login-19 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
    text-align: left;
}

.login-19 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
}

.login-19 .logo img {
    margin-bottom: 15px;
    height: 25px;
}

.login-19 .btn-theme {
    position: relative;
    display: inline-block;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    width: 100%;
}

.login-19 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 3px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-19 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-19 .btn-lg{
    padding: 0 50px;
    line-height: 50px;
}

.login-19 .btn{
    box-shadow: none!important;
}

.login-19 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-19 .btn-primary {
    background: #ffae5b;
}

.login-19 .btn-primary:after {
    background: #ed9e4d;
}

.login-19 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-19 .social-list{
    margin: 0;
    padding: 0;
}

.login-19 .social-list li {
    display: inline-block!important;
    margin-bottom: 5px;
}

/** Social media **/
.login-19 .social-list li a {
    font-size: 15px;
    font-weight: 400;
    width: 130px;
    margin: 0 5px 5px 0;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    color: #fff;
    font-family: 'Jost', sans-serif;
}

.login-19 .social-list li a i {
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
    border-radius: 3px;
}

.login-19 .facebook-bg {
    background: #4867aa;
}

.login-19 .facebook-i {
    background: #3b589e;
}

.login-19 .twitter-bg {
    background: #33CCFF;
}

.login-19 .twitter-i {
    background: #0cace0;
}

.login-19 .google-bg {
    background: #db4437;
}

.login-19 .google-i {
    background: #c3291c;
}

/** Social media **/
@media (max-width: 992px) {
    .login-19 .bg-img {
        display: none;
    }

    .login-19 {
        padding: 30px 0;
    }

    .login-19 .form-inner{
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .login-19 .form-inner {
        padding: 50px 30px;
    }
}
/** Login 19 end **/

/** Login 20 start **/
.login-20 .bg-img{
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    align-items: center;
    padding: 30px 100px;
}

.login-20 a {
    text-decoration: none;
}

.login-20 .form-check-input:checked {
    display: none;
}

.login-20 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-20 .form-section{
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    padding: 30px 60px;
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
    overflow: hidden;
}

.login-inner-form{
    width: 100%;
}

.login-20 .login-inner-form .forgot{
    line-height: 50px;
    float: right;
    color: #e9e8e8;
    font-size: 16px;
}

.login-20 .login-inner-form p{
    color: #e9e8e8;
    margin-bottom: 0;
    font-size: 16px;
}

.login-20 .login-inner-form p a{
    color: #e9e8e8;
}

.login-20 .login-inner-form .thembo{
    margin-left: 4px;
}

.login-20 .login-inner-form h3 {
    margin: 0 0 50px;
    font-size: 30px;
    font-weight: 400;
    color: #fff;
}

.login-20 .login-inner-form .form-group {
    margin-bottom: 40px;
}

.login-20 .login-inner-form .form-control {
    width: 100%;
    padding: 0 0 10px;
    font-size: 16px;
    font-weight: 400;
    background: transparent;
    border: none;
    border-bottom: 2px solid #e8e7e7;
    outline: none;
    color: #fff;
    border-radius: 0;
}

.login-20 .login-inner-form input::placeholder{
    color: #e9e8e8;
}

.login-20 .login-inner-form .btn-md {
    cursor: pointer;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    height: 50px;
}

.login-20 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-20 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-20 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-20 .login-inner-form .btn-theme {
    background: #fff;
    border: none;
    color: #ff0000;
    border-radius: 5px;
}

.login-20 .login-inner-form .btn-theme:hover {
    background: #fff!important;
    color: #ff0000!important;
}

.login-20 .btn-theme {
    border-radius: 5px;
    padding: 12px 50px 11px 50px;
    color: #ff0000;
    border: solid 2px #ff0000;
    font-size: 17px;
    font-family: 'Jost', sans-serif;
    font-weight: 400;
    float: left;
    margin-right: 5px;
}

.login-20 .btn-theme:hover{
    color: #fff;
    background: #ff0000;
    text-decoration: none;
}

.login-20 .informeson{
    max-width: 750px;
}

.login-20 .informeson .animated-text h2{
    display: block;
    text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);
    background: url(../img/animated-text-2.png) repeat-y;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    -webkit-animation: aitf 80s linear infinite;
    -webkit-transform: translate3d(0, 0, 0);
    -webkit-backface-visibility: hidden;
    font-size: 60px;
    font-weight: 700;
    margin-bottom: 30px;
}

@-webkit-keyframes aitf {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}

.login-20 .informeson p{
    margin-bottom: 40px;
    font-size: 17px;
    color: #535353;
}

.login-20 .social-box ul{
    margin: 0;
    padding: 0;
}

.login-20 .social-box{
    bottom: 30px;
    position: absolute;
    left: 100px;
}

.login-20 .social-list {
    padding: 0;
    text-align: center;
}

.login-20 .social-list li {
    display: inline-block;
}

.login-20 .social-list li a {
    margin: 1px;
    font-size: 14px;
    font-weight: 500;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 0;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-20 .social-list li a:hover {
    text-decoration: none;
}

.login-20 .social-list li a i{
    margin-right: 5px;
}

.login-20 .facebook-bg {
    background: #4867aa;
}

.login-20 .facebook-bg:hover {
    background: #3d5996;
    color: #fff;
}

.login-20 .twitter-bg {
    background: #33CCFF;
}

.login-20 .twitter-bg:hover {
    background: #56d7fe;
}

.login-20 .google-bg {
    background: #db4437;
}

.login-20 .google-bg:hover {
    background: #dc4e41;
}

.login-20 .logo{
    top: 30px;
    position: absolute;
    left: 100px;
}

.login-20 .logo img{
    height: 30px;
}

.login-20 .logo-2 {
    display: none;
    margin-bottom: 15px;
}

.login-20 .logo-2 img{
    height: 30px;
}

/** MEDIA **/
@media (max-width: 1200px) {
    .login-20 .bg-img {
        padding: 30px 30px;
    }

    .login-20 .informeson .animated-text h2 {
        font-size: 45px;
    }

    .login-20 .logo {
        left: 30px;
    }

    .login-20 .social-box {
        left: 30px;
    }
}

@media (max-width: 992px) {
    .login-20 .bg-img{
        display: none;
    }

    .login-20 .login-inner-form h3 {
        font-size: 25px;
        margin: 0 0 40px;
    }

    .login-20 .login-inner-form{
        max-width: 450px;
        margin:  0 auto;
    }

    .login-20 .form-section {
        padding: 30px 15px;
    }

    .login-20{
        background: #fff3f3;
    }

    .login-20 .logo-2 {
        display: inherit;
        margin-bottom: 20px;
    }
}
/** Login 20 end **/

/** Login 21 start **/
.login-21 {
    background: #f1f1f1;
}

.login-21 a {
    text-decoration: none;
}

.login-21 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-21 .form-check-input:checked {
    display: none;
}

.login-21 .form-section {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
    background: #fff;
    z-index: 999;
}

.login-21 .form-section:after {
    position: absolute;
    left: -1px;
    top: 0;
    width: 276px;
    height: 100%;
    content: "";
    z-index: -1;
    background: url(../img/img-50.png) top left repeat;
}

.login-21 .form-inner {
    max-width: 450px;
    width: 100%;
    margin: 0 30px;
    text-align: center;
}

.login-21 .form-text {
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 50px;
    background: #eef1f6;
}

.login-21 .form-section .extra-login span{
    color: #535353;
}

.login-21 .info h1 {
    margin-bottom: 25px;
    font-size: 50px;
    font-weight: 700;
}

.login-21 .animate-charcter {
    background-image: linear-gradient(-225deg, #231557 0%, #44107a 29%, #ff1361 67%, #fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 190px;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}

.login-21 .form-section p {
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
    text-align: center;
}

.login-21 .form-section p a {
    color: #535353;
}

.login-21 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-21 .form-section .thembo {
    margin-left: 4px;
}

.login-21 .form-section h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-21 .form-section .form-group {
    margin-bottom: 25px;
}

.login-21 .form-section .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-21 .form-section .form-control {
    padding: 15.5px 20px;
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    font-weight: 500;
    border: 2px solid #858585c2;
}

.login-21 .form-section img {
    margin-bottom: 5px;
    height: 35px;
}

.login-21 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 23px;
    color: #535353;
}

.login-21 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-21 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
    height: 55px;
}

.login-21 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-21 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-21 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-21 .form-section .btn-theme {
    background: #ff574d;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
    border-radius: 3px;
    font-weight: 400;
}

.login-21 .form-section .btn-theme:hover {
    background: #ef4b22;
}

.login-21 .form-section .terms {
    margin-left: 3px;
}

.login-21 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-21 .form-section .form-check a {
    color: #535353;
    float: right;
}

.login-21 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-21 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 2px solid #858585c2;
    border-radius: 2px;
    background-color: #fff;
}

.login-21 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-21 .form-section .form-check-label a{
    color: #535353;
}

.login-21 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background: #ff574d;
    border-color: #ff574d;
}

.login-21 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 14px;
    font-size: 12px;
    padding-left: 1px;
    content: "\2713";
}

.login-21 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-21 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
    float: right;
}

.login-21 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

.login-21 .info {
    max-width: 470px;
}

.login-21 .info p {
    color: #535353;
    font-size: 15px;
    line-height: 25px;
}

.login-21 .social-list li {
    display: inline-block;
}

.login-21 .social-list li a {
    margin: 2px;
    font-size: 18px;
    width: 55px;
    height: 55px;
    line-height: 55px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
}

.login-21 .social-list li a:hover{
    text-decoration: none;
    color: #fff;
}

.login-21 .facebook-bg {
    border: solid 2px #4867aa;
    color: #4867aa;
}

.login-21 .form-section .facebook-bg:hover{
    background: #4867aa;
}

.login-21 .twitter-bg {
    border: solid 2px #33CCFF;
    color: #33CCFF;
}

.login-21 .form-section .twitter-bg:hover {
    background: #33CCFF;
}

.login-21 .google-bg {
    border: solid 2px #db4437;
    color: #db4437;
}

.login-21 .form-section .google-bg:hover {
    background: #db4437;
}

.login-21 .form-section .linkedin-bg {
    border: solid 2px #0177b5;
    color: #0177b5;
}

.login-21 .form-section .linkedin-bg:hover {
    background: #0177b5;
}


@media (max-width: 992px) {
    .login-21 .form-section {
        border-radius: 0;
        padding: 30px 0;
    }

    .login-21 .form-text {
        display: none;
    }
}

@media (max-width: 768px) {
    .login-21 .form-inner {
        margin: 0 15px;
    }
}
/** Login 21 end **/

/** Login 22 start **/
.login-22 {
    top: 0;
    width: 100%;
    text-align: center;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}

.login-22 a {
    text-decoration: none;
}

.login-22 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-22 .form-section {
    max-width: 550px;
    margin: 0 auto;
}

.login-22 .form-section .details{
    padding: 80px;
    border-radius: 5px;
    margin-bottom: 30px;
    background: #f5f5f5;
    position: relative;
    z-index: 0;
}

.login-22 .form-check-input:checked {
    display: none;
}

.login-22 .form-section p{
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-22 .form-section p a{
    color: #535353;
}

.login-22 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-22 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-22 .logo-2 img{
    margin-bottom: 20px;
    height: 30px;
}

.login-22 .form-section .thembo{
    margin-left: 4px;
}

.login-22 .form-section h3 {
    margin: 0 0 40px;
    font-size: 25px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    color: #040404;
}

.login-22 .form-section .form-group {
    margin-bottom: 40px;
}

.login-22 .form-section .form-box {
    float: left;
    width: 100%;
    position: relative;
    text-align: left;
}

.login-22 .form-section .form-control {
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #535353;
    border-radius: 0;
    padding-left: 0;
    padding-right: 0;
    border: none;
    border-bottom: solid 2px #bdbdbd;
}

.login-22 .form-section .btn-md {
    cursor: pointer;
    padding: 12px 50px 11px 50px;
    font-size: 15px;
    font-weight: 400;
    height: 55px;
    font-family: 'Jost', sans-serif;
    border-radius: 100px;
}

.login-22 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-22 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-22 .form-section .terms{
    margin-left: 3px;
}

.login-22 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-22 .form-section .checkbox a {
    float: right;
}

.login-22 .form-section .checkbox {
    margin-bottom: 30px;
    font-size: 15px;
}

.login-22 .form-section .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-22 .form-section .form-check a {
    color: #535353;
    float: right;
}

.login-22 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-22 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border-radius: 0px;
    background: #f5f5f5;
    border: solid 2px #bdbdbd;
}

.login-22 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-22 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 14px;
    font-size: 12px;
    content: "\2713";
    padding-left: 3px;
}

.login-22 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #8686ff;
    border: solid 2px #8686ff;
}

.login-22 .form-section .btn-theme {
    background: #8686ff;
    border: none;
    color: #fff;
}

.login-22 .form-section .btn-theme:hover {
    background: #7878f3;
}

.login-22 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
}

.login-22 .social-list{
    float: left;
}

.login-22 .social-list span {
    margin-right: 5px;
    font-weight: 500;
    font-size: 15px;
    color: #535353;
}

.login-22 .social-list a {
    width: 55px;
    height: 55px;
    line-height: 55px;
    text-align: center;
    display: inline-block;
    font-size: 15px;
    color: rgb(255, 255, 255);
    margin: 0 2px 2px 0;
    border-radius: 50px;
}

.login-22-bodycolor .ripple-background{
    z-index: -999!important;
}

.login-22-bodycolor .ripple-background .circle{
    position: absolute;
    border-radius: 50%;
    animation: ripple 15s infinite;
}

.login-22-bodycolor .ripple-background .small{
    width: 200px;
    height: 200px;
    left: -100px;
    top: -100px;
    z-index: -999;
}

.login-22-bodycolor .ripple-background .medium{
    width: 400px;
    height: 400px;
    left: -200px;
    bottom: -200px;
    z-index: -999;
}

.login-22-bodycolor .ripple-background .large{
    width: 600px;
    height: 600px;
    left: -300px;
    top: -300px;
    z-index: -999;
}

.login-22-bodycolor .ripple-background .xlarge{
    width: 800px;
    height: 800px;
    left: -400px;
    top: -400px;
    z-index: -999;
}

.login-22-bodycolor .ripple-background .xxlarge{
    width: 1000px;
    height: 1000px;
    left: -500px;
    top: -500px;
    z-index: -999;
}

.login-22-bodycolor .ripple-background .shade1{
    background: #0000ff26;
}

.login-22-bodycolor .ripple-background .shade2{
    background: #b9b9ff;
}

.login-22-bodycolor .ripple-background .shade3{
    background: #0000ff26;
}

.login-22-bodycolor .ripple-background .shade4{
    background: #0a58ca;
}

.login-22-bodycolor .ripple-background .shade5{
    background: #0000ff26;
}

@keyframes ripple{
    0%{
        transform: scale(0.8);
    }

    50%{
        transform: scale(1.2);
    }

    100%{
        transform: scale(0.8);
    }
}

/** Social media **/
.login-22 .facebook-bg{
    background: #4867aa;
}

.login-22 .facebook-bg:hover {
    background: #3b589e;
}

.login-22 .twitter-bg {
    background: #33CCFF;
}

.login-22 .twitter-bg:hover {
    background: #2abdef;
}

.login-22 .google-bg {
    background: #db4437;
}

.login-22 .google-bg:hover {
    background: #cc4437;
}

.login-22 .linkedin-bg {
    background: #2392e0;
}

.login-22 .linkedin-bg:hover {
    background: #1c82ca;
    color: #fff;
}

@media (max-width: 768px) {
    .login-22 .form-section .details{
        padding: 50px 30px;
    }

    .login-22-bodycolor .ripple-background{
        display: none;
    }
}
/** Login 22 end **/

/** Login 23 start **/
.login-23{
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: #fff5f5;
}

.login-23 .container {
    max-width: 1200px;
    margin: 0 auto;
}

.login-23 a {
    text-decoration: none;
}

.login-23 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-23 .form-info {
    justify-content: center;
    align-items: center;
    padding: 100px 80px;
    background: #fff;
}

.login-23 .info{
    text-align: left;
}

.login-23 .name_wrap h3 {
    position: relative;
    font-size: 40px;
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    display: inline-block;
    overflow: hidden;
}

.login-23 .info p{
    color: #f1f0f0;
}

.login-23 .name_wrap h3 span {
    color: transparent;
    -webkit-text-stroke: 1px #fff;
    padding-left: 2px;
}

.login-23 .form-check-input:checked {
    display: none;
}

.login-23 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-23 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-23 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    font-weight: 500;
    border: 1px solid transparent;
    background: #f5f5f5;
    padding: 12px 45px 12px 20px;
    height: 55px;
}

.login-23 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-23 .login-inner-form .form-box i {
    position: absolute;
    top: 13px;
    right: 20px;
    font-size: 19px;
    color: #535353;
}

.login-23 .login-inner-form label{
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
}

.login-23 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
    color: #535353;
    font-size: 15px;
    float: right;
}

.login-23 .bg-img {
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    position: relative;
    display: flex;
    border-radius: 100% 0 0 100%;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
    padding: 50px 80px;
}

.login-23 .login-box{
    background: #fff;
    margin: 0 auto;
}

.login-23 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-23 .login-inner-form .btn-md {
    cursor: pointer;
    color: #fff;
    padding: 0 50px;
    height: 55px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-23 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-23 .login-inner-form p{
    margin: 0;
    color: #535353;
}

.login-23 .login-inner-form p a{
    color: #535353;
}

.login-23 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-23 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-23 .login-inner-form .btn-theme {
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
    border: none;
    color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-23 .login-inner-form .btn-theme:hover {
    background-image: linear-gradient(to bottom, #ff8100, #ff0000);
}

.login-23 .logo-2{
    margin-bottom: 15px;
}

.login-23 .logo-2 img{
    height: 30px;
}

.login-23 .nav-pills li{
    display: inline-block;
}

.login-23 .login-inner-form .checkbox {
    margin-bottom: 25px;
    font-size: 14px;
}

.login-23 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-23 .login-inner-form .form-check a {
    color: #d6d6d6;
    float: right;
}

.login-23 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-23 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: none;
    border-radius: 3px;
    background: #f5f5f5;
}

.login-23 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-23 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background-image: linear-gradient(to bottom, #ff0000, #ff8100);
}

.login-23 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 18px;
    font-size: 12px;
    content: "\2713";
    padding-left: 5px;
    background:#ff0000;
}

.login-23 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-23 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
    margin-left: 3px;
}

.login-23 .form-section{
    text-align: center;
}

.login-23 .form-section h3{
    margin: 0 0 40px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-23 .form-section .text {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 0;
    color: #535353;
}

.login-23 .form-section .text a{
    color: #535353;
}

.login-23 .social-list{
    bottom: 20px;
    position: absolute;
    right: 0;
    padding: 0;
    margin: 0;
    list-style: none;
}

.login-23 .social-list a {
    width: 60px;
    height: 50px;
    line-height: 50px;
    margin-bottom: 5px;
    text-align: center;
    display: inline-block;
    font-size: 15px;
    color: #fff;
    border-radius: 50px 0 0 50px;
    background: rgb(102 102 102 / 31%);
}

.login-23 .facebook-bg:hover {
    background: #3b589e;
}

.login-23 .twitter-bg:hover {
    background: #33CCFF;
}

.login-23 .google-bg:hover {
    background: #db4437;
}

.login-23 .linkedin-bg:hover {
    background: #1c82ca;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-23 .bg-img{
        display: none;
    }

    .login-23 .form-info {
        padding: 50px 30px;
    }

    .login-23 .login-box{
        max-width: 600px;
        margin: 0 auto;
    }
}

/** Login 23 end **/

/** Login 24 start **/
.login-24-inner {
    padding: 0;
    z-index: 999;
    position: relative;
    min-height: 100vh;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-24 a {
    text-decoration: none;
}

.login-24-inner:before {
    content: "";
    width: 35%;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
    clip-path: polygon(0 0, 100% 0, 100% 100%);
    background-image: linear-gradient(to bottom, #5876e5, #170e5d);
}

.login-24 .form-check-input:checked {
    display: none;
}

.login-24 .container{
    max-width: 1120px;
}

.login-24 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-24 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-24 .bg-img {
    background: url(../img/img-24.jpg);
    background-size: cover;
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 50px;
}

.login-24 .login-box {
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
}

.login-24 .form-section {
    padding: 60px;
    border-radius: 10px 0 0 10px;
    text-align: left;
}

.login-24 .pad-0 {
    padding: 0;
}

.login-24 label {
    color: #424242;
    font-size: 16px;
    margin-bottom: 5px;
}

.login-24 .form-section p {
    color: #424242;
    font-size: 16px;
    margin-bottom: 40px;
}

.login-24 .form-section p a{
    color: #424242;
}

.login-24 .form-section p a {
    color: #424242;
}

.login-24 .form-info{
    padding: 0;
}

.login-24 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-24 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-24 .form-section .thembo {
    margin-left: 4px;
}

.login-24 .form-section h1 {
    font-size: 27px;
    font-weight: 600;
    color: #5876e5;
}

.login-24 .form-section h3 {
    margin: 0 0 40px;
    font-size: 23px;
    font-weight: 400;
    color: #121212;
}

.login-24 .form-section .form-group {
    margin-bottom: 25px;
}

.login-24.form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-24 .form-section .form-control {
    padding: 10px 20px;
    font-size: 16px;
    outline: none;
    height: 55px;
    color: #424242;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #efefef;
}

.login-24 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-24 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-24 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-24 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-24 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-24 .form-section .btn-theme {
    background: #5876e5;
    border: none;
    color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-24 .form-section .btn-theme:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    background: #4a69dc;
}

.login-24 .form-section .terms {
    margin-left: 3px;
}

.login-24 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-24 .form-section .form-check a {
    color: #424242;
    float: right;
}

.login-24 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-24 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid  #efefef;
    border-radius: 3px;
    background-color: #efefef;
}

.login-24 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #424242;
}

.login-24 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #5876e5;
    border-color: #5876e5;
}

.login-24 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 14px;
    content: "\2713";
    padding-left: 3px;
}

.login-24 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-24 .form-section a.forgot-password {
    font-size: 16px;
    color: #424242;
    float: right;
}

.login-24 .social-list a {
    text-align: center;
    display: inline-block;
    font-size: 18px;
    margin-right: 20px;
    color: #424242;
}

.login-24 .social-list a:hover {
    color: #5876e5;
}

@media (max-width: 992px) {
    .login-24 .form-section {
        padding: 60px 60px 60px;
    }

    .login-24-inner:before {
        background: none;
    }

    .login-24 .login-box {
        max-width: 500px;
        margin: 0 auto;
    }

    .login-24 .bg-img{
        display: none;
    }
}

@media (max-width: 768px) {
    .login-24 .form-section {
        padding: 40px 30px;
    }
}
/** Login 24 end **/

/** Login 25 start **/
.login-25{
    top: 0;
    width: 100%;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background-image: linear-gradient(to bottom, #61daff, #656bff);
}

.login-25 a {
    text-decoration: none;
}

.login-25 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-25 .container {
    max-width: 1120px;
    margin: 0 auto;
}

.login-25 .col-pad-0{
    padding: 0;
}

.login-25 .login-inner-form .details p{
    color: #535353;
    font-size: 16px;
}

.login-25 .login-inner-form .details p a{
    margin-left: 3px;
    color: #535353;
}

.login-25 .form-check-input:checked {
    display: none;
}

.login-25 .login-inner-form .details p{
    margin-bottom: 0;
}

.login-25 .login-inner-form .form-box {
    position: relative;
}

.login-25 .login-inner-form .details {
    padding:80px 0 80px 80px;
}

.login-25 .bg-img {
    border-radius: 20px;
    padding: 50px;
    margin: 80px 0;
    right: -80px;
    position: relative;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    background-image: linear-gradient(to bottom, #61daff, #656bff);
}

.login-25 .inner{
    z-index: 999;
}

.login-25 .login-box-9 {
    margin: 0 80px 0 0;
    border-radius: 20px;
    opacity: 1;
    text-align: center;
    justify-content: center;
    align-items: center;
    position: relative;
    display: flex;
    z-index: 0;
    background: #fff;
}

.login-25 .none-2{
    display: none;
}

.login-25 .login-inner-form h3 {
    margin: 0 0 30px;
    font-size: 20px;
    font-weight: 500;
    color: #040404;
    text-transform: uppercase;
}

.login-25 p{
    margin-bottom: 30px;
    color: #fff;
    font-size: 15px;
}

.login-25 .login-inner-form .form-group {
    margin-bottom: 20px;
}

.login-25 .logo-2 img{
    height: 30px;
    margin-bottom: 15px;
}

.login-25 .login-inner-form .form-control {
    outline: none;
    width: 100%;
    padding: 10px 20px;
    height: 55px;
    font-size: 15px;
    outline: 0;
    font-weight: 500;
    color: #535353;
    border-radius: 3px;
    border: solid 1px #ebebeb;
    background: #ebebeb;
}

.login-25 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    text-transform: uppercase;
}

.login-25 .bg-img .btn-sm{
    padding: 6px 20px 6px 20px;
    font-size: 13px;
}

.login-25 .bg-img h3{
    color: #fff;
    margin-bottom: 20px;
    font-size: 40px;
}

.login-25 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-25 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-25 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-25 .login-inner-form .btn-theme {
    background-image: linear-gradient(to bottom, #61daff, #656bff);
    border: none;
    color: #fff;
}

.login-25 .login-inner-form .btn-theme:hover {
    background-image: linear-gradient(to bottom, #56cdf1, #5c61ef);
}

.login-25 .login-inner-form .terms{
    margin-left: 3px;
}

.login-25 .login-inner-form .checkbox {
    margin-bottom: 20px;
    font-size: 14px;
}

.login-25 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-25 .login-inner-form .form-check a {
    color: #535353;
    float: right;
}

.login-25 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-25 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #ebebeb;
    border-radius: 3px;
    background-color: #ebebeb;
}

.login-25 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-25 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #63a8ff;
    border-color: #63a8ff;
}

.login-25 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 12px;
    content: "\2713";
    padding-left: 1px;
}

.login-25 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-25 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
}

.login-25 .social-list{
    margin: 0;
    padding: 0;
}

.login-25 .social-list li {
    display: inline-block;
}

.login-25 .social-list li a {
    margin: 1px;
    font-size: 14px;
    font-weight: 500;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-25 .social-list li a:hover {
    text-decoration: none;
}

.login-25 .facebook-bg {
    background: #4867aa;
}

.login-25 .facebook-bg:hover {
    background: #3d5996;
    color: #fff;
}

.login-25 .twitter-bg {
    background: #33CCFF;
}

.login-25 .twitter-bg:hover {
    background: #56d7fe;
}

.login-25 .google-bg {
    background: #db4437;
}

.login-25 .google-bg:hover {
    background: #dc4e41;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-25 .bg-img {
        display: none;
    }

    .login-25 .login-box-9 {
        margin: 0 auto;
        max-width: 600px;
    }

    .login-25 .login-inner-form .details {
        padding: 60px;
    }

    .login-25 .login-inner-form h3 {
        font-size: 23px;
    }
}

@media (max-width: 768px) {
    .login-25 .login-inner-form .details {
        padding: 50px 30px;
    }
}
/** Login 25 end **/

/** Login 26 start **/
.login-26 .login-26-inner {
    z-index: 999;
    position: relative;
    min-height: 100vh;
    text-align: center;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    overflow: hidden;
    padding: 30px 0;
}

.login-26 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-26 .login-box {
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    position: relative;
    max-width: 1140px;
}

.login-26 .form-section {
    text-align: center;
    padding: 70px 90px;
    background: #fff;
}

.login-26 .form-section p{
    color: #535353;
    font-size: 16px;
}

.login-26 .form-section a {
    text-decoration: none;
    color: #535353;
}

.login-26 .pad-0{
    padding: 0;
}

.login-26 .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
}

.login-26 h3{
    color: #fff;
    margin-bottom: 20px;
    font-size: 30px;
}

.login-26 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-26 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-26 .logo-2 img{
    margin-bottom: 20px;
    height: 30px;
}

.login-26 .form-section .thembo{
    margin-left: 4px;
}

.login-26 .form-section h3 {
    text-align: center;
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-26 .form-section .form-group {
    margin-bottom: 25px;
}

.login-26 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-26 .form-section .form-control {
    padding: 10px 25px;
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 50px;
    border: 1px solid #f3f3f3;
    background: #f3f3f3;
    height: 50px;
}

.login-26 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-26 .form-section .terms{
    margin-left: 3px;
}

.login-26 .btn-section {
    margin-bottom: 25px;
    display: inline-block;
}

.login-26 .btn-section .btn-1 {
    border-radius: 50px 0 0 50px;
    border-right: solid 1px #e6e6e6;
}

.login-26 .btn-section .link-btn {
    font-size: 16px;
    float: left;
    background: #f3f3f3;
    font-weight: 400;
    text-align: center;
    text-decoration: blink;
    line-height: 37px;
    width: 110px;
    color: #505050;
    font-family: 'Jost', sans-serif;
}

.login-26 .btn-section .link-btn:hover{
    color: #4b6dff;
}

.login-26 .btn-section .active-bg {
    color: #4b6dff;
}

.login-26 .btn-section .btn-2 {
    border-radius: 0 50px 50px 0;
}

.login-26 .form-section .form-check{
    float: left;
    margin-bottom: 0;
}

.login-26 .form-section .form-check a {
    color: #535353;
}

.login-26 .form-section .form-check-label {
    padding-left: 5px;
    font-size: 16px;
    color: #535353;
}

.login-26 .form-section a.forgot-password {
    line-height: 50px;
}

.login-26 .form-check-input:focus {
    border-color: transparent;
    box-shadow: none;
}

.login-26 .form-check-input:checked {
    background-color: #4b6dff!important;
}

.login-26 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0;
    border: 1px solid #f5f5f5;
    background-color: #f5f5f5;
    position: absolute;
    margin-left: -22px;
}

.login-26 .logo{
    display: none;
}

.login-26 .logo img{
    height: 30px;
    margin-bottom: 15px;
}

.login-26 .btn-theme {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
    float: left;
    background: #4b6dff;
}

.login-26 .text-bottom{
    bottom: 0;
    padding: 30px;
    position: absolute;
    text-align: left;
}

.login-26 .bg-img{
    position: relative;
    background: url(../img/img-26.jpg) top left repeat;
    background-size: cover;
}

.login-26 .bg-img:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(0,#1717cbcf,rgb(167 164 164 / 0%));
}

.login-26 .logo-2 img{
    top: 30px;
    left: 30px;
    position: absolute;
    text-align: left;
}

.login-26 .info p {
    color: #ebeaea;
    margin-bottom: 20px;
    font-size: 15px;
}

.login-26 .btn-theme:hover {
    color: #fff;
}

.login-26 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-26 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 7px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-26 .btn-info:after {
    background: #4263ef;
}

.login-26 .btn-lg{
    font-size: 17px;
    padding: 0 50px;
    line-height: 50px;
}

.login-26 .btn{
    box-shadow: none!important;
}

.login-26 .btn-md{
    padding: 0 50px;
    font-size: 15px;
    line-height: 45px;
}

.login-26.login-background {
    animation: Gradient 15s ease infinite;
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
}

.login-26.login-background .cube {
    position: absolute;
    top: 80vh;
    right: 20%;
    width: 10px;
    height: 10px;
    border: solid 1px red;
    transform-origin: top left;
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    animation: cube 6s ease-in forwards infinite;
    border-radius: 100%;
}

.login-26.login-background .cube:nth-child(2n) {
    border-color: #00cad4;
}

.login-26.login-background .cube:nth-child(2) {
    animation-delay: 2s;
    right: 40%;
    border-color: yellow;
    top: 200px;
}

.login-26.login-background .cube:nth-child(3) {
    animation-delay: 3s;
    right: 50%;
    top: 150px;
    border-color: blue;
}

.login-26.login-background .cube:nth-child(4) {
    animation-delay: 4s;
    right: 70%;
    top: 150px;
}

.login-26.login-background .cube:nth-child(5) {
    animation-delay: 5s;
    right: 80%;
    bottom: 150px;
    border-color: black;
}

.login-26.login-background .cube:nth-child(6) {
    animation-delay: 6s;
    right: 10%;
    top: 50%;
    border-color: aquamarine;
}

/* Animate Background*/
@keyframes Gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
@keyframes cube {
    from {
        transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 1;
    }
    to {
        transform: scale(20) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
    }
}

.login-26 .social-list a {
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    display: inline-block;
    font-size: 19px;
    margin: 2px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
    -webkit-transition: all 0.8s;
    transition: all 0.8s;
}

.login-26 .social-list a:hover{
    color: #fff;
}

/** Social media **/
.login-26 .facebook-bg{
    color: #4867aa;
}

.login-26 .facebook-bg:hover {
    background: #4867aa;
}

.login-26 .twitter-bg {
    color: #33CCFF;
}

.login-26 .twitter-bg:hover {
    background: #33CCFF;
}

.login-26 .google-bg {
    color: #db4437;
}

.login-26 .google-bg:hover {
    background: #db4437;
}

.login-26 .linkedin-bg {
    color: #2392e0;
}

.login-26 .linkedin-bg:hover {
    background: #1c82ca;
}

@media (max-width: 1200px) {
    .login-26 .form-section {
        padding: 70px 50px;
    }
}

@media (max-width: 992px) {
    .login-26 .form-section h3 {
        font-size: 23px;
    }

    .login-26 .logo-2 img {
        height: 25px;
    }

    .login-26 .form-info{
        width: 100%;
    }

    .login-26 .form-section {
        padding: 60px;
    }

    .login-26 .bg-img{
        display: none!important;
    }

    .login-26 .login-box {
        max-width: 500px;
    }

    .login-26 .logo{
        display:inherit;
    }

    .login-26 .login-26-inner:before {
        display: none;
    }

    .login-26.login-background .cube:nth-child(2) {
        right: 100px;
        top: 100px;
    }

    .login-26.login-background .cube:nth-child(3) {
        left: 50px;
        top: 50px;
    }

    .login-26.login-background .cube:nth-child(4) {
        left: 100px;
        top: 350px;
    }

    .login-26.login-background .cube:nth-child(5) {
        left: 100px;
        bottom: 50px;
    }

    .login-26.login-background .cube:nth-child(6) {
        right: 50px;
        top: 5%;
    }
}

@media (max-width: 768px) {
    .login-26 .form-section{
        padding: 50px 30px;
    }
}
/** Login 26 end **/

/** Login 27 start **/
.login-27 {
    top: 0;
    width: 100%;
    text-align: center;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background-image: linear-gradient(to bottom, #000000, #000000);
}

.login-27 .form-section {
    max-width: 600px;
    margin: 0 auto;
    padding: 80px;
    border-radius: 50px;
    z-index: 999;
    position: relative;
    background-image: linear-gradient(to bottom, #d9a513, #f93b3b);
}

.login-27 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-27 .extra-login {
    float: left;
    width: 100%;
    margin-bottom: 25px;
    text-align: center;
    position: relative;
}

.login-27 .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e7e7e79e;
    content: "";
}

.login-27 .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #ff5a00;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #fff;
    text-transform: capitalize;
}

.login-27 .form-section a {
    text-decoration: none;
}

.login-27 #particles-js {
    background-size: cover;
    background-position: 50% 50%;
    position: fixed;
    min-height: 100vh;
    width: 100%;
    z-index: -999;
}

.login-27 .form-section p{
    color: #fff;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-27 .form-section p a{
    color: #fff;
}

.login-27 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 35px;
}

.login-27 .logo-2 img{
    margin-bottom: 20px;
    height: 30px;
}

.login-27 .form-section .social-list li {
    display: inline-block!important;
    margin-bottom: 5px;
}

.login-27 .form-section .social-list li a {
    font-size: 14px;
    font-weight: 500;
    width: 130px;
    margin-bottom: 5px;
    height: 40px;
    line-height: 40px;
    border-radius: 0;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    font-family: 'Jost', sans-serif;
}

.login-27 .form-section .social-list li a i{
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
}

.login-27 .form-section .social-list li a span{
    margin-right: 7px;
}

.login-27 .form-section .thembo{
    margin-left: 4px;
}

.login-27 h1{
    margin: 0 0 40px;
    font-size: 24px;
    font-weight: 400;
    color: #fff;
}

.login-27 .form-section .form-group {
    margin-bottom: 25px;
}

.login-27 .form-section .form-control {
    font-size: 16px;
    outline: none;
    background: #fff;
    color: #535353;
    border-radius: 3px;
    border: 1px solid #fff;
    box-shadow: 0 0 5px rgb(0 0 0 / 20%);
    float: left;
    width: 100%;
    padding: 12px 20px 12px 20px;
    height: 55px;
}

.login-27 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-27 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-27 .form-section .terms{
    margin-left: 3px;
}

.login-27 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0px;
    position: absolute;
    border: 1px solid #fff;
    border-radius: 2px;
    background-color: #fff;
    margin-left: -22px;
    box-shadow: 0 0 5px rgb(0 0 0 / 20%);
}

.login-27 .form-section .form-check{
    float: left;
    margin-bottom: 0;
}

.login-27 .form-section .form-check a {
    color: #fff;
}

.login-27 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #fff;
}

.login-27 .form-check-input:checked {
    background-color: #132b83;
    border-color: #132b83;
}

.login-27 .form-section a.forgot-password {
    font-size: 16px;
    color: #fff;
}

.login-27 .btn-theme {
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
    width: 100%;
}

.login-27 .btn-theme:before {
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

.login-27 .btn-theme:after {
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

.login-27 .btn-theme:hover {
    background: transparent;
}

.login-27 .btn-theme:hover:before {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-27 .btn-theme:hover:after {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-27 .btn-lg{
    padding: 0 50px;
    line-height: 51px;
}

.login-27 .btn{
    box-shadow: none!important;
}

.login-27 .btn-md{
    padding: 0 45px;
    line-height: 41px;
}

.login-27 .btn-primary {
    background: #132b83;
}

.login-27 .btn-primary:before {
    background: #132b83;
}

.login-27 .btn-primary:after {
    background: #132b83;
}

.login-27 .btn-primary:hover {
    color: #132b83;
    border: 2px solid #132b83;
}

/** Social media **/
.login-27 .facebook-i {
    background: #4867aa;
}

.login-27 .twitter-i {
    background: #33CCFF;
}

.login-27 .google-i {
    background: #db4437;
}

.login-27 .facebook-color{
    color: #4867aa;
}

.login-27 .twitter-color {
    color: #33CCFF;
}

.login-27 .google-color {
    color: #db4437;
}

@media (max-width: 768px) {
    .login-27 .form-section {
        padding: 50px 30px;
    }
}

@media (max-width: 500px) {
    .login-27 .form-section .social-list li a i {
        display: none;
    }

    .login-27 .form-section .social-list li a {
        width: 100px;
    }
}
/** Login 27 end **/

/** Login 28 start **/
.login-28 {
    position: relative;
    height: 100vh;
    width: 100%;
    overflow: hidden;
    top: 0;
    text-align: center;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}

.login-28 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-28 .form-section {
    max-width: 500px;
    margin: 0 auto;
}

.login-28 .form-section .details{
    padding: 60px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.login-28 .form-section p{
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-28 .form-section p a{
    color: #535353;
}

.login-28 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-28 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-28 .logo img{
    margin-bottom: 30px;
    height: 30px;
}

.login-28 .form-section .thembo{
    margin-left: 4px;
}

.login-28 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
    color: #040404;
}

.login-28 .form-section .form-group {
    margin-bottom: 30px;
}

.login-28 .form-section .form-control {
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #535353;
    font-weight: 500;
    border-radius: 0;
    padding: 12px 0;
    border: none;
    border-bottom: solid 2px #bdbdbd;
}

.login-28 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-28 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-28 .form-section .terms{
    margin-left: 3px;
}

.login-28 .nav-pills li{
    display: inline-block;
}

.login-28 .form-section .form-check{
    margin-bottom: 0;
    text-align: left;
    padding-left: 20px;
}

.login-28 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-28 .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0px;
    vertical-align: top;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    position: absolute;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
    border: 2px solid #afabab;
}

.form-check-input:focus {
    outline: 0;
    box-shadow: none;
}

.login-28 .form-check-input:checked {
    background-color: #fbae23;
    border-color: #fbae23!important;
}

.login-28 .form-section a {
    text-decoration: none;
}

.login-28 .btn-theme {
    position: relative;
    display: inline-block;
    width: 100%;
    color: #ffffff;
    border: none;
    overflow: hidden;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-28 .btn-theme:hover {
    color: #fff;
}

.login-28 .btn-theme:hover::before {
    left: 0%;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
}

.login-28 .btn-theme:before {
    position: absolute;
    content: '';
    left: 96%;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
    transform: skewX(-25deg);
}

.login-28 .btn-theme span {
    position: relative;
    z-index: 1;
}

.login-28 .btn-lg{
    padding: 0 50px;
    line-height: 50px;
}

.login-28 .btn{
    box-shadow: none!important;
}

.login-28 .btn-md{
    padding: 0 45px;
    line-height: 50px;
}

.login-28 .btn-primary {
    background: #fbae23;
}

.login-28 .btn-primary:before {
    background: #e7a01f;
}

.login-28 .form-section a.forgot-password {
    font-size: 16px;
    color: #535353;
}

.login-28 .social-list{
    float: left;
}

.login-28 .social-list span {
    margin-right: 5px;
    font-size: 15px;
    color: #535353;
}

.login-28 .social-list a {
    width: 45px;
    height: 45px;
    line-height: 45px;
    text-align: center;
    display: inline-block;
    font-size: 15px;
    color: rgb(255, 255, 255);
    margin: 0 2px 2px 0;
    border-radius: 5%;
}

/** Social media **/
.login-28 .facebook-bg{
    background: #4867aa;
}

.login-28 .facebook-bg:hover {
    background: #3b589e;
}

.login-28 .twitter-bg {
    background: #33CCFF;
}

.login-28 .twitter-bg:hover {
    background: #2abdef;
}

.login-28 .google-bg {
    background: #db4437;
}

.login-28 .google-bg:hover {
    background: #cc4437;
}

.login-28 .linkedin-bg {
    background: #2392e0;
}

.login-28 .linkedin-bg:hover {
    background: #1c82ca;
    color: #fff;
}

@media (max-width: 768px) {
    .login-28 .form-section .details{
        padding: 60px 30px;
    }
}
/** Login 28 end **/

/** Login 29 start **/
.login-29 {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 0;
    background: url(../img/img-29.png) top left repeat;
    z-index: 999;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.login-29 a {
    text-decoration: none;
}

.login-29 .form-section {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 0!important;
}

.login-29 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-29 .form-inner {
    max-width: 450px;
    width: 100%;
    margin-right: auto;
    text-align: center;
}

.login-29 .form-check-input:checked {
    display: none;
}

.login-29 .form-section .extra-login {
    float: left;
    width: 100%;
    margin: 25px 0 25px;
    text-align: center;
    position: relative;
}

.login-29 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e3e3e370;
    content: "";
}

.login-29 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #fff;
    text-transform: capitalize;
    background: #fd2458;
}

.login-29 .form-section p {
    color: #dadada;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-29 .form-section p {
    color: #fff;
    margin-bottom: 0;
    font-size: 16px;
    font-weight: 500;
}

.login-29 .form-section p a {
    font-weight: 500;
    color: #fff;
}

.login-29 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-29 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-29 .form-section .thembo {
    margin-left: 4px;
}

.login-29 .form-section h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #fff;
}

.login-29 .form-section .form-group {
    margin-bottom: 25px;
}

.login-29 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-29 .form-section .form-control {
    padding: 10px 20px;
    font-size: 15px;
    outline: none;
    height: 55px;
    background: rgba(23, 23, 23, 0.72);
    color: #616161;
    border-radius: 50px;
    font-weight: 500;
    border: 1px solid transparent;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-29 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-29 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
}

.login-29 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-29 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-29 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-29 .form-section .btn-theme {
    background: #2c3ca9;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
    border-radius: 50px;
    font-weight: 400;
}

.login-29 .form-section .btn-theme:hover {
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.2);
    background: #223196;
}

.login-29 .none-2 {
    display: none;
}

.login-29 .form-section .terms {
    margin-left: 3px;
}

.login-29 .form-section .checkbox {
    font-size: 14px;
}

.login-29 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 2px;
}

.login-29 .form-section .form-check a {
    color: #fff;
    float: right;
}

.login-29 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-29 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #fff;
    border-radius: 50px;
    background-color: #fff;
}

.login-29 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 15px;
    font-weight: 500;
    color: #fff;
}

.login-29 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background: #2c3ca9;
    border-color: #2c3ca9;
}

.login-29 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 12px;
    content: "\2713";
    padding-left: 3px;
}

.login-29 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-29 .form-section a.forgot-password {
    font-size: 16px;
    color: #fff;
    float: right;
    line-height: 55px;
}

.login-29 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

.login-29 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-29 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-29 .form-section .social-list li a {
    font-size: 14px;
    font-weight: 400;
    width: 130px;
    margin: 2px 0 3px 0;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-29 .form-section .social-list li a i {
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
    font-size: 14px;
    border-radius: 20px;
}

.login-29 .form-section .social-list li a span {
    margin-right: 7px;
}

/** Social media **/
.login-29 .facebook-color {
    color: #4867aa;
}

.login-29 .twitter-color {
    color: #33CCFF;
}

.login-29 .google-color {
    color: #db4437;
}

.login-29 .twitter-i {
    background: #33CCFF;
}

.login-29 .facebook-i {
    background: #4867aa;
}

.login-29 .google-i {
    background: #db4437;
}

@media (max-width: 992px) {
    .login-29 .clip-home {
        clip-path: polygon(0 0, 100% 0, 100% 0%, 100% 100%, 0 100%);
        position: relative;
    }

    .login-29 .form-section {
        width: 100%;
    }

    .none-992 {
        display: none !important;
    }
}

@media (max-width: 768px) {
    .login-29 .form-inner {
        margin: 0 15px;
    }

    .login-29 {
        background: #fd2458;
    }
}
/** Login 29 end **/

/** Login 30 start **/
.login-30 {
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    overflow: hidden;
    background: #fff;
}

.login-30 .container{
    max-width: 1460px;
    margin: 0 auto;
}

.login-30 .form-section {
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
}

.login-30 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-30 a {
    text-decoration: none;
}

.login-30 .form-inner {
    max-width: 550px;
    width: 100%;
    padding: 70px;
    text-align: center;
    z-index: 999;
    box-shadow: 0 0 35px rgb(0 0 0 / 10%);
    margin: 0 auto 0 0;
    background: url(../img/img-30.jpg) top left repeat;
    background-size: cover;
    border-radius: 30px;
    position: relative;
}

.login-30 .form-section .extra-login {
    position: relative;
}

.login-30 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 14px;
    color: #fff;
}

.login-30 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0px;
    vertical-align: top;
    position: absolute;
    border-radius: 2px;
    border: none;
    background-color: #f7f7f7;
    margin-left: -22px;
}

.login-30 .form-check-input:focus {
    border-color: snow;
    outline: 0;
    box-shadow: none;
}

.login-30 .form-check-input:checked {
    background-color: #ffc107;
}

.login-30 .form-section p {
    color: #fff;
    margin-bottom: 0;
    font-size: 16px;
}

.login-30 .form-section p a {
    color: #fff;
}

.login-30 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-30 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-30 .form-section .thembo {
    margin-left: 4px;
}

.login-30 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    font-weight: 400;
    color: #fff;
}

.login-30 .form-section .form-group {
    width: 100%;
    position: relative;
    margin-bottom: 25px;
}

.login-30 .form-section .form-control {
    padding: 11px 20px 9px;
    font-size: 16px;
    outline: none;
    height: 55px;
    color: #535353;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #f7f7f7;
}

.login-30 .form-section .form-check {
    margin-bottom: 0;
}

.login-30 .form-section .form-check a {
    color: #fff;
}

.login-30 .form-section .form-check-label {
    padding-left: 5px;
    font-size: 16px;
    color: #fff;
}

.login-30 .form-section a.forgot-password {
    font-size: 16px;
    color: #fff;
}

.login-30 .logo img {
    margin-bottom: 15px;
    height: 25px;
}

.login-30 .btn-theme {
    position: relative;
    display: inline-block;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    width: 100%;
}

.login-30 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 3px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-30 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-30 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-30 .btn{
    box-shadow: none!important;
}

.login-30 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-30 .btn-primary{
    background: #ffc107;
    border-color: #ffc107;
}

.login-30 .btn-primary:after {
    background: #e9b004;
}

.login-30 .animate-charcter {
    background-image: linear-gradient(-225deg, #231557 0%, #44107a 29%, #ff1361 67%, #fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 55px;
    font-weight: 700;
    margin-bottom: 30px;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}

/* Social list */
.login-30 .social-list .buttons {
    display: flex;
    justify-content: center;
    margin-bottom: 25px;
}

.login-30 .social-list a {
    text-decoration: none !important;
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 2px 5px;
    font-size: 20px;
    overflow: hidden;
    position: relative;
}

.login-30 .social-list a {
    transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
}
.login-30 .social-list a:hover {
    border-radius: 50%;
}

.login-30 .social-list a i {
    position: relative;
    z-index: 3;
}

.login-30 .social-list a.facebook-bg {
    background: #4867aa;
}

.login-30 .social-list a.twitter-bg {
    background: #33CCFF;
}

.login-30 .social-list a.google-bg {
    background: #db4437;
}

.login-30 .social-list a.dribbble-bg {
    background: #2392e0;
}

/** Social media **/
@media (max-width: 992px) {
    .login-30 .form-inner {
        padding: 50px;
    }

    .login-30 .bg-img{
        display: none;
    }

    .login-30 .form-inner {
        max-width: 550px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .login-30 .form-inner {
        padding: 50px 30px;
    }
}
/** Login 30 end **/

/** Login 31 start **/
.login-31 .login-inner-form {
    color: #cccccc;
    position: relative;
}

.login-31 .form-info {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: #fbf1f1;
    background-image: linear-gradient(to bottom, #0066ff, #37d1ff);
}

.login-31 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-31 .form-section {
    max-width: 550px;
    margin: 0 auto;
    width: 100%;
}

.login-31 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-31 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-31 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 3px;
    font-weight: 500;
    border: 1px solid transparent;
    background: #fbf1f1;
}

.login-31 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-31 .login-inner-form .form-box input {
    float: left;
    width: 100%;
    padding: 14.5px 50px 14.5px 25px;
    border-radius: 3px;
}

.login-31 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 20px;
    font-size: 20px;
    color: #535353;
}

.login-31 .login-inner-form label {
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
}

.login-31 .login-inner-form .forgot {
    margin: 0;
    line-height: 45px;
    color: #535353;
    font-size: 15px;
    float: right;
}

.login-31 .info {
    max-width: 600px;
    margin: 0 auto;
    padding: 50px 40px;
    margin-bottom: 30px;
    -webkit-transition: all 0.5s;
    transition: all 0.9s;
    position: relative;
    border-radius: 4px;
    z-index: 1;
    background-image: linear-gradient(to bottom, #0066ff, #37d1ff);
}

.login-31 .info h1 {
    font-size: 40px;
    color: #fff;
    margin-bottom: 20px;
    font-weight: 700;
}

.login-31 .typing > *{
    overflow: hidden;
    white-space: nowrap;
    animation: typingAnim 3s steps(50);
}

@keyframes typingAnim {
    from {width:0}
    to {width:100%}
}

.login-31 .info p {
    margin-bottom: 0;
    color: #fff;
    line-height: 25px;
    font-size: 15px;
    opacity: 0.9;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}

.login-31:hover .info::before {
    height: 100%;
}

.login-31 .info::before{
    background: #fff;
}


.login-31 .login-inner-form p {
    margin: 0;
    color: #535353;
}

.login-31 .login-inner-form p a {
    color: #535353;
}

.login-31 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-31 .form-section a {
    text-decoration: none;
}

.login-31 .logo img {
    height: 25px;
    margin-bottom: 20px;
}

.login-31 .nav-pills li {
    display: inline-block;
}

.login-31 .login-inner-form .form-check {
    float: left;
    margin-bottom: 0;
}

.login-31 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-31 .login-inner-form .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-31 .btn-section {
    top: 20px;
    position: absolute;
    right: 20px;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.2);
    border-radius: 50px;
}

.login-31 .btn-section .link-btn {
    font-size: 15px;
    float: left;
    text-align: left;
    font-weight: 400;
    border-radius: 0;
    color: #fff;
    text-decoration: blink;
    font-family: 'Jost', sans-serif;
}

.login-31 .btn-section .btn-2 {
    line-height: 40px;
    text-align: center;
    border-radius: 0 50px 50px 0;
    width: 110px;
}

.login-31 .btn-section .active-bg {
    background-image: linear-gradient(to bottom, #5699ff, #37d1ff);
}

.login-31 .btn-section .default-bg {
    background-image: linear-gradient(to bottom, #37d1ff, #5699ff);
}

.login-31 .btn-section .btn-1 {
    line-height: 40px;
    text-align: center;
    width: 110px;
    border-radius: 50px 0 0 50px;
}

.login-31 .btn-section {
    margin: 0 auto 30px;
}

.login-31 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    margin-left: 3px;
}

.login-31 .form-section {
    text-align: center;
    padding: 60px 60px;
    background: #fff;
    border-radius: 5px;
}

.login-31 .form-section h3 {
    font-size: 25px;
    margin-bottom: 35px;
    font-weight: 400;
    color: #040404;
}

.login-31 .btn-theme {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    border: none;
    outline: none !important;
    color: #ffffff;
    text-transform: capitalize;
    transition: all 0.3s linear;
    z-index: 1;
    overflow: hidden;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    width: 100%;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
}

.login-31 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0;
    position: absolute;
    border: none;
    border-radius: 0;
    background-color:#fbf1f1;
    margin-left: -24px;
}

.login-31 .form-check-input:checked {
    background-color: #20a4ff;
}

.login-31 .btn-theme i::before {
    position: relative;
    font-size: 18px;
    top: 3px;
    padding-left: 5px;
}

.login-31 .btn-theme:hover {
    color: #fff;
}

.login-31 .btn-theme:hover:after {
    transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
    transition: transform 0.4s linear, transform 0.4s linear;
}

.login-31 .btn-theme:after {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: "";
    border-radius: 7px;
    transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
    transform-origin: bottom center;
    transition: transform 0.4s linear, transform 0.4s linear;
    z-index: -1;
}

.login-31 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-31 .btn{
    box-shadow: none!important;
}

.login-31 .btn-md{
    padding: 0 50px;
    line-height: 45px;
}

.login-31 .btn-primary{
    background-image: linear-gradient(to bottom, #0066ff, #37d1ff);
}

.login-31 .btn-primary:after {
    background-image: linear-gradient(to bottom, #37d1ff, #0066ff);
}

.login-31 .btn-light:after {
    background: #f9fafb;
}

.login-31 .full-none{
    display: none;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-31 .full-none a{
    color: #535353;
}

.login-31 .social-list{
    display: inline-flex;
    margin-top: 35px;
}

.login-31 .social-list .icon {
    position: relative;
    border-radius: 100px;
    margin: 0 4px 3px 0;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    color: #ffffff;
}

.login-31 .social-list .tooltip {
    position: absolute;
    top: 0;
    font-size: 14px;
    background-color: #ffffff;
    color: #ffffff;
    padding: 5px 8px;
    border-radius: 5px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.login-31 .social-list .tooltip::before {
    position: absolute;
    content: "";
    height: 8px;
    width: 8px;
    background-color: #ffffff;
    bottom: -3px;
    left: 50%;
    transform: translate(-50%) rotate(45deg);
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.login-31 .social-list .icon:hover .tooltip {
    top: -45px;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}

.login-31 .social-list .icon:hover span,
.login-31 .social-list .icon:hover .tooltip {
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.login-31 .social-list .facebook{
    background: #3b5999;
}

.login-31 .social-list .facebook:hover .tooltip,
.login-31 .social-list .facebook:hover .tooltip::before {
    background: #3b5999;
}

.login-31 .social-list .twitter{
    background: #46c1f6;
}

.login-31 .social-list .twitter:hover .tooltip,
.login-31 .social-list .twitter:hover .tooltip::before {
    background: #46c1f6;
}

.login-31 .social-list .instagram{
    background: #db4437;
}

.login-31 .social-list .instagram:hover .tooltip,
.login-31 .social-list .instagram:hover .tooltip::before {
    background: #db4437;
}

.login-31 .social-list .github{
    background: #2392e0;
}

.login-31 .social-list .github:hover .tooltip,
.login-31 .social-list .github:hover .tooltip::before {
    background: #2392e0;
}

.login-31 .bg-img {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: url(../img/img-31.jpg);
    background-size: cover;
    top: 0;
    left: 0;
    z-index: 0;
}

.login-31 .bg-img:before {
    content: "";
    background: #000;
    position: fixed;
    z-index: -1;
    top: 0;
    left: 0;
    opacity: 0.3;
}

@keyframes sf-fly-by-1 {
    from {
        transform: translateZ(-600px);
        opacity: 0.5;
    }
    to {
        transform: translateZ(0);
        opacity: 0.5;
    }
}
@keyframes sf-fly-by-2 {
    from {
        transform: translateZ(-1200px);
        opacity: 0.5;
    }
    to {
        transform: translateZ(-600px);
        opacity: 0.5;
    }
}
@keyframes sf-fly-by-3 {
    from {
        transform: translateZ(-1800px);
        opacity: 0.5;
    }
    to {
        transform: translateZ(-1200px);
        opacity: 0.5;
    }
}

.login-31 .star-field {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    perspective: 600px;
    -webkit-perspective: 600px;
    z-index: -1;
}

.login-31 .star-field .layer {
    box-shadow: -411px -476px #cccccc, 777px -407px #d4d4d4, -387px -477px #fcfcfc, -91px -235px #d4d4d4, 491px -460px #f7f7f7, 892px -128px #f7f7f7, 758px -277px #ededed, 596px 378px #cccccc, 647px 423px whitesmoke, 183px 389px #c7c7c7,
    524px -237px #f0f0f0, 679px -535px #e3e3e3, 158px 399px #ededed, 157px 249px #ededed, 81px -450px #ebebeb, 719px -360px #c2c2c2, -499px 473px #e8e8e8, -158px -349px #d4d4d4, 870px -134px #cfcfcf, 446px 404px #c2c2c2,
    440px 490px #d4d4d4, 414px 507px #e6e6e6, -12px 246px #fcfcfc, -384px 369px #e3e3e3, 641px -413px #fcfcfc, 822px 516px #dbdbdb, 449px 132px #c2c2c2, 727px 146px #f7f7f7, -315px -488px #e6e6e6, 952px -70px #e3e3e3,
    -869px -29px #dbdbdb, 502px 80px #dedede, 764px 342px #e0e0e0, -150px -380px #dbdbdb, 654px -426px #e3e3e3, -325px -263px #c2c2c2, 755px -447px #c7c7c7, 729px -177px #c2c2c2, -682px -391px #e6e6e6, 554px -176px #ededed,
    -85px -428px #d9d9d9, 714px 55px #e8e8e8, 359px -285px #cfcfcf, -362px -508px #dedede, 468px -265px #fcfcfc, 74px -500px #c7c7c7, -514px 383px #dbdbdb, 730px -92px #cfcfcf, -112px 287px #c9c9c9, -853px 79px #d6d6d6,
    828px 475px #d6d6d6, -681px 13px #fafafa, -176px 209px #f0f0f0, 758px 457px #fafafa, -383px -454px #ededed, 813px 179px #d1d1d1, 608px 98px whitesmoke, -860px -65px #c4c4c4, -572px 272px #f7f7f7, 459px 533px #fcfcfc,
    624px -481px #e6e6e6, 790px 477px #dedede, 731px -403px #ededed, 70px -534px #cccccc, -23px 510px #cfcfcf, -652px -237px whitesmoke, -690px 367px #d1d1d1, 810px 536px #d1d1d1, 774px 293px #c9c9c9, -362px 97px #c2c2c2,
    563px 47px #dedede, 313px 475px #e0e0e0, 839px -491px #e3e3e3, -217px 377px #d4d4d4, -581px 239px #c2c2c2, -857px 72px #cccccc, -23px 340px #dedede, -837px 246px white, 170px -502px #cfcfcf, 822px -443px #e0e0e0, 795px 497px #e0e0e0,
    -814px -337px #cfcfcf, 206px -339px #f2f2f2, -779px 108px #e6e6e6, 808px 2px #d4d4d4, 665px 41px #d4d4d4, -564px 64px #cccccc, -380px 74px #cfcfcf, -369px -60px #f7f7f7, 47px -495px #e3e3e3, -383px 368px #f7f7f7, 419px 288px #d1d1d1,
    -598px -50px #c2c2c2, -833px 187px #c4c4c4, 378px 325px whitesmoke, -703px 375px #d6d6d6, 392px 520px #d9d9d9, -492px -60px #c4c4c4, 759px 288px #ebebeb, 98px -412px #c4c4c4, -911px -277px #c9c9c9;
    transform-style: preserve-3d;
    position: absolute;
    top: 50%;
    left: 50%;
    height: 4px;
    width: 4px;
    border-radius: 2px;
}

.login-31 .star-field .layer:nth-child(1) {
    animation: sf-fly-by-1 5s linear infinite;
}

.login-31 .star-field .layer:nth-child(2) {
    animation: sf-fly-by-2 5s linear infinite;
}

.login-31 .star-field .layer:nth-child(3) {
    animation: sf-fly-by-3 5s linear infinite;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-31 .bg-img {
        display: none;
    }

    .login-31 .form-info {
        padding: 30px 15px;
    }

}

@media (max-width: 768px) {
    .login-31 .form-section {
        padding: 50px 30px;
    }

    .login-31 .btn-section{
        display: none;
    }

    .login-31 .full-none{
        display: initial;
    }

    .login-31 .social-list {
        margin: 30px 0;
    }
}
/** Login 31 start **/

/** Login 32 start **/
.login-32 .login-32-inner{
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    min-height: 100vh;
    text-align: center;
    position: relative;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
}

.login-32 a {
    text-decoration: none;
}

.login-32 .login-inner-form {
    color: #535353;
    text-align: center;
    position: relative;
}

.login-32 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

/** Animate Image start **/
.login-32 .animate-image-1{
    position: relative;
    -webkit-animation:glide 2s ease-in-out alternate infinite;
}

.login-32 .animate-image-1 img{
    height: 200px;
    position: absolute;
    bottom: 70px;
    left: 15%;
}

@-webkit-keyframes glide  {
    from {
        right:0;
        bottom:0;
    }
    to {
        right:0;
        bottom:20px;
    }
}

.login-32 .animate-image-2{
    position: relative;
    -webkit-animation:glide 2s ease-in-out alternate infinite;
}

.login-32 .animate-image-2 img{
    height: 200px;
    position: absolute;
    top: 70px;
    right: 15%;
}

@-webkit-keyframes glide  {
    from {
        right:0;
        bottom:0;
    }

    to {
        right:0;
        bottom:20px;
    }
}

.login-32 .form-section{
    max-width: 600px;
    margin: 0 auto;
    border-radius: 10px;
    padding: 70px;
    background: #fff2f2;
}

.login-32 .login-inner-form .form-group {
    margin-bottom: 30px;
}

.login-32 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-32 .form-check-input:checked {
    display: none;
}

.login-32 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #535353;
    border-radius: 50px;
    border: 1px solid #fff;
    background: #fff;
    padding: 15.5px 50px 15.5px 25px;
}

.login-32 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-32 .login-inner-form .form-box i {
    position: absolute;
    top: 14px;
    right: 25px;
    font-size: 19px;
}

.login-32 .login-inner-form .forgot{
    margin: 0;
    line-height: 40px;
}

.login-32 .login-inner-form .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
}

.login-32 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-32 .login-inner-form p{
    margin: 0;
    color: #535353;
}

.login-32 .login-inner-form p a{
    color: #535353;
}

.login-32 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-32 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-32 .login-inner-form .btn-theme {
    background: #50a1ff;
    border: none;
    color: #fff;
}

.login-32 .login-inner-form .btn-theme:hover {
    background: #4595f1;
}

.login-32 .logo{
    text-align: center;
    margin-bottom: 35px;
}

.login-32 .logo img{
    height: 30px;
}

.login-32 .nav-pills li{
    display: inline-block;
}

.login-32 .login-inner-form .form-group.mb-35{
    margin-bottom: 35px;
}

.login-32 .login-inner-form .social-list li {
    display: inline-block;
}

.login-32 .login-inner-form .social-list li a {
    margin: 2px;
    font-size: 18px;
    width: 55px;
    height: 55px;
    line-height: 55px;
    border-radius: 50px;
    display: inline-block;
    text-align: center;
}

.login-32 .login-inner-form .social-list li a:hover{
    text-decoration: none;
    color: #fff;
}

.login-32 .login-inner-form .extra-login {
    float: left;
    width: 100%;
    margin: 30px 0 28px;
    text-align: center;
    position: relative;
}

.login-32 .login-inner-form .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-32 .login-inner-form .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #fff2f2;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 16px;
    color: #535353;
    text-transform: capitalize;
}

.login-32 .form-section p a{
    color: #535353;
}

.login-32 .btn-section{
    text-align: center;
    margin-bottom: 35px;
}

.login-32 .btn-section .link-btn{
    padding: 8px 25px;
    font-size: 16px;
    border: solid 1px #fff;
    background: #fff;
    margin-right: 5px;
    letter-spacing: 0.5px;
    border-radius: 50px;
    font-weight: 400;
    color: #535353;
    text-decoration: none;
    text-decoration: blink;
}

.login-32 .btn-section .link-btn:hover{
    color: #50a1ff;
}

.login-32 .btn-section .active {
    color: #50a1ff;
}

.login-32 .login-inner-form ul{
    margin: 0;
    padding: 0;
}

.login-32 .login-inner-form .terms{
    margin-left: 3px;
}

.login-32 .login-inner-form .checkbox {
    margin-bottom: 30px;
    font-size: 16px;
}

.login-32 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-32 .login-inner-form .form-check a {
    color: #535353;
    float: right;
}

.login-32 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-32 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 22px;
    height: 22px;
    margin-left: -27px;
    border: 1px solid #fff;
    border-radius: 50px;
    background-color: #fff;
}

.login-32 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #535353;
}

.login-32 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #50a1ff;
    border-color: #50a1ff;
}

.login-32 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 20px;
    font-size: 12px;
    content: "\2713";
    padding-left: 0;
}

.login-32 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-32 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #535353;
    float: right;
}

.login-32 .facebook-bg {
    border: solid 2px #4867aa;
    color: #4867aa;
}

.login-32 .form-section:hover .facebook-bg{
    background: #4867aa;
    color: #fff;
}

.login-32 .twitter-bg {
    border: solid 2px #33CCFF;
    color: #33CCFF;
}

.login-32 .form-section:hover .twitter-bg {
    background: #33CCFF;
    color: #fff;
}

.login-32 .google-bg {
    border: solid 2px #db4437;
    color: #db4437;
}

.login-32 .form-section:hover .google-bg {
    background: #db4437;
    color: #fff;
}

.login-32 .form-section .linkedin-bg {
    border: solid 2px #0177b5;
    color: #0177b5;
}

.login-32 .form-section:hover .linkedin-bg {
    background: #0177b5;
    color: #fff;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-32 .form-section {
        padding: 50px 30px;
    }

    .login-32 .login-32-inner{
        padding: 15px 0;
    }

    .login-32 .animate-image-2{
        display: none;
    }

    .login-32 .animate-image-1{
        display: none;
    }
}
/** Login 32 start **/

/** Login 33 start **/
.login-33 {
    background: url(../img/img-33.jpg) top left repeat;
    background-size: cover;
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
}

.login-33 a {
    text-decoration: none;
}

.login-33 .btn-section{
    margin-bottom: 50px;
}

.login-33 .link-btn {
    padding: 11px 30px;
    text-decoration: none;
    font-size: 17px;
    border-radius: 3px;
    color: #6f6d6d;
    border: 2px solid #fff;
    background: #fff;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
}

.login-33 .form-check-input:checked {
    display: none;
}

.login-33 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-33 .link-btn:hover{
    border: 2px solid #fff;
    color: red;
    background: #fff;
}

.login-33 .logo img{
    margin-bottom: 50px;
    height: 40px;
}

.login-33 .active {
    border: 2px solid #fff;
    background: #fff;
    color: red;
}

.login-33 .form-section {
    max-width: 550px;
    color: #fff;
    margin: 0 auto;
    padding: 50px;
    background: #00000052;
}

.login-33 .login-inner-form .form-group {
    margin-bottom: 40px;
}

.login-33 .login-inner-form .form-control {
    width: 100%;
    padding: 10px 25px;
    font-size: 18px;
    font-weight: 400;
    outline: none;
    color: #000!important;
    border-radius: 3px;
    height: 60px;
    border: 1px solid #fff;
    background: #fff;
    font-family: 'Jost', sans-serif;
}

.login-33 .login-inner-form label{
    font-weight: 400;
    font-size: 18px;
    margin-bottom: 10px;
    opacity: 0.9;
    font-family: 'Jost', sans-serif;
}

.login-33 .login-inner-form .forgot{
    margin: 0;
    line-height: 60px;
    opacity: 0.9;
    color: #fff;
    font-size: 16px;
    float: right;
}

.login-33 .login-inner-form .btn-md {
    cursor: pointer;
    height: 60px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-33 .login-inner-form p a{
    color: #fff;
    opacity: 0.9;
}

.login-33 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-33 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-33 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-33 .login-inner-form .btn-theme {
    background: #f0151f;
    border: none;
    color: #fff;
}

.login-33 .login-inner-form .btn-theme:hover {
    background: #dc141d;
}

.login-33 .tab-box .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #000;
    border: solid 2px rgba(23, 23, 23, 0.72);
    background: none;
}

/** MEDIA **/
@media (max-width: 768px) {
    .login-33 {
        padding: 30px 0;
    }

    .login-33 .form-section {
        padding: 50px 30px;
    }
}
/** Login 33 end **/

/** Login 34 start **/
.login-34 {
    padding: 25px 0;
    z-index: 999;
    position: relative;
    min-height: 100vh;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-34 a {
    text-decoration: none;
}

.login-34 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-34 .logo {
    border-radius: 50px;
    margin-bottom: 0;
    display: inline-block;
    top: 20px;
    position: absolute;
    right: 20px;
}

.login-34 .login-box {
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
}

.login-34 .form-check-input:checked {
    display: none;
}

.login-34 .login-box .form-info {
    background-image: linear-gradient(to bottom, #0066ff, #37d1ff);
}

.login-34 .form-section {
    text-align: center;
    padding: 110px 60px 60px;
    border-radius: 10px 0 0 10px;
    position: relative;
}

.login-34-bg {
    background: #f7f7f7;
}

.login-34 .pad-0 {
    padding: 0;
}

.login-34 label {
    color: #fff;
    font-size: 16px;
}

.login-34 .form-section p {
    color: #fff;
    font-size: 16px;
    margin-bottom: 40px;
}

.login-34 .form-section p a {
    color: #e6e6e6;
}

.login-34 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-34 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-34 .form-section .thembo {
    margin-left: 4px;
}

.login-34 .form-section h1 {
    font-size: 30px;
    color: #fff;
}

.login-34 .form-section h3 {
    margin: 0 0 40px;
    font-size: 23px;
    font-weight: 400;
    color: #fff;
}

.login-34 .form-section .form-group {
    margin-bottom: 25px;
}

.login-34 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-34 .form-section .form-control {
    padding: 10px 20px;
    font-size: 15px;
    outline: none;
    height: 50px;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-34 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-34 .form-section .btn-md {
    cursor: pointer;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-34 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-34 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-34 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-34 .form-section .btn-theme {
    background: #ff2f2f;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
}

.login-34 .form-section .btn-theme:hover {
    background: #ec2727;
}

.login-34 .none-2 {
    display: none;
}

.login-34 .form-section .terms {
    margin-left: 3px;
}

.login-34 .btn-section {
    border-radius: 50px;
    margin-bottom: 0;
    display: inline-block;
    top: 20px;
    position: absolute;
    right: 20px;
}

.login-34 .info {
    max-width: 500px;
    margin: 0 auto;
    align-self: center !important;
}

.login-34 .btn-section .link-btn {
    font-size: 14px;
    float: left;
    font-weight: 400;
    text-align: center;
    text-decoration: none;
    text-decoration: blink;
    width: 100px;
    padding: 8px 5px;
    margin-right: 5px;
    color: #fff;
    border-radius: 3px;
    background: #0000002e;
}

.login-34 .btn-section .active-bg {
    color: #fff;
}

.login-34 .form-section .checkbox {
    font-size: 14px;
}

.login-34 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-34 .form-section .form-check a {
    color: #fff;
    float: right;
}

.login-34 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-34 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #fff;
    border-radius: 3px;
    background-color: #fff;
}

.login-34 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #fff;
}

.login-34 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #ff2f2f;
    border-color: #ff2f2f;
}

.login-34 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 14px;
    content: "\2713";
    padding-left: 3px;
}

.login-34 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-34 .form-section a.forgot-password {
    font-size: 16px;
    color: #fff;
    float: right;
}

.login-34 .social-list a {
    text-align: center;
    display: inline-block;
    font-size: 18px;
    margin: 0 10px;
    color: #fff;
}

.login-34 .social-list a:hover {
    color: #ff2f2f;
}

@media (max-width: 992px) {
    .login-34 .form-section {
        width: 100%;
    }

    .login-34 .bg-img {
        min-height: 100%;
        border-radius: 5px;
    }

    .none-992 {
        display: none !important;
    }

    .login-34 .login-box {
        max-width: 500px;
        margin: 0 auto;
        padding: 0;
    }
}

@media (max-width: 768px) {
    .login-34 .form-section {
        padding: 30px;
    }

    .login-34 .form-section {
        padding: 110px 30px 50px;
    }
}
/** Login 34 end **/

/** Login 35 start **/
.login-35 {
    background: url(../img/img-35.jpg) top left repeat;
    background-size: cover;
    top: 0;
    width: 100%;
    text-align: center;
    bottom: 0;
    opacity: 1;
    z-index: 9;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}


.login-35:before {
    content: "";
    width: 50%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 0;
    background: #fff;
    z-index: -99;
}

.login-35 .form-section {
    max-width: 550px;
    margin: 0 auto;
    padding: 70px 50px;
    border-radius: 5px;
    z-index: 999;
    box-shadow: 0 0 5px rgb(0 0 0 / 20%);
    background-image: linear-gradient(to bottom, #61daff, #656bff);
}

.login-35 #particles-js {
    background-size: cover;
    background-position: 50% 50%;
    position: fixed;
    min-height: 100vh;
    width: 100%;
    z-index: -999;
}

.login-35 .form-section p{
    color: #fff;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-35 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-35 .form-section a {
    text-decoration: none;
}

.login-35 .form-section p a{
    color: #fff;
}

.login-35 .form-section .extra-login {
    float: left;
    width: 100%;
    margin: 25px 0 25px;
    text-align: center;
    position: relative;
}

.login-35 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc40;
    content: "";
}

.login-35 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    background: #648cff;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #fff;
    text-transform: capitalize;
}

.login-35 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-35 .logo-2 img{
    margin-bottom: 20px;
    height: 30px;
}

.login-35 .form-section .social-list li {
    display: inline-block!important;
    margin-bottom: 5px;
}

.login-35 .form-section .social-list li a {
    font-size: 14px;
    font-weight: 400;
    width: 130px;
    margin: 2px 0 3px 0;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
    font-family: 'Jost', sans-serif;
}

.login-35 .form-section .social-list li a i{
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
    border-radius: 20px;
}

.login-35 .form-section .social-list li a span{
    margin-right: 7px;
}

.login-35 .form-section .thembo{
    margin-left: 4px;
}

.login-35 .form-section h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #fff;
}

.login-35 .main-title .words-wrapper b {
    display: inline-block;
    position: absolute;
    white-space: nowrap;
    left: 0;
    top: 0;
}

.login-35 .main-title .words-wrapper b.visible {
    position: relative;
}

.login-35 .main-title .no-js .words-wrapper b {
    opacity: 0;
}

.login-35 .main-title .no-js .words-wrapper b.visible {
    opacity: 1;
}

.login-35 h3{
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #fff;
}

.login-35 .form-section .form-group {
    margin-bottom: 25px;
}

.login-35 .form-section .form-control {
    float: left;
    width: 100%;
    padding: 12px 20px 12px 20px;
    height: 50px;
}

.login-35 .form-section .form-control {
    font-size: 16px;
    outline: none;
    background: #fff;
    color: #535353;
    border-radius: 3px;
    border: 1px solid #fff;
}

.login-35 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-35 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-35 .form-section .terms{
    margin-left: 3px;
}

.login-35 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0;
    position: absolute;
    border: 1px solid #fff;
    border-radius: 2px;
    background-color: #fff;
    margin-left: -22px;
}

.login-35 .form-section .checkbox {
    margin-bottom: 20px;
}

.login-35 .form-section .form-check{
    margin-bottom: 0;
    text-align: left;
}

.login-35 .form-section .form-check a {
    color: #535353;
}

.login-35 .form-section .form-check-label {
    padding-left: 5px;
    margin-bottom: 0;
    font-size: 16px;
    color: #fff;
}

.login-35 .form-check-input:checked {
    background-color: #ffc801;
    border-color: #ffc801;
}

.login-35 .form-section a.forgot-password {
    font-size: 16px;
    color: #fff;
}

.login-35 .btn-theme {
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
    width: 100%;
}

.login-35 .btn-theme:before {
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

.login-35 .btn-theme:after {
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

.login-35 .btn-theme:hover {
    background: transparent;
}

.login-35 .btn-theme:hover:before {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-35 .btn-theme:hover:after {
    width: 0;
    opacity: 1;
    visibility: visible;
}

.login-35 .btn-lg{
    padding: 0 50px;
    line-height: 46px;
}

.login-35 .btn{
    box-shadow: none!important;
}

.login-35 .btn-md{
    padding: 0 45px;
    line-height: 41px;
}

.login-35 .btn-primary {
    background: #ffc801;
}

.login-35 .btn-primary:before {
    background: #ffc801;
}

.login-35 .btn-primary:after {
    background: #ffc801;
}

.login-35 .btn-primary:hover {
    color: #ffc801;
    border: 2px solid #ffc801;
}

/** Social media **/
.login-35 .facebook-i {
    background: #4867aa;
    color: #fff;
}

.login-35 .twitter-i {
    background: #33CCFF;
    color: #fff;
}

.login-35 .google-i {
    background: #db4437;
    color: #fff;
}

.login-35 .facebook-color{
    color: #4867aa;
}

.login-35 .twitter-color {
    color: #33CCFF;
}

.login-35 .google-color {
    color: #db4437;
}

@media (max-width: 768px) {
    .login-35 .form-section {
        padding: 50px 30px;
    }

    .login-35:before {
        display: none;
    }
}

@media (max-width: 500px) {
    .login-35 .form-section .social-list li a i {
        display: none;
    }

    .login-35 .form-section .social-list li a {
        width: 100px;
    }
}
/** Login 35 end **/

/** Login 36 start **/
.login-36 a {
    text-decoration: none;
}

.login-36 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-36 .form-section {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: #fff7f7;
}

.login-36 .form-inner {
    max-width: 500px;
    width: 100%;
    margin: 0 15px;
    background: #fff;
    padding: 50px;
    box-shadow: 0 0 10px rgb(0 0 0 / 12%);
    overflow: hidden;
}

.login-36 .bg-img {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 30px;
    background: url(../img/img-36.jpg) top left repeat;
    z-index: 999;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.login-36 .bg-img:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(33 9 90 / 55%);
}

.login-36 .form-section .extra-login {
    position: relative;
}

.login-36 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e4e4e4;
    content: "";
}

.login-36 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    position: relative;
    font-size: 14px;
    color: #424242;
    text-transform: capitalize;
    background: #fff;
}

.login-36 .form-section p {
    color: #424242;
    margin-bottom: 0;
    font-size: 15px;
}

.login-36 .form-section p a {
    color: #424242;
}

.login-36 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-36 .form-section .thembo {
    margin-left: 4px;
}

.login-36 .form-section h3 {
    margin: 0 0 30px;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 500;
    color: #121212;
}

.login-36 .form-section .form-group {
    margin-bottom: 25px;
}

.login-36 .form-section .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-36 .form-section .form-check-input:checked{
    display: none;
}

.login-36 .form-section .form-control {
    padding: 15.5px 20px;
    float: left;
    width: 100%;
    font-size: 15px;
    outline: none;
    color: #424242;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-36 .form-section img {
    margin-bottom: 5px;
    height: 40px;
}

.login-36 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 23px;
    color: #424242;
}

.login-36 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-36 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    height: 55px;
}

.login-36 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-36 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-36 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-36 .form-section .btn-theme {
    background: #ff574d;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
    border-radius: 3px;
}

.login-36 .form-section .btn-theme:hover {
    background: #ef4b22;
}

.login-36 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-36 .form-section .form-check a {
    color: #424242;
    float: right;
}

.login-36 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-36 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 3px;
    margin-left: -25px;
    border: 1px solid #fff;
    border-radius: 3px;
    background: #fff;
    box-shadow: 0 0 5px rgb(0 0 0 / 20%);
}

.login-36 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 15px;
    color: #424242;
}

.login-36 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background: #ff574d;
    border-color: #ff574d;
}

.login-36 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 12px;
    content: "\2713";
    padding-left: 1px;
}

.login-36 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-36 .form-section a.forgot-password {
    font-size: 15px;
    color: #424242;
    float: right;
}

.login-36 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

.login-36 .info {
    max-width: 650px;
    margin: 0 auto;
    z-index: 999;
}

.login-36 .name_wrap h1 {
    position: relative;
    font-size: 55px;
    font-family: "Poppins", sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    display: inline-block;
    overflow: hidden;
}

.name_wrap h1 span {
    color: transparent;
    -webkit-text-stroke: 1px #fff;
    padding-left: 2px;
}

.login-36 .info p {
    color: #fff;
    line-height: 28px;
    opacity: 0.8;
    font-size: 15px;
}

.login-36 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-36 .social-list {
    padding: 0;
    text-align: center;
}

.login-36 .social-list li a {
    -webkit-transition: all 0.8s;
    transition: all 0.8s;
    bottom: 15px;
}

.login-36 .form-inner:hover .social-list li a {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}

.login-36 .form-inner i {
    -webkit-transition: all 0.8s;
    transition: all 0.8s;
}

.login-36 .form-inner:hover .form-box i{
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
}

.login-36 .social-list li {
    display: inline-block;
}

.login-36 .social-list li a {
    margin: 1px;
    font-size: 14px;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-36 .social-list li a:hover {
    text-decoration: none;
}

.login-36 .facebook-bg {
    background: #4867aa;
}

.login-36 .facebook-bg:hover {
    background: #3d5996;
    color: #fff;
}

.login-36 .twitter-bg {
    background: #33CCFF;
}

.login-36 .twitter-bg:hover {
    background: #56d7fe;
}

.login-36 .google-bg {
    background: #db4437;
}

.login-36 .google-bg:hover {
    background: #dc4e41;
}

@media (max-width: 992px) {
    .login-36 .form-inner {
        padding: 40px 30px;
    }

    .login-36 .bg-img{
        display: none;
    }
}
/** Login 36 end **/

/** Login 37 start **/
.login-37 {
    background: #FAFAFA;
}

.login-37 a {
    text-decoration: none;
}

.login-37 .form-section {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px 0;
    background: #06133D;
}

.login-37 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-37 .form-check-input:checked {
    display: none;
}

.login-37 .form-inner {
    max-width: 500px;
    width: 100%;
    margin: 0 30px;
    text-align: center;
    padding: 50px 30px;
    background: #12214a;
}

.login-37 .bg-img {
    background: url(../img/img-37.png) top left repeat;
    background-size: cover;
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 496px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 50px;
}

.login-37 .form-section .extra-login {
    float: left;
    width: 100%;
    margin: 25px 0 25px;
    text-align: center;
    position: relative;
}

.login-37 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #353944;
    content: "";
}

.login-37 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-family: Open Sans;
    font-size: 14px;
    color: #dadada;
    text-transform: capitalize;
    background: #12214a;
}

.login-37 .pad-0 {
    padding: 0;
}

.login-37 .form-section p {
    color: #dadada;
    margin-bottom: 0;
    text-align: center;
    font-size: 14px;
}

.login-37 .form-section p {
    color: #dadada;
    margin-bottom: 0;
    font-size: 15px;
}

.login-37 .form-section p a {
    color: #dadada;
}

.login-37 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-37 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-37 .form-section .thembo {
    margin-left: 4px;
}

.login-37 .form-section h3 {
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    color: #dadada;
}

.login-37 .form-section .form-group {
    margin-bottom: 25px;
}

.login-37 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-37 .form-section .form-control {
    padding: 10px 20px;
    font-size: 15px;
    outline: none;
    height: 50px;
    background: rgba(23, 23, 23, 0.72);
    color: #424242;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-37 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-37 .form-section .btn-md {
    cursor: pointer;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-37 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-37 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-37 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-37 .form-section .btn-theme {
    background: #ff2f2f;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
}

.login-37 .form-section .btn-theme:hover {
    background: #ec2727;
}

.login-37 .none-2 {
    display: none;
}

.login-37 .form-section .terms {
    margin-left: 3px;
}

.login-37 .form-section .checkbox {
    font-size: 14px;
}

.login-37 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-37 .form-section .form-check a {
    color: #fff;
    float: right;
}

.login-37 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-37 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #fff;
    border-radius: 3px;
    background-color: #fff;
}

.login-37 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 15px;
    color: #dadada;
}

.login-37 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #ff2f2f;
    border-color: #ff2f2f;
}

.login-37 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 14px;
    content: "\2713";
    padding-left: 2px;
}

.login-37 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-37 .form-section a.forgot-password {
    font-size: 15px;
    color: #dadada;
    float: right;
}

.login-37 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

.login-37 .social-list {
    margin-bottom: 30px;
}

.login-37 .social-list a {
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    margin: 2px;
    border-radius: 5%;
    background: #fff;
}

.login-37 .social-list a:hover {
    color: #fff;
}

/** Social media **/
.login-37 .facebook-bg {
    color: #4867aa;
}

.login-37 .facebook-bg:hover {
    background: #4867aa;
}

.login-37 .twitter-bg {
    color: #33CCFF;
}

.login-37 .twitter-bg:hover {
    background: #33CCFF;
}

.login-37 .google-bg {
    color: #db4437;
}

.login-37 .google-bg:hover {
    background: #db4437;
}

.login-37 .linkedin-bg {
    color: #2392e0;
}

.login-37 .linkedin-bg:hover {
    background: #1c82ca;
}

@media (max-width: 992px) {
    .login-37 .form-section {
        width: 100%;
    }

    .login-37 .bg-img {
        min-height: 100%;
        border-radius: 5px;
    }

    .none-992 {
        display: none !important;
    }
    
}

@media (max-width: 768px) {
    .login-37 .form-inner {
        margin: 0 15px;
    }

    .login-37 .form-section{
        padding: 30px 0;
    }
}
/** Login 37 end **/

/** Login 38 start **/
.login-38 {
    background: #fff;
}

.login-38 a {
    text-decoration: none;
}

.login-38 .form-section {
    min-height: 100vh;
    position: relative;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: #fff;
}

.login-38 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-38 .bg-img {
    min-height: 100vh;
    position: relative;
    display: flex;
    padding: 15px 0;
    background: url(../img/img-38.jpg) top left repeat;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.login-38 .bg-img::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(17 30 183 / 16%);
}

.login-38 .form-inner {
    max-width: 500px;
    width: 100%;
}

.login-38 .form-section .extra-login {
    width: 100%;
    margin: 25px 0 25px;
    position: relative;
}

.login-38 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-38 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 14px;
    color: #424242;
    text-transform: capitalize;
    background: #fff;
}

.login-38 .form-section p {
    color: #424242;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-38 .form-section p a {
    color: #424242;
}

.login-38 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-38 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-38 .form-section .thembo {
    margin-left: 4px;
}

.login-38 .form-section h3 {
    margin: 0 0 25px;
    font-size: 25px;
    color: #121212;
    font-weight: 400;
}

.login-38 .form-section .form-group {
    margin-bottom: 25px;
}

.login-38 .form-section .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-38 .form-section .form-control {
    padding: 10px 20px;
    font-size: 16px;
    outline: none;
    height: 55px;
    background: rgba(23, 23, 23, 0.72);
    color: #424242;
    border-radius: 3px;
    background: #fff;
    border: solid 1px #dedede;
}

.login-38 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    height: 55px;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-38 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-38 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-38 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-38 .form-section .btn-theme {
    background: #6fca3d;
    border: none;
    color: #fff;
}

.login-38 .form-section .btn-theme:hover {
    background: #6cbc40;
}

.login-38 .form-section .terms {
    margin-left: 3px;
}

.login-38 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-38 .form-section .form-check a {
    color: #424242;
    float: right;
}

.login-38 .form-check-input:checked {
    display: none;
}

.login-38 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-38 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #c5c3c3;
    border-radius: 3px;
    background-color: #fff;
}

.login-38 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #424242;
}

.login-38 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #6fca3d;
    border-color: #6fca3d;
}

.login-38 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 15px;
    font-size: 12px;
    content: "\2713";
    padding-left: 0;
}

.login-38 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-38 .form-section a.forgot-password {
    font-size: 16px;
    color: #424242;
    float: right;
}

.login-38 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

/** Social buttons start **/
.login-38 .social-buttons {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 30px;
}

.login-38 .social-button {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    outline: none;
    width: 55px;
    height: 55px;
    border-radius: 3px;
    background: #fff;
    box-shadow: 0 0 10px rgb(0 0 0 / 10%);
    text-align: center;
    margin: 0 5px 5px;
    font-size: 20px;
}

.login-38 .social-button::after {
    content: '';
    position: absolute;
    top: -1px;
    left: 50%;
    display: block;
    width: 0;
    height: 0;
    border-radius: 3px;
    transition: 0.3s;
}

.login-38 .social-button:focus, .social-button:hover {
    color: #fff!important;
}

.login-38 .social-button:focus::after, .social-button:hover::after {
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    margin-left: calc(-50% - 1px);
}

.login-38 .social-button i, .social-button svg {
    position: relative;
    z-index: 1;
    transition: 0.3s;
}

.login-38 .social-button-facebook {
    color: #4867aa;
}

.login-38 .social-button-facebook::after {
    background: #4867aa;
}

.login-38 .social-button-twitter {
    color: #33CCFF;
}

.login-38 .social-button-twitter::after {
    background: #33CCFF;
}

.login-38 .social-button-linkedin {
    color: #2392e0;
}

.login-38 .social-button-linkedin::after {
    background: #2392e0;
}

.login-38 .social-button-google {
    color: #db4437;
}

.login-38 .social-button-google::after {
    background: #db4437;
}

@media (max-width: 992px) {
    .login-38 .form-section {
        padding: 30px 15px;
    }

    .login-38 .bg-img {
        display: none;
    }
}
/** Login 38 end **/

/** Login 39 start **/
.login-39 {
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    min-height: 100vh;
    text-align: center;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}

.login-39 a {
    text-decoration: none;
}

.login-39 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-39 .form-section {
    max-width: 600px;
    margin: 0 auto;
    padding: 50px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
}

.login-39 .form-check-input:checked {
    display: none;
}

.login-39 .form-section p{
    color: #424242;
    margin-bottom: 0;
    text-align: center;
    font-size: 16px;
}

.login-39 .form-section p a{
    color: #424242;
}

.login-39 .form-section .extra-login {
    float: left;
    width: 100%;
    margin: 25px 0 25px;
    text-align: center;
    position: relative;
}

.login-39 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-39 .form-section .extra-login > span {
    display: inline-block;
    background: #fff;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 15px;
    color: #424242;
}

.login-39 .form-section ul{
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-39 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-39 .logo-2 img{
    margin-bottom: 15px;
    height: 30px;
}

.login-39 .form-section .thembo{
    margin-left: 4px;
}

.login-39 .form-section h3 {
    text-align: center;
    margin: 0 0 30px;
    font-size: 25px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    color: #121212;
}

.login-39 .form-section .form-group {
    margin-bottom: 25px;
}

.login-39 .form-section .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-39 .form-section .form-control {
    font-size: 15px;
    outline: none;
    background: #e8e8e8;
    color: #424242;
    border-radius: 3px;
    border: 1px solid #e8e8e8;
    padding: 15.5px 20px 15.5px 50px;
}

.login-39 .form-section .form-box i {
    position: absolute;
    top: 14px;
    left: 25px;
    color: #747474;
    font-size: 19px;
}

.login-39 .form-section .checkbox .terms{
    margin-left: 3px;
}

.login-39 .form-section .btn-md {
    cursor: pointer;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-39 .form-section input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-39 .form-section button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-39 .form-section .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-39 .form-section .btn-theme {
    background: #00a875;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    border: none;
    color: #fff;
}

.login-39 .form-section .btn-theme:hover {
    background: #029468;
}

.login-39 .form-section .terms{
    margin-left: 3px;
}

.login-39 .form-section .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-39 .form-section .form-check a {
    color: #424242;
    float: right;
}

.login-39 .form-section .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-39 .form-section .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #e8e8e8;
    border-radius: 3px;
    background-color: #e8e8e8;
}

.login-39 .form-section .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #424242;
}

.login-39 .form-section .checkbox-theme input[type="checkbox"]:checked + label::before {
    background-color: #00a875;
    border-color: #00a875;
}

.login-39 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #f3f3f3;
    line-height: 15px;
    font-size: 12px;
    content: "\2713";
    padding-left: 3px;
}

.login-39 .form-section input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-39 .form-section a.forgot-password {
    font-size: 16px;
    color: #424242;
    float: right;
    line-height: 50px;
}

.login-39 .form-section .social-list li a {
    font-size: 13px;
    font-weight: 600;
    width: 120px;
    margin: 2px 0 3px 0;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-39 .form-section .social-list li a i{
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    border-radius: 3px;
}

.login-39 .form-section .social-list li a span{
    margin-right: 7px;
}

/** Social media **/
.login-39 .facebook-bg {
    background: #4867aa;
}

.login-39 .twitter-bg {
    background: #33CCFF;
}

.login-39 .google-bg {
    background: #db4437;
}

.login-39 .google-i {
    background: #c3291c;
}

.login-39 .facebook-i {
    background: #3b589e;
}

.login-39 .twitter-i {
    background: #0cace0;
}

@media (max-width: 768px) {
    .login-39 .form-section {
        padding: 40px 30px;
    }
}
/** Login 39 end **/

/** Login 40 start **/
.login-40 .form-info {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px;
    background: #ffe9e9;
}

.login-40 a {
    text-decoration: none;
}

.login-40 .form-check-input:checked {
    display: none;
}

.login-40 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-40 .form-section {
    max-width: 430px;
    margin: 0 auto;
    text-align: center;
    width: 100%;
    overflow: hidden;
}

.login-40 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-40 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-40 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 14.5px 45px 14.5px 20px;
    border-radius: 3px;
    background: #fff;
}

.login-40 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-40 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 20px;
    font-size: 20px;
    color: #424242;
}

.login-40 .login-inner-form label {
    font-size: 14px;
    margin-bottom: 5px;
}

.login-40 .login-inner-form .forgot {
    margin: 0;
    line-height: 45px;
    color: #424242;
    font-size: 15px;
    float: right;
}

.login-40 .bg-img {
    background: url(../img/img-40.jpg) top left repeat;
    background-size: cover;
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 100px;
}

.login-40 .bg-img::before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(17 30 183 / 45%);
}

.login-40 .info{
    max-width: 700px;
    margin-right: auto;
    z-index: 999;
    text-align: left;
}

.login-40 .info h1 {
    font-size: 50px;
    color: #fff;
    font-weight: 700;
    margin-bottom: 30px;
    text-transform: uppercase;
}

.login-40 .info h1 span{
    font-weight: 300;
}

.login-40 .info p {
    margin-bottom: 0;
    color: #fff;
    opacity: 0.9;
    line-height: 25px;
    font-size: 15px;
}

.login-40 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 15.5px 50px 14.5px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 50px;
    text-transform: uppercase;
}

.login-40 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-40 .login-inner-form p {
    margin: 0;
    color: #424242;
}

.login-40 .login-inner-form p a {
    color: #424242;
}

.login-40 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-40 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-40 .login-inner-form .btn-theme {
    background: #0f96f9;
    border: none;
    color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-40 .login-inner-form .btn-theme:hover {
    background: #108ae4;
}

.login-40 .logo img {
    height: 30px;
    margin-bottom: 15px;
}

.login-40 .login-inner-form .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 2px;
}

.login-40 .login-inner-form .form-check-input {
    display: none;
}

.login-40 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 20px;
    height: 20px;
    top: 0px;
    margin-left: -25px;
    border-radius: 2px;
    background: #fff;
    border: 1px solid #fff;
}

.login-40 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #424242;
}

.login-40 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #0f96f9;
    border: 1px solid #0f96f9;
}

.login-40 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 20px;
    font-size: 12px;
    content: "\2713";
}

.login-40 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-40 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #424242;
    float: right;
    margin-left: 3px;
}

.login-40 .form-section h3 {
    font-size: 23px;
    margin-bottom: 40px;
    color: #121212;
}

.login-40 .form-section p {
    margin: 25px 0 0;
    font-size: 16px;
    color: #424242;
}

.login-40 .form-section p a {
    color: #424242;
}

.login-40 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.login-40 .form-section .social-list li {
    display: inline-block;
    margin-bottom: 5px;
}

.login-40 .form-section .social-list li a {
    font-size: 13px;
    font-weight: 600;
    width: 120px;
    margin: 2px 0 3px 0;
    height: 40px;
    line-height: 40px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
}

.login-40 .form-section .social-list li a i {
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
}

.login-40 .form-section .social-list li a span {
    margin-right: 7px;
}

.login-40 .form-section .extra-login {
    float: left;
    width: 100%;
    margin: 20px 0 25px;
    text-align: center;
    position: relative;
}

.login-40 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #d8dcdc;
    content: "";
}

.login-40 .form-section .extra-login > span {
    background: #ffe9e9;
    padding: 1px 20px;
    position: relative;
    font-size: 14px;
    color: #424242;
}

.login-40 .facebook-i {
    background: #4867aa;
    color: #fff;
}

.login-40 .twitter-i {
    background: #33CCFF;
    color: #fff;
}

.login-40 .google-i {
    background: #db4437;
    color: #fff;
}

.login-40 .facebook-color {
    color: #4867aa;
}

.login-40 .twitter-color {
    color: #33CCFF;
}

.login-40 .google-color {
    color: #db4437;
}

/** MEDIA **/
@media (max-width: 1200px) {
    .login-40 .info h1 {
        font-size: 45px;
    }
}

@media (max-width: 992px) {
    .login-40 .bg-img {
        display: none;
    }

    .login-40 .form-section .social-list li a {
        font-size: 12px;
        width: 110px;
    }

    .login-40 .form-info {
        padding: 30px 15px;
    }
}
/** Login 40 end **/

/** Login 41 start **/
.login-41 a {
    text-decoration: none;
}

.login-41 .form-info {
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
}

.login-41 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-41 .form-section{
    max-width: 530px;
    margin: 0 auto;
    width: 100%;
}

.login-41 .form-check-input:checked {
    display: none;
}

.login-41 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-41 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-41 .login-inner-form .form-control {
    font-size: 15px;
    outline: none;
    color: #424242;
    border-radius: 3px;
    border: 1px solid #fff;
    background: #fff;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .06);
    padding: 13.5px 40px 13.5px 15px;
}

.login-41 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-41 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 15px;
    font-size: 19px;
    color: #424242;
}

.login-41 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
    color: #424242;
    font-size: 15px;
    float: right;
}

.login-41 .bg-img {
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    background: #ff2f4b;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 15px;
    overflow: hidden;
}

.login-41 .bg-img-inner:before {
    content: "";
    width: 40%;
    height: 60%;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 20%;
    -webkit-clip-path: polygon(0 0, 100% 0, 0% 100%, 0% 100%);
    clip-path: polygon(0 0, 50% 50%, 0% 100%, 0% 100%);
    background: #d8001dd4;
    opacity: 0.5;
    z-index: -999;
}

.login-41 .bg-img-inner:after {
    content: "";
    width: 40%;
    background: #d8001dd4;
    height: 60%;
    position: absolute;
    top: 20%;
    right: 0;
    z-index: -1;
    -webkit-clip-path: polygon(0 0, 30% 0, 70% 10%);
    clip-path: polygon(0 0, 100% 50%, 100% 100%);
    opacity: 0.5;
    background: #d8001dd4;
}

.login-41 .info h1 {
    font-size: 28px;
    color: #fff;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.login-41 .info p {
    margin-bottom: 0;
    color: #fff;
    line-height: 28px;
}

.login-41 .info {
    max-width: 450px;
    margin: 0 auto;
    padding: 40px;
    border: solid 5px #fff;
    text-align: center;
    z-index: 999;
}

.login-41 .login-inner-form .btn-md {
    cursor: pointer;
    height: 50px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
}

.login-41 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-41 .login-inner-form p{
    margin: 0;
    color: #424242;
}

.login-41 .login-inner-form p a{
    color: #424242;
}

.login-41 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-41 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-41 .login-inner-form .btn-theme {
    background: #353140;
    border: none;
    color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-41 .login-inner-form .btn-theme:hover {
    background: #292631;
}

.login-41 .logo img{
    height: 30px;
    margin-bottom: 20px;
}

.login-41 .nav-pills li{
    display: inline-block;
}

.login-41 .login-inner-form .terms{
    margin-left: 3px;
}

.login-41 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-41 .login-inner-form .form-check a {
    color: #d6d6d6;
    float: right;
}

.login-41 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-41 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: 1px solid #fff;
    border-radius: 3px;
    background-color: #fff;
}

.login-41 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 15px;
    color: #fff;
}

.login-41 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #2a374c;
}

.login-41 .login-inner-form input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #fff;
    line-height: 12px;
    font-size: 13px;
    content: "\2713";
}

.login-41 .btn-section{
    top: 20px;
    position: absolute;
    left: 0px;
    float: right;
    display: inline-block;
    width: 100px;
}

.login-41 .btn-section .link-btn {
    font-size: 14px;
    float: left;
    background: transparent;
    font-weight: 400;
    line-height: 50px;
    width: 120px;
    text-decoration: none;
    text-decoration: blink;
    text-align: center;
    color: #fff!important;
    border-radius: 0 50px 50px 0;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.login-41 .btn-section .active-bg{
    background: #ff2f4b;
}

.login-41 .btn-section .default-bg{
    background: #353140;
}

.login-41 .btn-section .link-btn:hover{
    background: #ff2f4b;
}

.login-41 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #292631;
    border: solid #292631;
}

.login-41 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-41 .login-inner-form .checkbox a {
    font-size: 15px;
    color: #fff;
    float: right;
    margin-left: 3px;
}

.login-41 .form-section{
    text-align: center;
    padding: 70px;
    background: #ff2f4b;
    border-radius: 5px;
}

.login-41 .form-section .form-section-innner:before{
    content: "";
    width: 40%;
    height: 60%;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 20%;
    -webkit-clip-path: polygon(0 0, 100% 0, 0% 100%, 0% 100%);
    clip-path: polygon(0 0, 50% 50%, 0% 100%, 0% 100%);
    background: #d8001dd4;
    opacity: 0.1;
    z-index: -999;
}

.login-41 .form-section .form-section-innner:after {
    content: "";
    width: 40%;
    height: 60%;
    position: absolute;
    top: 20%;
    right: 0;
    z-index: -1;
    -webkit-clip-path: polygon(0 0, 30% 0, 70% 10%);
    clip-path: polygon(0 0, 100% 50%, 100% 100%);
    opacity: 0.1;
    background: #d8001dd4;
}

.login-41 .form-section h3{
    font-size: 25px;
    margin-bottom: 25px;
    font-weight: 400;
    color: #fff;
}

.login-41 .form-section p {
    margin: 25px 0 0;
    font-size: 15px;
    color: #fff;
}

.login-41 .form-section p a {
    color: #fff;
}

.login-41 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.login-41 .form-section .social-list li {
    display: inline-block;
}

.login-41 .form-section .social-list li a {
    font-size: 13px;
    font-weight: 600;
    width: 125px;
    margin: 0 2px 5px 0;
    height: 40px;
    line-height: 40px;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    background: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-41 .form-section .social-list li a i {
    height: 40px;
    width: 40px;
    line-height: 40px;
    float: left;
    color: #fff;
}

.login-41 .none-2 {
    display: none;
}

/** Social media **/
.login-41 .facebook-i {
    background: #4867aa;
    color: #fff;
}

.login-41 .twitter-i {
    background: #33CCFF;
    color: #fff;
}

.login-41 .google-i {
    background: #db4437;
    color: #fff;
}

.login-41 .facebook-color{
    color: #4867aa;
}

.login-41 .twitter-color {
    color: #33CCFF;
}

.login-41 .google-color {
    color: #db4437;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-41 .bg-img{
        display: none;
    }

    .login-41 .none-2 {
        display: inherit;
    }

    .login-41 .btn-section {
        display: none;
    }
}

@media (max-width: 768px) {
    .login-41 .form-section {
        padding: 50px 30px;
    }

    .login-41 .form-section .social-list li a {
        font-size: 12px;
        width: 115px;
        margin: 0 0 5px 0;
    }
}
/** Login 41 end **/

/** Login 42 start **/
.login-42 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-42 {
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: #fdfdfd;
}

.login-42 .form-section a{
    text-decoration: none;
}

.login-42 .form-inner {
    max-width: 570px;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    padding: 70px 80px;
    background: #fff;
    position: relative;
    z-index: 0;
    background-image: linear-gradient(to bottom, #3bc1f9, #6082ff);
    box-shadow: 0 0 35px rgb(0 0 0 / 10%);
}

.login-42 .form-section .extra-login {
    float: left;
    width: 100%;
    text-align: center;
    position: relative;
    margin: 10px 0 35px!important;
}

.login-42 .form-section .extra-login::before {
    position: absolute;
    left: 0;
    top: 10px;
    width: 100%;
    height: 1px;
    background: #e4e4e442;
    content: "";
}

.login-42 .form-section .extra-login > span {
    width: auto;
    float: none;
    display: inline-block;
    padding: 1px 20px;
    z-index: 1;
    position: relative;
    font-size: 14px;
    color: #fff;
    text-transform: capitalize;
    background: #5594fd;
}

.login-42 .form-section p {
    color: #fff;
    margin-bottom: 0;
    font-size: 16px;
}

.login-42 .form-section p a {
    color: #fff;
}

.login-42 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-42 .form-section .thembo {
    margin-left: 4px;
}

.login-42 .form-section h3 {
    margin: 0 0 35px;
    font-size: 25px;
    font-weight: 400;
    color: #fff;
}

.login-42 input::placeholder{
    color: #fff;
}

.login-42 .form-section .form-group {
    margin-bottom: 25px;
}

.login-42 .form-section .form-box {
    float: left;
    width: 100%;
    text-align: left;
    position: relative;
}

.login-42 .form-section .checkbox{
    margin: 10px 0 35px;
}

.login-42 .form-section .form-control {
    padding: 14.5px 0;
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #424242;
    font-weight: 500;
    border-radius: 0;
    border: none;
    border-bottom: solid 2px #fff;
}

.login-42 .form-section .form-box i {
    position: absolute;
    top: 10px;
    right: 0;
    font-size: 23px;
    color: #fff;
}

.login-42 .form-section .checkbox .terms {
    margin-left: 3px;
}

.login-42 .form-section .terms {
    margin-left: 3px;
}

.login-42 .form-section .form-check {
    float: left;
    margin-bottom: 0;
    padding-left: 25px;
    font-size: 16px;
    color: #fff;
}

.login-42 .form-section .form-check .form-check-input {
    margin-left: -25px;
}

.login-42 .form-section .form-check a {
    color: #424242;
}

.login-42 .form-check-input:focus {
    box-shadow: none;
}

.login-42 .form-section .form-check-input {
    width: 20px;
    height: 20px;
    margin-top: 0;
    vertical-align: top;
    position: absolute;
    border: 2px solid #fff;
    border-radius: 0;
    top: 2px;
}

.login-42 .form-check-input:checked {
    background-color: #ffc626;
    border-color: #ffc626!important;
}

.login-42 .form-section a.forgot-password {
    font-size: 16px;
    color: #fff;
}

.login-42 .logo img {
    margin-bottom: 15px;
    height: 30px;
}

.login-42 .btn-theme {
    position: relative;
    display: inline-block;
    width: 100%;
    color: #000;
    overflow: hidden;
    overflow: hidden;
    text-transform: capitalize;
    display: inline-block;
    transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    cursor: pointer;
    font-size: 17px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    border: none;
}

.login-42 .btn-theme:hover {
    color: #fff;
}

.login-42 .btn-theme:hover::before {
    left: 0%;
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
}

.login-42 .btn-theme:before {
    position: absolute;
    content: '';
    left: 96%;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 1;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
    transform: skewX(-25deg);
}

.login-42 .btn-theme span {
    position: relative;
    z-index: 1;
}

.login-42 .btn-check:focus+.btn, .btn:focus {
    outline: 0;
    box-shadow: none;
}

.login-42 .btn-lg{
    padding: 0 50px;
    line-height: 55px;
}

.login-42 .btn-md{
    padding: 0 45px;
    line-height: 50px;
}

.login-42 .btn{
    box-shadow: none!important;
}

.login-42 .btn-primary {
    background: #ffffff;
}

.login-42 .btn-theme:before {
    background: #ffc626;
}

.login-42 .form-section ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}

.login-42 .mb-35{
    margin-bottom: 35px!important;
}

/** Social list **/
.login-42 .social-list{
    margin-bottom: 30px;
}

.login-42 .social-list .buttons {
    display: flex;
    justify-content: center;
}

.login-42 .social-list a {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 3px 5px;
    font-size: 20px;
    overflow: hidden;
    background: #fff;
    position: relative;
    transition: transform 0.2s linear 0s, border-radius 0.2s linear 0.2s;
}

.login-42 .social-list a i {
    transition: transform 0.2s linear 0s;
    position: relative;
    z-index: 3;
}

.login-42 .social-list a:hover {
    transform: rotate(-90deg);
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
}

.login-42 .social-list a:hover i {
    transform: rotate(90deg);
}

.login-42 .social-list a.facebook-bg {
    color: #4867aa;
}

.login-42 .social-list a.twitter-bg {
    color: #33CCFF;
}

.login-42 .social-list a.google-bg {
    color: #db4437;
}

.login-42 .social-list a.dribbble-bg {
    color: #2392e0;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-42 .form-inner {
        padding: 50px;
    }
}

@media (max-width: 768px) {
    .login-42 .form-inner {
        padding: 40px 30px;
    }
}
/** Login 42 end **/

/** Login 43 start **/
.login-43{
    background: url(../img/img-43.jpg) top left repeat;
    background-size: cover;
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
}

.login-43 .container{
    max-width: 1000px;
    margin: 0 auto;
}

.login-43 a {
    text-decoration: none;
}

.login-43 .login-inner-form {
    color: #cccccc;
    position: relative;
}

.login-43 .form-check-input:checked {
    display: none;
}

.login-43 .bg-color-8 {
    justify-content: center;
    align-items: center;
    padding: 100px;
    background: #fff;
}

.login-43 .form-box{
    width: 100%;
    text-align: center;
}

.login-43 .login-inner-form .form-group {
    margin-bottom: 25px;
}

.login-43 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-43 .login-inner-form .form-control {
    font-size: 16px;
    outline: none;
    color: #424242;
    border-radius: 3px;
    border: 1px solid transparent;
    background: #eceaea;
    padding: 14.5px 45px 14.5px 20px;
}

.login-43 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-43 .login-inner-form .form-box i {
    position: absolute;
    top: 12px;
    right: 20px;
    font-size: 20px;
    color: #424242;
}

.login-43 .login-inner-form label{
    font-size: 14px;
    margin-bottom: 5px;
}

.login-43 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
    color: #424242;
    font-size: 15px;
    float: right;
}

.login-43 .bg-img {
    background: url(../img/img-100.jpg) top left repeat;
    background-size: cover;
    top: 0;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    position: relative;
    display: flex;
}

.login-43 .login-box {
    background: #fff;
    margin: 0 auto;
    box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
    border-radius: 0 30px 30px 0;
}

.login-43 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #6366e8;
}

.login-43 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 3px;
    text-transform: uppercase;
}

.login-43 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-43 .login-inner-form p{
    margin: 0;
    color: #424242;
}

.login-43 .login-inner-form p a{
    color: #424242;
}

.login-43 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-43 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-43 .login-inner-form .btn-theme {
    background: #6366e8;
    border: none;
    color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.login-43 .login-inner-form .btn-theme:hover {
    background: #5356d4;
}

.login-43 .logo{
    height: 30px;
    top: 25px;
    left: 25px;
    position: absolute;
}

.login-43 .logo img{
    height: 25px;
}

.login-43 .logo-2{
    margin-bottom: 15px;
    display: none;
}

.login-43 .logo-2 img{
    height: 30px;
}

.login-43 .nav-pills li{
    display: inline-block;
}

.login-43 .login-inner-form .checkbox {
    margin-bottom: 25px;
    font-size: 14px;
}

.login-43 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-43 .login-inner-form .form-check a {
    color: #d6d6d6;
    float: right;
}

.login-43 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-43 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 2px;
    margin-left: -25px;
    border: none;
    border-radius: 3px;
    background: #eceaea;
}

.login-43 .login-inner-form .form-check-label {
    padding-left: 25px;
    margin-bottom: 0;
    font-size: 16px;
    color: #424242;
}

.login-43 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #e6e6e6;
    line-height: 17px;
    font-size: 14px;
    content: "\2713";
}

.login-43 .btn-section{
    float: right;
    display: inline-block;
}

.login-43 .btn-section {
    top: 30px;
    position: absolute;
    right: 25px;
    font-family: 'Jost', sans-serif;
    margin-bottom: 0;
}

.login-43 .btn-section .link-btn {
    font-size: 15px;
    text-align: center;
    color: #6366e8;
    padding: 7px 18px;
    text-decoration: none;
    text-decoration: blink;
    border-radius: 3px;
    background: #fff;
}

.login-43 .btn-section .link-btn:hover{
    background: #6366e8;
    color: #fff;
}

.login-43 .btn-section .link-btn.active{
    background: #6366e8;
    color: #fff;
}

.login-43 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-43 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #424242;
    float: right;
    margin-left: 3px;
}

.login-43 .text {
    display: none;
}

.login-43 .form-section{
    text-align: center;
}

.login-43 .form-section h3{
    font-size: 25px;
    margin-bottom: 30px;
    font-weight: 400;
    color: #121212;
}

.login-43 .form-section .text {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 0;
    color: #424242;
}

.login-43 .form-section .text a{
    color: #424242;
}

.login-43 .social-list{
    bottom: 30px;
    position: absolute;
    left: 25px;
    list-style: none;
}

.login-43 .social-list a{
    width: 40px;
    height: 40px;
    line-height: 35px;
    font-size: 15px;
    position: relative;
    margin: 0 8px;
    text-align: center;
    display: inline-block;
    color: #fff;
}

.login-43 .social-list a i,
.login-43 .social-list a span{
    position: relative;
    top: 2px;
    left: 1px;
}

.login-43 .social-list a:before{
    content: "";
    display: inline-block;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    border: 1px solid #fff;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.login-43 .social-list a:hover{
    color: #fff;
}

.login-43 .social-list a:hover:before{
    background: #6366e8;
    border: 1px solid #6366e8;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-43 .none-992{
        display: none;
    }

    .login-43 .form-section h3{
        font-size: 23px;
    }

    .login-43 .logo-2{
        display: block;
    }

    .login-43 .text {
        display: block;
    }

    .login-43 .bg-color-8{
        padding: 60px;
    }

    .login-43 .login-box {
        max-width: 550px;
        margin: 0 auto;
    }
}

/** MEDIA **/
@media (max-width: 768px) {
    .login-43 .bg-color-8{
        padding: 50px 30px;
    }
}
/** Login 43 end **/

/** Login 44 start **/
.login-44 .bg-img{
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    align-items: center;
    padding: 30px 100px;
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
    overflow: hidden;
}

.login-44 a {
    text-decoration: none;
}

.login-44 .form-check-input:checked {
    display: none;
}

.login-44 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-44 .form-section{
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 999;
    opacity: 1;
    position: relative;
    display: flex;
    align-items: center;
    padding: 30px 60px;
}

.login-inner-form{
    width: 100%;
}

.login-44 .login-inner-form .forgot{
    line-height: 50px;
    float: right;
    color: #535353;
    font-size: 16px;
}

.login-44 .login-inner-form p{
    color: #535353;
    margin-bottom: 0;
    font-size: 16px;
}

.login-44 .login-inner-form p a{
    color: #535353;
}

.login-44 .login-inner-form .thembo{
    margin-left: 4px;
}

.login-44 .login-inner-form h3 {
    margin: 0 0 50px;
    font-size: 30px;
    font-weight: 400;
    color: #040404;
}

.login-44 .login-inner-form .form-group {
    margin-bottom: 40px;
}

.login-44 .login-inner-form .form-control {
    width: 100%;
    padding: 0 0 10px;
    font-size: 16px;
    font-weight: 400;
    background: transparent;
    border: none;
    border-bottom: solid 2px #535353;
    outline: none;
    color: #535353;
    border-radius: 0;
}

.login-44 .login-inner-form input::placeholder{
    color: #535353;
}

.login-44 .login-inner-form .btn-md {
    cursor: pointer;
    padding: 13px 50px 12px 50px;
    font-size: 17px;
    font-weight: 400;
    height: 50px;
}

.login-44 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-44 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-44 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-44 .login-inner-form .btn-theme {
    background: #fff;
    border: none;
    color: #ff0000;
    box-shadow: 0 0 35px rgb(0 0 0 / 10%);
    border-radius: 5px;
    float: left;
}

.login-44 .login-inner-form .btn-theme:hover {
    background: #ff0000!important;
    color: #fff!important;
}

.login-44 .btn-theme {
    border-radius: 5px;
    padding: 12px 50px 11px 50px;
    color: #fff;
    border: solid 2px #fff;
    font-size: 17px;
    font-family: 'Jost', sans-serif;
    font-weight: 400;
    float: right;
    margin-right: 5px;
}

.login-44 .btn-theme:hover{
    color: #ff0000;
    background: #fff;
    text-decoration: none;
}

.login-44 .informeson{
    max-width: 750px;
    margin-left: auto;
    text-align: right;
}

.login-44 .informeson h2{
    font-size: 50px;
    font-weight: 600;
    margin-bottom: 30px;
    color: #fff;
}

.login-44 .informeson p{
    margin-bottom: 40px;
    font-size: 15px;
    line-height: 25px;
    color: #dfdfdf;
}

.login-44 .social-box ul{
    margin: 0;
    padding: 0;
}

.login-44 .social-box{
    bottom: 30px;
    position: absolute;
    right: 100px;
}

.login-44 .social-list {
    padding: 0;
    text-align: center;
}

.login-44 .social-list li {
    display: inline-block;
}

.login-44 .social-list li a {
    margin: 1px;
    font-size: 14px;
    font-weight: 500;
    width: 110px;
    height: 40px;
    line-height: 40px;
    border-radius: 0;
    display: inline-block;
    text-align: center;
    color: #fff;
}

.login-44 .social-list li a:hover {
    text-decoration: none;
}

.login-44 .social-list li a i{
    margin-right: 5px;
}

.login-44 .facebook-bg {
    background: #4867aa;
}

.login-44 .facebook-bg:hover {
    background: #3d5996;
    color: #fff;
}

.login-44 .twitter-bg {
    background: #33CCFF;
}

.login-44 .twitter-bg:hover {
    background: #56d7fe;
}

.login-44 .google-bg {
    background: #db4437;
}

.login-44 .google-bg:hover {
    background: #dc4e41;
}

.login-44 .logo{
    top: 30px;
    position: absolute;
    right: 100px;
}

.login-44 .logo img{
    height: 30px;
}

.login-44 .logo-2 {
    display: none;
    margin-bottom: 15px;
}

.login-44 .logo-2 img{
    height: 30px;
}

/** MEDIA **/
@media (max-width: 1200px) {
    .login-44 .bg-img {
        padding: 30px 30px;
    }

    .login-44 .informeson h2 {
        font-size: 40px;
    }

    .login-44 .logo {
        right: 30px;
    }

    .login-44 .social-box {
        right: 30px;
    }

    .login-44 .login-inner-form h3 {
        font-size: 25px;
    }
}

@media (max-width: 992px) {
    .login-44 .bg-img{
        display: none;
    }

    .login-44 .login-inner-form h3 {
        margin: 0 0 40px;
    }

    .login-44 .login-inner-form{
        max-width: 450px;
        margin:  0 auto;
    }

    .login-44 .form-section {
        padding: 30px 15px;
    }

    .login-44 .logo-2 {
        display: inherit;
        margin-bottom: 20px;
    }
}
/** Login 44 end **/

/** Login 45 start **/
.login-45{
    top: 0;
    width: 100%;
    bottom: 0;
    opacity: 1;
    z-index: 999;
    min-height: 100vh;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0;
    background: #efefef;
}

.login-45:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    width: 50%;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 30px 15px;
    background: #fff;
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
}

.login-45 .container{
    max-width: 1120px;
    margin: 0 auto;
}

.login-45 a {
    text-decoration: none;
}

.login-45 h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: 'Jost', sans-serif;
}

.login-45 .info{
    top: 35%;
    max-width: 400px;
    margin:0 auto;
}

.login-45 .waviy .color-yellow{
    color: #ff0000;
}

.login-45 .waviy {
    position: relative;
}

.login-45 .waviy span {
    position: relative;
    display: inline-block;
    font-size: 35px;
    color: #000;
    text-transform: uppercase;
    animation: flip 2s infinite;
    font-weight: 700;
    margin-bottom: 15px;
    animation-delay: calc(.2s * var(--i))
}

@keyframes flip {
    0%,80% {
        transform: rotateY(360deg)
    }
}

.login-45 p{
    margin-bottom: 25px;
    font-size: 15px;
}

.login-45 .form-check-input:checked {
    display: none;
}

.login-45 .form-info {
    justify-content: center;
    align-items: center;
    padding: 100px 90px;
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
}

.login-45 .login-inner-form .form-group {
    margin-bottom: 40px;
}

.login-45 .login-inner-form .form-box {
    float: left;
    width: 100%;
    position: relative;
}

.login-45 .login-inner-form .form-control {
    padding: 0 0 15px;
    font-size: 16px;
    outline: none;
    background: transparent!important;
    color: #e9e8e8;
    font-weight: 500;
    border-radius: 0;
    border: none;
    border-bottom: solid 2px #e9e8e8;
}

.login-45 .login-inner-form input::placeholder{
    color: #e9e8e8;
}


.login-45 .login-inner-form img {
    margin-bottom: 5px;
    height: 40px;
}

.login-45 .login-inner-form .form-box i {
    position: absolute;
    top: 0px;
    right: 0;
    font-size: 20px;
    color: #e9e8e8;
}

.login-45 .login-inner-form .forgot{
    margin: 0;
    line-height: 45px;
}

.login-45 .bg-img {
    top: 0;
    bottom: 0;
    opacity: 1;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    border-right: solid 1px #e7e7e7;
}

.login-45 .login-box {
    background: #fff;
    margin: 0 auto;
    position: relative;
    z-index: 0;
}

.login-45 .login-inner-form .checkbox-theme input[type="checkbox"]:checked + label::before {
    color: #fff;
    background: #ff0000;
    border: solid 1px #ff0000;
}

.login-45 .login-inner-form .btn-md {
    cursor: pointer;
    height: 55px;
    color: #fff;
    padding: 13px 50px 12px 50px;
    font-size: 15px;
    font-weight: 400;
    font-family: 'Jost', sans-serif;
    border-radius: 100px;
    text-transform: uppercase;
}

.login-45 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-right: 3px;
}

.login-45 .login-inner-form p{
    margin: 0;
    color: #e9e8e8;
}

.login-45 .login-inner-form p a{
    color: #e9e8e8;
}

.login-45 .login-inner-form button:focus {
    outline: none;
    outline: 0 auto -webkit-focus-ring-color;
}

.login-45 .login-inner-form .btn-theme.focus, .btn-theme:focus {
    box-shadow: none;
}

.login-45 .login-inner-form .btn-theme {
    background: #ff0000;
    border: none;
    color: #fff;
}

.login-45 .login-inner-form .btn-theme:hover {
    background: #eb0707;
}

.login-45 .logo img{
    margin-bottom: 15px;
    height: 30px;
}

.login-45 .nav-pills li{
    display: inline-block;
}

.login-45 .login-inner-form .form-check{
    float: left;
    margin-bottom: 0;
    padding-left: 0;
}

.login-45 .login-inner-form .form-check a {
    color: #e9e8e8;
    float: right;
}

.login-45 .login-inner-form .form-check-input {
    position: absolute;
    margin-left: 0;
}

.login-45 .login-inner-form .form-check label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 20px;
    height: 20px;
    top: 1px;
    margin-left: -22px;
    border-radius: 0;
    background: #fff;
    border: 1px solid #d9d9d9;
}

.login-45 .login-inner-form .form-check-label {
    padding-left: 20px;
    margin-bottom: 0;
    font-size: 16px;
    color: #e9e8e8;
}

.login-45 .form-section input[type=checkbox]:checked + label:before {
    font-weight: 600;
    color: #e6e6e6;
    line-height: 18px;
    font-size: 12px;
    content: "\2713";
}

.login-45 .login-inner-form input[type=checkbox], input[type=radio] {
    margin-top: 4px;
}

.login-45 .login-inner-form .checkbox a {
    font-size: 16px;
    color: #e9e8e8;
    float: right;
    margin-left: 3px;
}

.login-45 .form-section{
    text-align: center;
}

.login-45 .form-section h3{
    font-size: 25px;
    margin-bottom: 40px;
    font-weight: 400;
    color: #fff;
}

.login-45 .form-section .text {
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 0;
    color: #e9e8e8;
}

.login-45 .form-section .text a{
    color: #e9e8e8;
}

/** Social buttons start **/
.login-45 .social-list .buttons {
    display: flex;
}

.login-45 .social-list a {
    text-decoration: none !important;
    color: #fff;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    margin:0 2px 5px;
    font-size: 20px;
    overflow: hidden;
    position: relative;
}

.login-45 .social-list a {
    transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
}

.login-45 .social-list a:hover {
    border-radius: 50%;
}

.login-45 .social-list a i {
    position: relative;
    z-index: 3;
}

.login-45 .social-list a.facebook-bg {
    background: #4867aa;
}

.login-45 .social-list a.twitter-bg {
    background: #33CCFF;
}

.login-45 .social-list a.google-bg {
    background: #db4437;
}

.login-45 .social-list a.dribbble-bg {
    background: #2392e0;
}

/** MEDIA **/
@media (max-width: 992px) {
    .login-45 .bg-img{
        display: none;
    }

    .login-45 .form-info{
        padding: 50px 30px;
    }

    .login-45 .login-box{
        max-width: 600px;
        margin: 0 auto;
    }


    .login-45:before {
        background: #efefef;
    }
}
/** Login 45 end **/













    </style>


@stop