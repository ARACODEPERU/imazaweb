<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>


        *{
            margin: 0;
            padding: 0;
        }

        *:after,
        *:before {
            box-sizing: border-box;
        }

        .bienvenida{
            padding: 50px 10px 0px 10px;
        }

        /* Establece el ancho al 100% y la altura a 250px */
        .banner {
            width: 100%;
            background-color: #3498db; /* Cambia el color de fondo según tus preferencias */
            /* Puedes agregar más estilos según tus necesidades */
        }


        img {
            max-width: 100%;
            display: block;
        }

        .card-list {
            width: 90%;
            max-width: 400px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 0 0 1px rgba(#000, 0.05), 0 20px 50px 0 rgba(#000, 0.1);
            border-radius: 15px;
            overflow: hidden;
            padding: 1.25rem;
            position: relative;
            transition: 0.15s ease-in;
        }

        .card:hover {
                box-shadow: 0 0 0 2px #16c79a, 0 10px 60px 0 rgba(#000, 0.1);
                transform: translatey(-5px);
        }

        .card:focus-within {
                box-shadow: 0 0 0 2px #16c79a, 0 10px 60px 0 rgba(#000, 0.1);
                transform: translatey(-5px);
        }

        .card-image {
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            a {
                font-weight: 600;
                font-size: 1.375rem;
                line-height: 1.25;
                padding-right: 1rem;
                text-decoration: none;
                color: inherit;
                will-change: transform;
                &:after {
                    content: "";
                    position: absolute;
                    left: 0;
                    top: 0;
                    right: 0;
                    bottom: 0;
                }
            }
        }

        .icon-button {
            border: 0;
            background-color: #fff;
            border-radius: 50%;
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            font-size: 1.25rem;
            transition: 0.25s ease;
            box-shadow: 0 0 0 1px rgba(#000, 0.05), 0 3px 8px 0 rgba(#000, 0.15);
            z-index: 1;
            cursor: pointer;
            color: #565656;

            svg {
                width: 1em;
                height: 1em;
            }
            &:hover,
            &:focus {
                background-color: #ec4646;
                color: #fff;
            }
        }

        .card-footer {
            margin-top: 1.25rem;
            border-top: 1px solid #ddd;
            padding-top: 1.25rem;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .card-meta {
            display: flex;
            align-items: center;
            color: #787878;
            &:first-child:after {
                display: block;
                content: "";
                width: 4px;
                height: 4px;
                border-radius: 50%;
                background-color: currentcolor;
                margin-left: 0.75rem;
                margin-right: 0.75rem;
            }
            svg {
                flex-shrink: 0;
                width: 1em;
                height: 1em;
                margin-right: 0.25em;
            }
        }








        .subTitle{
            text-align: center;
            font-size: 25px;
            color: #808080;
        }

        .title{
            margin-bottom: -5px;
            text-align: center;
            font-size: 50px;
            font-weight: 700;
            color: #0c161f;
        }

        /* Estilos para la línea */
        .linea {
            border: 2px solid #833fdb; /* Cambia el grosor y el color de la línea según tus preferencias */
            margin: 20px auto; /* Centra la línea horizontalmente y agrega espacio vertical */
            width: 5%; /* Establece el ancho de la línea al 50% de la página */
        }


        /* Estilos para la línea */
        .lineaCurso {
            border: 2px solid #ff8607; /* Cambia el grosor y el color de la línea según tus preferencias */
            width: 8%; /* Establece el ancho de la línea al 50% de la página */
        }

        .contenedor {
            place-items: center; /* Esto centra tanto horizontal como verticalmente */
            margin: 0px auto;
            width: 50%;
            display: flex;
            flex-wrap: wrap;
        }

        .contenedor-texto {
            margin: 0px auto;
            width: 50%;
        }

        .columna {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .btn {
            border: none;
            color: white;
            padding: 14px 28px;
            cursor: pointer;
            border-radius: 5px;
        }

        .primary {background-color: #833fdb;}
        .primary:hover {background: #c843be;}

        footer{
            padding: 15px; text-align: center; background: #000; color: #fff;
        }

        footer a{
            text-decoration: none; color: yellow;
        }

        footer a:hover{
            text-decoration: none; color: orange;
        }

        /* Estilos adicionales para hacerlo adaptable y estilizado */
        @media (max-width: 768px) {
            .contenedor {
                flex-direction: column;
                margin: 0px auto;
                width: 95%;
            }
            .columna {
                flex: 1;
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <section>
        <img  class="banner" src="{{ asset('img/bienvenida.jpg') }}" alt="">
    </section>

    <section class="bienvenida" >
        <div class="contenedor-texto">
            <h6 class="subTitle" >Hola {{ $data['names'] }}, <br>
                ¡Muchas gracias por tu reciente compra en nuestra plataforma online!
                Nos complace informarte que tu pedido ha sido procesado con exito.
            </h6>
            <!--
                <h1 class="title">Centro de Actualización Profesional CAP PERU</h1>
            -->
            <hr class="linea">
        </div>
    </section>

    <section style="padding: 15px;">
        <div class="contenedor">

            <table class="table wow fadeInUp animated" data-wow-delay="0.1s">
                <thead class="table-light">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody id="comprado">
                    @foreach ($data['courses'] as $course)
                        <tr>
                            <td>
                                <img style="width: 80px;" src="{{ asset($course['image']) }}" alt="">
                            </td>
                            <td style="line-height: 3em;">{{ $course['name'] }}</td>
                            <td style="line-height: 3em;">S/ {{ $course['price'] }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </section>

    <section style="padding: 15px;">
        <div class="contenedor">
            <div class="columna" style="text-align: center; padding: 30px 15px; background-color: #F9FAFD;">
                <p>
                    <b>Usuario:</b> {{ $data['email'] }} <br>
                    <b>Clave: </b> {{ $data['password'] }}
                </p>
                <br><br>
                <a href="{{ route('login') }}" class="btn primary" style="font-size: 18px; text-decoration:none;"><b>Campus Virtual</b></a>
            </div>
        </div>
    </section>
    <footer>
        <p>
            &copy; Derechos Reservados a MarketingDespega.com | Desarrollado por <a  href="https://www.aracodeperu.com/">Aracode Smart Solutions</a>
        </p>
    </footer>
</body>
</html>
