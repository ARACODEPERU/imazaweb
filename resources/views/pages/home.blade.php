@extends('layouts.webpage')

@section('content')
    {{-- <x-home.slider /> --}}

    <section style="padding: 60px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 60px; text-align:center; color: #2D8CFF;">
                        "Eleva la experiencia de tus clientes y haz crecer tu negocio con <b style="color: #c843be; font-weight: 900;">Despega Chat y el poder de la IA"</b>
                    </h1>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="about-one__btn" style="margin-top: 0px;">
                        <a href="https://app.marketingdespega.com/user/login" class="thm-btn">Comienza Gratis</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="categories-one__btn" style="margin-top: 0px;">
                        <a href="https://calendly.com/despegachat" class="thm-btn-2">Agenda una Demo</a>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('themes/imazaweb/images/portadaweb.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--Features One Start-->
    <x-features />
    <!--Features One End-->

    <section style="padding: 20px 0px 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        Descubre la fórmula para vender más en WhatsApp
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/chateabots.png') }}" alt="">
                    <div style="height: 10px; background-color: #c843be;  margin-bottom: 10px;"></div>
                    <h3>Chatea</h3>
                    <p>Nuestros bots humanizados atienden a tus clientes 24/7.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/remarketing.png') }}" alt="">
                    <div style="height: 10px; background-color: #c843be;  margin-bottom: 10px;"></div>
                    <h3>Prospecta</h3>
                    <p>Campañas de remarketing a todos tus clientes sin riesgos de bloqueo.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/automatiza.png') }}" alt="">
                    <div style="height: 10px; background-color: #c843be;  margin-bottom: 10px;"></div>
                    <h3>Automatiza</h3>
                    <p>Nuestros bots humanizados responden a tus clientes 24/7 con la precisión que necesitan.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/vende.png') }}" alt="">
                    <div style="height: 10px; background-color: #c843be;  margin-bottom: 10px;"></div>
                    <h3>Vende</h3>
                    <p>Cierra más negocios y lleva a tu empresa a un nivel más alto.</p>
                </div>
            </div>
        </div>
    </section>

    
    {{-- <section style="padding: 20px 0px 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        Descubre la fórmula para vender más en WhatsApp
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/chateabots.png') }}" alt="">
                    <div style="height: 10px; background-color: #ac8dd4; margin-bottom: 10px;"></div>
                    <h3>Chatea</h3>
                    <p>Nuestros bots humanizados atienden a tus clientes 24/7.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/remarketing.png') }}" alt="">
                    <div style="height: 10px; background-color: #a573e7; margin-bottom: 10px;"></div>
                    <h3>Prospecta</h3>
                    <p>Campañas de remarketing a todos tus clientes sin riesgos de bloqueo.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/automatiza.png') }}" alt="">
                    <div style="height: 10px; background-color: #9254e4; margin-bottom: 10px;"></div>
                    <h3>Automatiza</h3>
                    <p>Nuestros bots humanizados responden a tus clientes 24/7 con la precisión que necesitan.</p>
                </div>
                <div class="col-md-3" style="text-align: center;">
                    <img style="width: 100%;" src="{{ asset('themes/imazaweb/images/vende.png') }}" alt="">
                    <div style="height: 10px; background-color: #680de0; margin-bottom: 10px;"></div>
                    <h3>Vende</h3>
                    <p>Cierra más negocios y lleva a tu empresa a un nivel más alto.</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section style="padding: 140px 0px; background: #f8f8f8;">
        <div class="auto-container" style="">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        Funciones exclusivas para tu WhatsApp.
                    </h1>
                    <p style="text-align:center;">
                        Disfruta del poder de la automatización y la inteligencia artificial
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern">
                            <img src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}" alt="" />
                        </div>
                        <div class="shape1">
                            <img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" 
                                             style="padding: 25px; height: 250px; border: 4px solid #c843be; border-radius: 20px;">
                                            <h3>Automatización intuitiva:</h3>
                                            <p>
                                                Diseña chatbots inteligentes con solo unos clics sin necesidad de ser un experto en programación.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 250px; border: 4px solid #c843be; border-radius: 20px;">
                                            <h3>
                                                Integración de tu página web y redes sociales: 
                                            </h3>
                                            <p>
                                                Mejora la experiencia de usuario en tu sitio web y redes sociales con atención al instante.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 250px; border: 4px solid #c843be; border-radius: 20px;">
                                            <h3>
                                                Sin restricciones en tus comunicaciones:
                                            </h3>
                                            <p>
                                                A diferencia de otros, nuestros planes no se establecen por cantidad de contactos mensuales.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-one clearfix" style="padding: 140px 0px;">
        <div class="auto-container" style="height: 450px;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h1 style="font-size: 50px; text-align:center; color: #fff;">
                            Características generales de <br>
                            Despega Chat
                        </h1>
                        <br>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern">
                            <img src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}" alt="" />
                        </div>
                        <div class="shape1">
                            <img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" 
                                             style="padding: 25px; height: 200px; border: 4px solid #c843be; border-radius: 20px;">
                                            <p style="font-size: 20px;">
                                                Conecta Messenger, Instagram, WhatsApp Business y WhatsApp Api, Web site, Telegram, Email y otros.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 200px; border: 4px solid #c843be; border-radius: 20px;">
                                            <p style="font-size: 20px;">
                                                Gestiona múltiples cuentas de WhatsApp desde un solo panel.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 200px; border: 4px solid #c843be; border-radius: 20px;">
                                            <p style="font-size: 20px;">
                                                Organiza tus chats según el estado en tu proceso de venta.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 200px; border: 4px solid #c843be; border-radius: 20px;">
                                            <p style="font-size: 20px;">
                                                Entrena a la IA para conocer tus productos, responder con imágenes, audios, documentos y brindar asesoría 24/7.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 200px; border: 4px solid #c843be; border-radius: 20px;">
                                            <p style="font-size: 20px;">
                                                Organiza tus chats por niveles de urgencia.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 200px; border: 4px solid #c843be; border-radius: 20px;">
                                            <p style="font-size: 20px;">
                                                Segmenta tu audiencia para campañas masivas más efectivas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px;">
        <div class="auto-container" style="">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center; color: #5b5a5a;">
                        <b style="color: #c843be;">Con DESPEGA CHAT,</b>
                        podrás crear tu propio asistente virtual con inteligencia artificial en tan solo unos clics.
                    </h1>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-one__wrapper">
                        <div class="testimonials-one__pattern">
                            <img src="{{ URL('themes/imazaweb/images/pattern/testimonials-one-left-pattern.png') }}" alt="" />
                        </div>
                        <div class="shape1">
                            <img src="{{ URL('themes/imazaweb/images/shapes/thm-shape3.png') }}" alt="" />
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="testimonials-one__carousel owl-carousel owl-theme owl-dot-type1">
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="0ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner" 
                                             style="padding: 25px; height: 150px; border: 4px solid #2d8cff; border-radius: 20px;">
                                            <p style="line-height: 25px;">
                                                Comprende y responde a los mensajes de audio de tus clientes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="100ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 150px; border: 4px solid #2d8cff; border-radius: 20px;">
                                            <p style="line-height: 25px;">
                                                Humaniza tu atención.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonials-one__single wow fadeInUp" data-wow-delay="200ms"
                                        data-wow-duration="1500ms">
                                        <div class="testimonials-one__single-inner"
                                             style="padding: 25px; height: 150px; border: 4px solid #2d8cff; border-radius: 20px;">
                                            <p style="line-height: 25px;">
                                                Nuestra IA espera al cliente finalizar con el envío de todos sus mensajes para entender su idea y luego responde con naturalidad.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h4 style="color: #c843be;   text-align:center">
                                    Es decir, interactúa contigo de forma natural, entendiendo tanto tus palabras como tus imágenes.
                                </h4>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #cdcccc;">
        <div class="container">
            <div class="row box-zoom"  style="background: #fff;">
                <div class="col-md-4">
                    <br><br>
                    <h1 style="font-size: 30px;">
                        LA AUTOMATIZACIÓN HA LLEGADO PARA QUEDARSE
                    </h1>
                    <br>
                    <p>
                        <b>
                            Atiende a cientos de clientes simultáneamente con la agilidad de la inteligencia artificial.
                        </b>
                        <br> 
                        Nuestra tecnología te permite crear tu chatbot en minutos y crear experiencias únicas para tus clientes.
                    </p>
                </div>
                <div class="col-md-8" style="text-align:center;">
                    <br>
                    <img style="width: 99%; padding: 10px;" src="{{ asset('themes/imazaweb/images/automatizacion.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 35px;">
                        INTEGRACIONES VIA API Y WEBHOOK
                    </h1>
                    <br>
                    <p>
                        <b>
                            Integra tu WhatsApp con otras plataformas.
                        </b>
                        <br> 
                        Mediante la integración de sistemas CRM, hojas de cálculo y otras fuentes de datos, 
                        se puede lograr una atención al cliente omnicanal y altamente segmentada.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/integracion.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #cdcccc;"">
        <div class="container">
            <div class="row box-zoom"   style="background: #fff;">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        PLANIFICA TUS COMUNICACIONES CON ANTICIPACIÓN
                    </h1>
                    <br>
                    <p>
                        Programa mensajes personalizados para enviarlos automáticamente a tus 
                        clientes o grupos de WhatsApp. Ideal para recordatorios de citas, reuniones o lanzamientos.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    
    <section style="padding: 140px 0px;">
        <div class="auto-container" style="">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="font-size: 50px; text-align:center;">
                        PLANES RAZONABLES Y FLEXIBLES
                    </h1>
                    <p style="text-align:center;">
                        Planes que se adaptan a las necesidades de pequeñas, medianas y grandes empresas.
                    </p>
                </div>
            </div>
            <br>

            <div class="sky-tabs sky-tabs-pos-top-center sky-tabs-anim-flip sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked="" id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><b>MENSUAL</b></span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><b>ANUAL</b></span></span></label>
				
				<ul  style="background: #c3c3c3; border-radius: 20px;">
					<li class="sky-tab-content-1">					
						<div class="container">
                            <div class="row">
                                <div class="col-md-4" style="padding: 10px 20px;">
                                    <div class="box-plane-blue box-zoom">
                                        <div class="plane-body">
                                            <h2 class="plane-title">STANDARD</h2>
                                            <p class="plane-price">$59</p>
                                            <br>
                                            <ul class="box-plane-ul">
                                                <li>CRM multicuenta</li>
                                                <li>1 usuario</li>
                                                <li>Hasta 5 cuentas WhatsApp</li>
                                                <li>Chatbot con y sin IA</li>
                                                <li>Flujos de trabajo</li>
                                                <li>Disparos masivos de remarketing</li>
                                                <li>Importar y exportar datos</li>
                                                <li>Embudos de venta (etiquetas)</li>
                                                <li>Soporte por WhatsApp</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="about-one__btn" style="margin-top: 0px;">
                                            <a href="" class="thm-btn">Comenzar ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding: 10px 20px;">
                                    <div class="box-plane-more box-zoom">
                                        <div class="plane-body">
                                            <h2 class="plane-title">PROFESIONAL</h2>
                                            <p class="plane-price">$89</p>
                                            <br>
                                            <ul class="box-plane-ul">
                                                <li>Todo el Plan Standard +</li>
                                                {{-- <li>IA que entiende audios para brindar respuestas adecuadas</li> --}}
                                                <li>Conexion a Facebook e Instagram</li>
                                                <li>Conexión vía WEBHOOK y/o API GET a otras plataformas</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="about-one__btn" style="margin-top: 0px;">
                                            <a href="" class="thm-btn">Comenzar ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding: 10px 20px;">
                                    <div class="box-plane-blue box-zoom">
                                        <div class="plane-body">
                                            <h2 class="plane-title">PREMIUM</h2>
                                            <p class="plane-price-premium">(Desde $ 350)</p>
                                            <br>
                                            <p class="plane-subtitle">Funciones adicionales</p>
                                            <ul class="box-plane-ul">
                                                <li>Traslado de chats entre agentes.</li>
                                                <li>Asignación automática entre agentes.</li>
                                                <li>Mensajes de seguimiento automáticos</li>
                                            </ul>
                                            <br>
                                            <p class="plane-subtitle">Funciones personalizado</p>
                                            <ul class="box-plane-ul">
                                                <li>Identificamos el problema</li>
                                                <li>Co-creamos la automatización</li>
                                                <li>Implementamos la estrategia</li>
                                                <li>Capacitación comercial</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="about-one__btn" style="margin-top: 0px;">
                                            <a href="" class="thm-btn">Comenzar ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</li>
					
					<li class="sky-tab-content-2">					
						<div class="container">
                            <div class="row">
                                <div class="col-md-4" style="padding: 10px 20px;">
                                    <div class="box-plane-blue box-zoom">
                                        <div class="plane-body">
                                            <h2 class="plane-title">STANDARD</h2>
                                            <p class="plane-price">$45</p>
                                            <br>
                                            <ul class="box-plane-ul">
                                                <li>CRM multicuenta</li>
                                                <li>1 usuario</li>
                                                <li>Hasta 5 cuentas WhatsApp</li>
                                                <li>Chatbot con y sin IA</li>
                                                <li>Flujos de trabajo</li>
                                                <li>Disparos masivos de remarketing</li>
                                                <li>Importar y exportar datos</li>
                                                <li>Embudos de venta (etiquetas)</li>
                                                <li>Soporte por WhatsApp</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="about-one__btn" style="margin-top: 0px;">
                                            <a href="" class="thm-btn">Comenzar ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding: 10px 20px;">
                                    <div class="box-plane-more box-zoom">
                                        <div class="plane-body">
                                            <h2 class="plane-title">PROFESIONAL</h2>
                                            <p class="plane-price">$65</p>
                                            <br>
                                            <ul class="box-plane-ul">
                                                <li>Todo el Plan Standard +</li>
                                                {{-- <li>IA que entiende audios para brindar respuestas adecuadas</li> --}}
                                                <li>Conexion a Facebook e Instagram</li>
                                                <li>Conexión vía WEBHOOK y/o API GET a otras plataformas</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="about-one__btn" style="margin-top: 0px;">
                                            <a href="" class="thm-btn">Comenzar ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding: 10px 20px;">
                                    <div class="box-plane-blue box-zoom">
                                        <div class="plane-body">
                                            <h2 class="plane-title">PREMIUM</h2>
                                            <p class="plane-price-premium">(Desde $350)</p>
                                            <br>
                                            <p class="plane-subtitle">Funciones adicionales</p>
                                            <ul class="box-plane-ul">
                                                <li>Traslado de chats entre agentes.</li>
                                                <li>Asignación automática entre agentes.</li>
                                                <li>Mensajes de seguimiento automáticos</li>
                                            </ul>
                                            <br>
                                            <p class="plane-subtitle">Funciones personalizado</p>
                                            <ul class="box-plane-ul">
                                                <li>Identificamos el problema</li>
                                                <li>Co-creamos la automatización</li>
                                                <li>Implementamos la estrategia</li>
                                                <li>Capacitación comercial</li>
                                            </ul>
                                        </div>
                                        <br>
                                        <div class="about-one__btn" style="margin-top: 0px;">
                                            <a href="" class="thm-btn">Comenzar ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</li>
				</ul>
			</div>

            {{-- <div class="row">
                <div class="col-md-4">
                    <div class="box-plane-blue box-zoom">
                        <div class="plane-body">
                            <h2 class="plane-title">STANDARD</h2>
                            <p class="plane-price">$59/mes</p>
                            <p class="plane-subtitle">$45/Anual</p>
                            <ul class="box-plane-ul">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> CRM multicuenta</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> 1 usuario</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Hasta 5 cuentas WhatsApp</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Chatbot con y sin IA</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Flujos de trabajo</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Disparos masivos de remarketing</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Importar y exportar datos</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Embudos de venta (etiquetas)</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Soporte por WhatsApp</li>
                            </ul>
                        </div>
                        <br>
                        <div class="about-one__btn" style="margin-top: 0px;">
                            <a href="" class="thm-btn">Comenzar ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-plane-more box-zoom">
                        <div class="plane-body">
                            <h2 class="plane-title">PROFESIONAL</h2>
                            <p class="plane-price">$89/mes</p>
                            <p class="plane-subtitle">$65/Anual</p>
                            <ul class="box-plane-ul">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Todo el Plan Standard +</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> IA que entiende audios para brindar respuestas adecuadas</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Conexion a Facebook e Instagram</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Conexión vía WEBHOOK y/o API GET a otras plataformas</li>
                            </ul>
                        </div>
                        <br>
                        <div class="about-one__btn" style="margin-top: 0px;">
                            <a href="" class="thm-btn">Comenzar ahora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-plane-blue box-zoom">
                        <div class="plane-body">
                            <h2 class="plane-title">PREMIUM</h2>
                            <p class="plane-price">(Desde $ 350)</p>
                            <p class="plane-subtitle">Funciones adicionales</p>
                            <ul class="box-plane-ul">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Traslado de chats entre agentes.</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Asignación automática entre agentes.</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Mensajes de seguimiento automáticos</li>
                            </ul>
                            <br>
                            <p class="plane-subtitle">Funciones personalizado</p>
                            <ul class="box-plane-ul">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Identificamos el problema</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Co-creamos la automatización</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Implementamos la estrategia</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Capacitación comercial</li>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="about-one__btn" style="margin-top: 0px;">
                            <a href="" class="thm-btn">Comenzar ahora</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <br>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align:center; font-sixe: 12px;">
                        <b style="color: #c843be;">PARA EL PLAN PREMIUM:</b> En el primer mes, capacitamos a tu equipo para dominar la automatización. 
                        A partir del segundo mes, disfruta del servicio por solo <b>$139</b>, o si prefieres, 
                        nosotros nos encargamos de todo por ti cada mes.
                        ¡Tú decides!
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Cuáles son las diferencias entre los planes Standard, Professional y Premium?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                        <b> Standard:</b> Ideal para iniciar tu proceso de automatización. 
                                            Configura fácilmente las funciones y empieza a optimizar tu atención al cliente.
                                        </li>
                                        <li>
                                            <b>Professional:</b> Lleva la automatización al siguiente nivel con integración 
                                            de redes sociales, chat web y otros aplicativos. Todo en una sola plataforma y bajo tu control.
                                        </li>
                                        <li>
                                            <b>Premium:</b> Experimenta una automatización avanzada. Integra a tu equipo comercial 
                                            en una sola línea de WhatsApp, deriva a los clientes entre tu equipo comercial de manera automática y equitativa, 
                                            además realiza seguimientos efectivos. En el primer mes, capacitamos a tu equipo para dominar la automatización. 
                                            Desde el segundo mes, disfruta del servicio por $139 o déjalo en nuestras manos. ¡Tú decides!
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Necesito conocimientos técnicos para configurar el chatbot?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Crear chatbots de atención automática 24/7 nunca fue tan fácil. No necesitas saber programar; hemos 
                                    diseñado todo para que sea simple y accesible para ti.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Puedo conectar múltiples cuentas de WhatsApp?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sí, en los planes Standard y Professional puedes hacerlo. En el plan Premium, no es necesario, ya que todos 
                                    tus agentes se conectan a la línea de WhatsApp de tu empresa, lo que te permite mantener un control total 
                                    y auditar cada interacción fácilmente.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Los planes tienen restricciones por cantidad de contactos?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, ninguna restricción.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Qué soporte ofrecen durante y después de la implementación?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nuestra IA está diseñada para ofrecerte soporte inmediato por WhatsApp. Si no puede resolver tu consulta, 
                                    uno de nuestros agentes estará disponible para ayudarte durante el horario de oficina. Además, 
                                    recibirás asesoría permanente sobre las buenas prácticas de comunicación en WhatsApp.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Puedo segmentar mi audiencia para campañas masivas?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sí, puedes cargar tus archivos con distintas variables para personalizar 
                                    cada mensaje en tus campañas y adaptarlos a tus clientes.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Cómo se realiza la facturación de los planes?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    De manera automática, y lo enviaremos a tu correo electrónico.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Puedo cambiar de plan más adelante?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Si, puedes migrar de plan en cualquier momento sin penalidades.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Ofrecen soluciones personalizadas para empresas grandes?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sí, con el plan Premium podemos realizar reuniones para identificar tus necesidades y 
                                    ofrecer soluciones de automatización personalizadas para tu negocio.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .box-plane-celeste {
                border: 4px solid #5298d3;/* Borde con color azul */
                border-radius: 20px;   /* Borde redondeado de 20px */
                padding: 50px 30px; /* Fondo blanco */
                text-align: center; 
            }

            .box-plane-celeste:hover {
                background: #fff;
            }
            
            .box-plane-blue {
                border: 4px solid #2D8CFF; /* Borde con color azul */
                border-radius: 20px;   /* Borde redondeado de 20px */
                padding: 50px 30px; /* Fondo blanco */
                text-align: center; 
            }
            .box-plane-blue:hover {
                background: #fff;
            }
            .box-plane-more {
                border: 4px solid #c843be;  /* Borde con color azul */
                border-radius: 20px;   /* Borde redondeado de 20px */
                padding: 50px 30px; /* Fondo blanco */
                text-align: center;   
            }
            .box-plane-more:hover {
                background: #fff;
            }
            
            .plane-body {
                height: 410px; 
            }
            .plane-title{
                text-align: center;
            }
            .plane-price{
                text-align: center;
                font-size: 45px;
                font-weight: 700;
                color: #c843be;
            }
            .plane-price-premium{
                text-align: center;
                font-size: 25px;
                font-weight: 700;
                color: #c843be;
            }
            .plane-subtitle{
                text-align: center;
                font-size: 20px;
                font-weight: 700;
            }

            .box-plane-ul{
                list-style: none; /* Elimina las viñetas */
                padding: 0;       /* Elimina el espacio por defecto */
                margin: 0;
                text-align: center;        /* Elimina márgenes adicionales */
            }
        </style>
    </section>


    {{-- <section class="pricing">
        <div class="pricing-container">
            <div class="plan">
                <h2>Básico</h2>
                <p class="price">$10/mes</p>
                <ul>
                    <li>1 Usuario</li>
                    <li>5 GB de Almacenamiento</li>
                    <li>Soporte Básico</li>
                </ul>
                <button>Elegir Plan</button>
            </div>
            <div class="plan highlighted">
                <h2>Pro</h2>
                <p class="price">$20/mes</p>
                <ul>
                    <li>5 Usuarios</li>
                    <li>50 GB de Almacenamiento</li>
                    <li>Soporte Prioritario</li>
                </ul>
                <button>Elegir Plan</button>
            </div>
            <div class="plan">
                <h2>Premium</h2>
                <p class="price">$50/mes</p>
                <ul>
                    <li>Usuarios Ilimitados</li>
                    <li>Almacenamiento Ilimitado</li>
                    <li>Soporte 24/7</li>
                </ul>
                <button>Elegir Plan</button>
            </div>
        </div>
    </section> --}}
    

    {{-- <section style="padding: 140px 0px;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        MIDE EL ÉXITO DE TU EQUIPO COMERCIAL
                    </h1>
                    <br>
                    <p>
                        <b>
                            Gestiona de forma eficiente todas las etapas del proceso de venta
                        </b>
                        <br> 
                        Toma el control total de tu gestión comercial y mejora la eficiencia de tu equipo de ventas. 
                        Conoce en detalle las métricas de atención al cliente, identifica a tus mejores vendedores y optimiza tus procesos comerciales.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 140px 0px; background: #f8f8f8;">
        <div class="container">
            <div class="row box-zoom">
                <div class="col-md-5">
                    <br><br><br><br>
                    <h1 style="font-size: 40px;">
                        UNE LA POTENCIA DE UN CRM CON LA VERSATILIDAD DE WHATSAPP
                    </h1>
                    <br>
                    <p>
                        <b>
                            Asigna clientes entre tus vendedores de forma automatizada e inteligente
                        </b>
                        <br> 
                        Descubre la solución perfecta para gestionar tus conversaciones de WhatsApp. Con un CRM multiagente, 
                        podrás mejorar la colaboración en equipo, optimizar la asignación de clientes y obtener una visión completa de tu negocio.
                    </p>
                </div>
                <div class="col-md-7" style="text-align:center;">
                    <img style="width: 85%;" src="{{ asset('themes/imazaweb/images/') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}



        <!--About One Start-->
        {{-- <x-about /> --}}
        <!--About One End-->
        <!--Courses One Start-->
        {{-- <x-courses.list-card /> --}}
        <!--Courses One End-->


    <!--Registration One Start-->
    {{-- <x-register /> --}}
    <!--Registration One End-->
    <!--Categories One Start-->
    {{-- <x-courses.category-list-card /> --}}
    <!--Categories One End-->
    <!--Testimonials One Start-->
    {{-- <x-testimonials /> --}}
    <!--Testimonials One End-->
    <!--Company Logos One Start-->
    {{-- <x-company-clients /> --}}
    <!--Company Logos One End-->

    <!--Blog One Start-->
    <x-blog.presentation />
    <!--Blog One End-->
    <!--Start Newsletter One-->
    {{-- <x-subscription /> --}}
    <!--End Newsletter One-->

    <div id="whatsapp">
        <a href="" class="wtsapp" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <style type="text/css">
        #whatsapp .wtsapp{
            position: fixed;
            transform: all .5s ease;
            background-color: #25D366;
            display: block;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border-radius: 50px;
            border-right: none;
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            bottom: 40px;
            right: 20px;
            border: 0;
            z-index: 9999;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        #whatsapp .wtsapp:before{
            content: "";
            position: absolute;
            z-index: -1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        #whatsapp .wtsapp:focus{
            border: none;
            outline: none;
        }

        @keyframes pulse-border{
            0%{
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }
            100%{
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }

    </style>

@stop
