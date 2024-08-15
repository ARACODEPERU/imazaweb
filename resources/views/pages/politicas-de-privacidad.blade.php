@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('storage/'.$banner->content) }});">
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
                                <li class="active">Politicas De Privacidad</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->
    
    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="about-two__bottom-content">
                <div class="row">
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"">
                        <div class="about-two__text-box">
                            <div class="section-title">
                                <h2 class="section-title__title">Politicas De Privacidad</h2>
                            </div>
                            <h4>Última actualización: [Fecha Actual]</h4>
                            <p class="about-two__text-box-text">
                                En [Nombre de tu Empresa/Sitio Web] (en adelante, "nosotros", "nuestro" o "la empresa"), valoramos tu privacidad y 
                                nos comprometemos a proteger la información personal que compartes con nosotros. Esta política de privacidad describe 
                                cómo recopilamos, usamos y protegemos tus datos personales cuando accedes a nuestros cursos en línea a través de nuestro 
                                sitio web [URL del sitio web].
                            </p>
                            <br>
                            <h4>1. Información que Recopilamos</h4>
                            <p class="about-two__text-box-text">
                                <b>1.1 Información de Registro:</b> Cuando te registras en nuestro sitio para acceder a nuestros cursos, recopilamos 
                                información básica como tu nombre, dirección de correo electrónico, número de teléfono y cualquier otra información que decidas proporcionar.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>1.2 Información de Pago:</b> Si realizas una compra en nuestro sitio, recopilamos información necesaria para procesar 
                                la transacción, como los detalles de tu tarjeta de crédito o débito y tu dirección de facturación. Utilizamos proveedores de servicios de pago seguros para garantizar la protección de tus datos financieros.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>1.3 Información de Navegación:</b> Podemos recopilar automáticamente datos sobre tu interacción con nuestro sitio, 
                                como la dirección IP, el tipo de navegador, las páginas visitadas y el tiempo pasado en nuestro sitio, utilizando cookies y tecnologías similares.
                            </p>
                            <br>
                            <h4>2. Uso de la Información</h4>
                            <p class="about-two__text-box-text">
                                <b>2.1 Prestación de Servicios:</b> Utilizamos la información que nos proporcionas para administrar tu cuenta, 
                                ofrecerte acceso a nuestros cursos, procesar pagos y comunicarnos contigo sobre cualquier aspecto relacionado con nuestros servicios.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>2.2 Mejora de los Servicios:</b> Analizamos los datos de uso para mejorar la funcionalidad y la experiencia del 
                                usuario en nuestro sitio, así como para desarrollar nuevos productos y servicios.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>2.3 Marketing:</b> Con tu consentimiento, podemos utilizar tu información de contacto para enviarte boletines 
                                informativos, promociones y actualizaciones sobre nuevos cursos y servicios que ofrecemos.
                            </p>
                            <br>
                            <h4>3. Compartir tu Información</h4>
                            <p class="about-two__text-box-text">
                                <b>3.1 Proveedores de Servicios:</b> Podemos compartir tu información con terceros que prestan servicios en 
                                nuestro nombre, como procesadores de pagos, plataformas de correo electrónico y proveedores de análisis de datos. 
                                Estos terceros están obligados a proteger tu información y solo la utilizan en la medida en que sea necesario para 
                                realizar sus funciones.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>3.2 Cumplimiento Legal:</b> Podemos divulgar tu información si es necesario para cumplir con la ley, responder 
                                a una orden judicial, o proteger los derechos, la propiedad o la seguridad de [Nombre de tu Empresa/Sitio Web], 
                                nuestros usuarios u otros.
                            </p>
                            <br>
                            <h4>4. Seguridad de la Información</h4>
                            <p class="about-two__text-box-text">
                                Tomamos medidas razonables para proteger tu información personal de accesos no autorizados, uso indebido, pérdida 
                                o divulgación. Sin embargo, debes saber que ningún método de transmisión por Internet o de almacenamiento 
                                electrónico es 100% seguro.
                            </p>
                            <br>
                            <h4>5. Tus Derechos</h4>
                            <p class="about-two__text-box-text">
                                <b>5.1 Acceso y Rectificación:</b> Tienes derecho a acceder a la información personal que tenemos sobre ti y a 
                                solicitar su rectificación si es incorrecta o está desactualizada.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>5.2 Cancelación y Oposición:</b> Puedes solicitar la eliminación de tu información personal o limitar el uso que 
                                hacemos de ella en cualquier momento. Sin embargo, esto puede afectar nuestra capacidad para proporcionarte 
                                algunos de nuestros servicios.
                            </p>
                            <p class="about-two__text-box-text">
                                <b>5.3 Retiro del Consentimiento:</b> Si has dado tu consentimiento para que usemos tu información para fines de 
                                marketing, puedes retirarlo en cualquier momento utilizando el enlace de "cancelar suscripción" en nuestros 
                                correos electrónicos.
                            </p>
                            <br>
                            <h4>6. Cambios a Esta Política de Privacidad</h4>
                            <p class="about-two__text-box-text">
                                Nos reservamos el derecho de actualizar esta política de privacidad en cualquier momento. Cualquier cambio 
                                será publicado en esta página y, si los cambios son significativos, te lo notificaremos a través de un aviso 
                                en nuestro sitio web o por correo electrónico.
                            </p>
                            <br>
                            <h4>7. Contacto</h4>
                            <p class="about-two__text-box-text">
                                Si tienes preguntas o inquietudes sobre nuestra política de privacidad o el manejo de tu información personal, 
                                puedes contactarnos a través de [Dirección de correo electrónico de contacto] o [Dirección física de la empresa, 
                                si aplica].
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two End-->



@stop
