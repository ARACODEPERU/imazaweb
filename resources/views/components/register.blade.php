<section class="registration-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%">
    <div class="registration-one__bg"
        style="background-image: url('{{ asset('storage/'.$register[6]->content) }}');">
    </div>
    <div class="container">
        <div class="row">
            <!--Start Registration One Left-->
            <div class="col-xl-7 col-lg-7">
                <div class="registration-one__left">
                    <div class="section-title">
                        <span class="section-title__tagline">{{ $register[0]->content }}</span>
                        <h2 class="section-title__title">
                            {{ $register[1]->content }}
                        </h2>
                    </div>
                    <p class="registration-one__left-text">
                        {{ $register[2]->content }}
                    </p>
                    <div class="registration-one__left-transform-box">
                        <div class="registration-one__left-transform-box-icon">
                            <span class="icon-online-course"></span>
                        </div>
                        <div class="registration-one__left-transform-box-text">
                            <h3><a href="#">{{ $register[3]->content }}</a></h3>
                            <p>
                                {{ $register[4]->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Registration One Left-->

            <!--Start Registration One Right-->
            <div class="col-xl-5 col-lg-5">
                <div class="registration-one__right wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="registration-one__right-form">
                        <div class="title-box">
                            <h4>{{ $register[5]->content }}</h4>
                        </div>
                        <div class="form-box">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Nombres" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="app" placeholder="Ap. Paterno" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="apm" placeholder="Ap. Materno" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="dni" placeholder="DNI" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Teléfono" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                </div>
                                <button class="registration-one__right-form-btn" type="submit" name="submit-form" style="margin-top: 10px;">
                                    <span class="thm-btn">Registrar</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Registration One Right-->
        </div>
    </div>
</section>
