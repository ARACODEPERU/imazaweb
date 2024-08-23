<div>
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
                    <div class="col-md-12">
                        <b id="total_productos">03 cursos en el carrito</b>
                    </div>
                    <div class="col-md-8">
                        <table class="table wow fadeInUp animated" data-wow-delay="0.1s">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody id="cart">
                                {{-- <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                                <td style="line-height: 2em;">
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                                <td style="line-height: 2em;">
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img style="width: 80px;" src="{{ asset('themes/imazaweb/images/resources/courses-v1-img1.jpg') }}" alt="">
                                </td>
                                <td style="line-height: 3em;">Marketing de 0 a Ninja</td>
                                <td style="line-height: 3em;">S/ 150.00</td>
                                <td style="line-height: 2em;">
                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr> --}}
                            </tbody>
                        </table>
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.2s"
                            style="padding: 15px 25px;">
                            <h2 class="sidebar__title" style="margin-top: 10px;">
                                <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; TOTAL : &nbsp; <div id="totalid">S/
                                    450.00</div>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.3s">
                            <h2 class="sidebar__title">DATOS DEL COMPRADOR</h2>
                            <form action="{{ route('web_pagar') }}" method="post" class="row g-3" id="form-buyer">
                                @csrf
                                <div id="divCartHidden" style="display: none">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputName" class="form-label">Nombres :</label>
                                    <input type="text" name="names" value="{{ old('names') }}" class="form-control"
                                        id="inputName" required>
                                    @error('names')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPaterno" class="form-label">Ap. Paterno :</label>
                                    <input type="text" name="app" value="{{ old('app') }}" class="form-control"
                                        id="inputPaterno" required>
                                    @error('app')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputMaterno" class="form-label">Ap. Materno :</label>
                                    <input type="text" name="apm" value="{{ old('apm') }}" class="form-control"
                                        id="inputMaterno" required>
                                    @error('apm')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="inputDoc" class="form-label">Tipo de Documento :</label>
                                    <select id="inputState" name="type" class="form-select" required>
                                        <option value="" selected>Seleccionar</option>
                                        <option value="0">Doc.trib.no.dom.sin.ruc</option>
                                        <option value="1">DNI</option>
                                        <option value="6">RUC</option>
                                    </select>
                                    @error('type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputDNI" class="form-label">N° Doc :</label>
                                    <input type="text" name="dni" value="{{ old('dni') }}" class="form-control"
                                        id="inputDNI" required>
                                    @error('dni')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPhone" class="form-label">Teléfono :</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"
                                        id="inputPhone" required>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Correo Electrónico :</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" id="inputEmail4" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary g-recaptcha" style="width: 100%;"
                                        id="btn-crear-cuenta" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit'
                                        data-action='submit' disabled>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        &nbsp;Crear Cuenta
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @stop

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            cargarItemsCarritoBD();
        });

        function cargarItemsCarritoBD() {
            document.getElementById('cart').innerHTML =
                ""; // BORRAR contenido de la vista, antes de cargar de la base de datos
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            myIds = [];
            carrito.forEach(function(item) {
                // Hacer algo con cada elemento del carrito

                myIds.push(parseInt(item.id));
            });

            btnCrear = document.getElementById("btn-crear-cuenta");
            btnCrear.setAttribute("disabled", "disabled");
            realizarConsulta(myIds);
        }

        function realizarConsulta(ids) {
            // Realizar la petición Ajax
            var csrfToken = "{{ csrf_token() }}";
            $.ajax({
                url: "{{ route('onlineshop_get_item_carrito') }}",
                type: 'POST',
                data: {
                    ids: ids
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(respuesta) {
                    // Obtén una referencia al elemento div por su ID
                    var divCartHidden = document.getElementById("divCartHidden");
                    respuesta.items.forEach(function(item) {
                        // Accede a las propiedades del objeto

                        console.log("Aqui la respuesta--->>" + item.id);
                        renderProducto(item);
                        // Crea un elemento input oculto
                        let inputHidden = document.createElement("input");
                        // Establece los atributos del input
                        inputHidden.type = "hidden";
                        inputHidden.name = "item_id[]"; // Asigna el nombre que desees
                        inputHidden.value = item.id; // Asigna el valor que desees
                        // Agrega el input al div
                        divCartHidden.appendChild(inputHidden);
                    });

                    btnCrear = document.getElementById("btn-crear-cuenta");
                    btnCrear.removeAttribute("disabled");

                },
                error: function(xhr) {
                    // Ocurrió un error al realizar la consulta
                    console.log(xhr.responseText);
                    // Aquí puedes manejar el error de alguna manera
                }
            });

        }

        function renderProducto(respuesta) {

            var cart = document.getElementById('cart');
            if (cart != null) {
                var id = respuesta.id;
                var teacher = respuesta.teacher;
                var teacher_id = respuesta.teacher_id;
                var avatar = respuesta.avatar;
                var image = respuesta.image;
                var name = respuesta.name;
                var price = respuesta.price;
                var modalidad = respuesta.additional;
                var url_campus = "";
                var url_descripcion_programa = "/curso-descripcion/" +
                    id; // esta ruta deberá corregirse si se cambia el el get de la RUTA :S

                var temporal = `<tr id="` + id + `_pc"><td>
                                    <img style="width: 80px;" src="` + image + `" alt="">
                                </td>
                                <td style="line-height: 3em;"><a target="_blank" href="` + url_descripcion_programa +
                    `">` + name + `</a></td>
                                <td style="line-height: 3em;">S/ ` + price + `</td>
                                <td style="line-height: 2em;">
                                    <a href="#"
                                    onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
                    name + `', precio: ` + price + ` });" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td></tr>`;
                cart.innerHTML += temporal;

            }
        }
    </script>

    <script>
        function confirmSubmit(event) {
            event.preventDefault(); // Evita que el formulario se envíe automáticamente
            carrito = JSON.parse(localStorage.getItem("carrito")) || [];
            console.log(carrito);
            if (carrito.length > 0) {
                console.log(event);
                event.target.form.submit();
            } else
                alert("No has elegido ningún curso");

        }
    </script>


    <script>
        function onSubmit(token) {
            document.getElementById("CartForm").submit();
        }
    </script>
</div>
