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
                                <li class="active">Servicios</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <br>
    <!--Contact Page Start-->
    <section class="contact-page" style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                Servicios
            </div>
        </div>
        <!-- Agrega SweetAlert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

        <!-- Agrega SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            let form = document.getElementById('pageContactForm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                var formulario = document.getElementById('pageContactForm');
                var formData = new FormData(formulario);

                // Deshabilitar el botón
                var submitButton = document.getElementById('submitPageContactButton');
                submitButton.disabled = true;
                submitButton.style.opacity = 0.25;

                // Crear una nueva solicitud XMLHttpRequest
                var xhr = new XMLHttpRequest();

                // Configurar la solicitud POST al servidor
                xhr.open('POST', "{{ route('apisubscriber') }}", true);

                // Configurar la función de callback para manejar la respuesta
                xhr.onload = function() {
                    // Habilitar nuevamente el botón
                    submitButton.disabled = false;
                    submitButton.style.opacity = 1;
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        Swal.fire({
                            icon: 'success',
                            title: 'Enhorabuena',
                            text: response.message,
                            customClass: {
                                container: 'sweet-modal-zindex' // Clase personalizada para controlar el z-index
                            }
                        });
                        formulario.reset();
                    } else if (xhr.status === 422) {
                        var errorResponse = JSON.parse(xhr.responseText);
                        // Maneja los errores de validación aquí, por ejemplo, mostrando los mensajes de error en algún lugar de tu página.
                        var errorMessages = errorResponse.errors;
                        var errorMessageContainer = document.getElementById('messagePageContact');
                        errorMessageContainer.innerHTML = 'Errores de validación:<br>';
                        for (var field in errorMessages) {
                            if (errorMessages.hasOwnProperty(field)) {
                                errorMessageContainer.innerHTML += field + ': ' + errorMessages[field].join(', ') +
                                    '<br>';
                            }
                        }
                    } else {
                        console.error('Error en la solicitud: ' + xhr.status);
                    }


                };

                // Enviar la solicitud al servidor
                xhr.send(formData);
            });
        </script>
    </section>
    <!--Contact Page End-->




@stop
