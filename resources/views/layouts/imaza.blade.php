<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacta y Avanza - @yield('title')</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            /* Asegúrate de que el cuerpo de la página ocupe todo el espacio disponible */
            width: 100%;
            height: 100%;
            /* Centra el contenido verticalmente */
            display: flex;
            justify-content: center;
            align-items: center;
            /* Establece la imagen de fondo y ajusta el tamaño */
            background-image: url("{{ asset('themes/imaza/imaza.jpg') }}");
            /* Para dejar la imagen de fondo centrada, vertical y

        horizontalmente */

            background-position: center center;

            /* Para que la imagen de fondo no se repita */

            background-repeat: no-repeat;

            /* La imagen se fija en la ventana de visualización para que la altura de la imagen no supere a la del contenido */

            background-attachment: fixed;

            /* La imagen de fondo se reescala automáticamente con el cambio del ancho de ventana del navegador */

            background-size: cover;

            /* Se muestra un color de fondo mientras se está cargando la imagen

        de fondo o si hay problemas para cargarla */
        }

        .container {
            /* Agrega estilos adicionales para el contenido si es necesario */
            max-width: 100%;
            /* Por ejemplo, limita el ancho máximo del contenido */
            text-align: center;
            color: #ffffff;
        }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>
