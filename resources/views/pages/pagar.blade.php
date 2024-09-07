@extends('layouts.webpage')

@section('content')
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{ route('index_main') }}">Home</a></li>
                                <li class="active">Mi Carrito</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <section class="courses-one courses-one--courses">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <table class="table wow fadeInUp animated" data-wow-delay="0.1s">
                        <thead class="table-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Producto</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>
                                        <img style="width: 80px;" src="{{ $item['image'] }}" alt="">
                                    </td>
                                    <td style="line-height: 3em;">{{ $item['name'] }}</td>
                                    <td style="line-height: 3em;">S/ {{ $item['total'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.2s"
                        style="padding: 15px 25px;">
                        <h2 class="sidebar__title" style="margin-top: 10px;">
                            <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; TOTAL : &nbsp; S/ {{ $total }}
                        </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.2s"
                        style="padding: 15px 25px;">
                        <h2 class="sidebar__title">{{ $person_name }}</h2>
                        <p>
                            Agradecemos su preferencia por nuestros productos. Por favor, proceda a registrar
                            sus datos para confirmar la compra.
                        </p>
                    </div>
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.3s">
                        <div id="cardPaymentBrick_container"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
@section('javascripts')

    @if ($preference)
        <script>
            const mp = new MercadoPago("TEST-1ad9dc20-cc77-4be6-8e3d-085dc5881a79", {
                locale: 'es-PE'
            });
            const bricksBuilder = mp.bricks();
            const renderCardPaymentBrick = async (bricksBuilder) => {
                const settings = {
                    initialization: {
                        preferenceId: "{{ $preference }}",
                        amount: {{ $total }},
                    },
                    customization: {
                        visual: {
                            style: {
                                customVariables: {
                                    theme: 'bootstrap',
                                }
                            }
                        },
                        paymentMethods: {
                            maxInstallments: 1,
                        }
                    },
                    callbacks: {
                        onReady: () => {
                            // callback llamado cuando Brick esté listo
                        },
                        onSubmit: (cardFormData) => {
                            //  callback llamado cuando el usuario haga clic en el botón enviar los datos
                            //  ejemplo de envío de los datos recolectados por el Brick a su servidor
                            return new Promise((resolve, reject) => {
                                fetch("{{ route('web_process_payment', $sale_id) }}", {
                                        method: "PUT",
                                        headers: {
                                            "Content-Type": "application/json",
                                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                        },
                                        body: JSON.stringify(cardFormData)
                                    })
                                    .then((response) => {
                                        if (!response.ok) {
                                            return response.json().then(error => {
                                                throw new Error(error.error);
                                            });
                                        }
                                        return response.json();

                                    })
                                    .then((data) => {
                                        if (data.status == 'approved') {
                                            window.location.href = data.url;
                                        } else {
                                            alert('No se pudo continuar el proceso');
                                            window.location.href = data.url;
                                        }
                                    })
                                    .catch((error) => {
                                        if (error instanceof SyntaxError) {
                                            // Si hay un error de sintaxis al analizar la respuesta JSON
                                            alert('Error al procesar el pago.');
                                        } else {
                                            // Mostrar la alerta con el mensaje de error devuelto por el backend
                                            alert(error.message);
                                        }
                                    })
                            });
                        },
                        onError: (error) => {
                            console.log(error)
                        },
                    },
                };
                window.cardPaymentBrickController = await bricksBuilder.create('cardPayment',
                    'cardPaymentBrick_container', settings);
            };
            renderCardPaymentBrick(bricksBuilder);
        </script>
    @endif
@stop
