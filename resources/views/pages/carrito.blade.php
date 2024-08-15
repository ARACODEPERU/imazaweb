<div>
@extends('layouts.webpage')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{ asset('themes/imazaweb/images/backgrounds/page-header-02.jpg') }});">
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
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.2s" style="padding: 15px 25px;">
                        <h2 class="sidebar__title" style="margin-top: 10px;">
                            <i class="fa fa-heart" aria-hidden="true"></i>&nbsp; TOTAL : &nbsp; <div id="totalid">S/ 450.00</div>
                        </h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar__single sidebar__post wow fadeInUp animated" data-wow-delay="0.3s">
                        <h2 class="sidebar__title">DATOS DEL COMPRADOR</h2>
                        <form class="row g-3">
                            @csrf
                            <div id="divCartHidden" style="display: none">
                            </div>
                            <div class="col-md-12">
                              <label for="inputName" class="form-label">Nombres :</label>
                              <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPaterno" class="form-label">Ap. Paterno :</label>
                              <input type="text" class="form-control" id="inputPaterno">
                            </div>
                            <div class="col-md-6">
                              <label for="inputMaterno" class="form-label">Ap. Materno :</label>
                              <input type="text" class="form-control" id="inputMaterno">
                            </div>
                            <div class="col-md-12">
                              <label for="inputDoc" class="form-label">Tipo de Documento :</label>
                              <select id="inputState" class="form-select">
                                <option selected>Seleccionar</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="inputDNI" class="form-label">DNI :</label>
                              <input type="text" class="form-control" id="inputDNI">
                            </div>
                            <div class="col-md-6">
                              <label for="inputPhone" class="form-label">Teléfono :</label>
                              <input type="text" class="form-control" id="inputPhone">
                            </div>
                            <div class="col-md-12">
                              <label for="inputEmail4" class="form-label">Correo Electrónico :</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary g-recaptcha" style="width: 100%;" id="btn-crear-cuenta"
                                data-sitekey="reCAPTCHA_site_key"
                                data-callback='onSubmit'
                                data-action='submit'
                                disabled>
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
            document.getElementById('cart').innerHTML = ""; // BORRAR contenido de la vista, antes de cargar de la base de datos
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

                    console.log("Aqui la respuesta--->>"+item.id);
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
                var url_descripcion_programa = "/curso-descripcion/"+id; // esta ruta deberá corregirse si se cambia el el get de la RUTA :S

                var temporal =`<tr id="` + id + `_pc"><td>
                                    <img style="width: 80px;" src="` + image + `" alt="">
                                </td>
                                <td style="line-height: 3em;"><a target="_blank" href="`+url_descripcion_programa+`">` + name + `</a></td>
                                <td style="line-height: 3em;">S/ ` + price + `</td>
                                <td style="line-height: 2em;">
                                    <a href="#"
                                    onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
                    name + `', precio: ` + price + ` });" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td></tr>`;
                cart.innerHTML += temporal;

            //     `
            // <div class="col-md-12" style="padding: 10px;" id="` + id + `_pc">
            //                 <div class="row contact-inner" style="padding: 10px; border: 1px solid #f2f2f2;">
            //                     <div class="col-md-2">
            //                         <div class="single-course-wrap">
            //                             <div class="thumb">
            //                                 <img style="height: 90px; object-fit: cover;" src="` + image + `" alt="img">
            //                             </div>
            //                         </div>
            //                     </div>
            //                     <div class="col-md-7">
            //                         <div class="row">
            //                             <div class="col-md-12">
            //                                 <h6><a href="`+url_descripcion_programa+`" target="_blank">` + name + `</a></h6>
            //                             </div>
            //                         </div>
            //                         <div class="row">
            //                             <div class="col-md-4 user-details">
            //                                 <img style="width: 30px; height: 30px; border-radius: 50%;" src="` +
            //         url_campus + avatar + `" alt="img">
            //                                 <a>` + teacher + `</a>
            //                             </div>
            //                             <div class="col-md-4">

            //                             </div>
            //                             <div class="col-md-4">
            //                                 <a href="">
            //                                     <span style="color:orange;">
            //                                         <b>` + modalidad + `</b>
            //                                     </span>
            //                                 </a>
            //                             </div>
            //                         </div>
            //                     </div>
            //                     <div class="col-md-3">
            //                         <div class="single-course-wrap">
            //                                 <div class="price-wrap">
            //                                     <div class="row align-items-center">
            //                                         <div class="col-md-12">
            //                                             <b>S/. ` + price + `</b>&nbsp;&nbsp;
            //                                             <a onclick="eliminarproducto({ id: ` + id + `, nombre: '` +
            //         name + `', precio: ` + price + ` });"  class="btn btn-danger">
            //                                                 <i class="fa fa-trash" aria-hidden="true"></i>
            //                                             </a>
            //                                         </div>
            //                                     </div>
            //                                 </div>
            //                         </div>
            //                     </div>
            //                 </div>
            //             </div>
            //             `;
            }
        }
    </script>

<script>
    function confirmSubmit(event) {
  event.preventDefault(); // Evita que el formulario se envíe automáticamente
  carrito = JSON.parse(localStorage.getItem("carrito")) || [];
  console.log(carrito);
 if(carrito.length>0){
    console.log(event);
    event.target.form.submit();
 }else
 alert("No has elegido ningún curso");

}
</script>


<script>
    function onSubmit(token) {
      document.getElementById("CartForm").submit();
    }
  </script>
</div>
