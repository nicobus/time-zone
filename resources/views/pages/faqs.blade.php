@extends('layouts.layout')
@section('titulo')
Time Zone | Preguntas Frecuentes
@endsection
@section('contenidoPrincipal')
<main>
    @include('partials._titulo', ['titulo' => 'Preguntas Frecuentes'])
    <section class="container mt-5 mb-5" id="faq">
        <div class="titulo text-center">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                ¿Como compro en Time Zone?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Comprá de manera sencilla siguiendo estos pasos:<br><b>BUSCAR:</b> Navegá por el sitio hasta
                            encontrar el producto que más te guste.
                            <br><b>AGREGAR:</b> Seleccioná “Comprar” para agrega el producto al carrito. Podés continuar
                            navegando y agregando todos los producto que quieras.
                            <br><b>REVISAR:</b> Una vez que hayas terminado de agregar los productos en el carrito,
                            revisá que estén bien las cantidades que seleccionaste. Ya podés clickear en “Comenzar pago”
                            <br><b>PAGAR:</b> Luego, en el proceso de pago deberás completar tus datos y seleccionar
                            método de envío. Hacé click en “Iniciar Pago” para terminar de pagar.
                            <br><b>RECIBIR PEDIDO:</b> Terminado el proceso de compra online, sólo queda esperar a que
                            te enviemos el pedido. Vas a recibir vía e-mail información sobre el estado de tu pedido.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ¿Cuánto demoran los envios?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Trabajamos con los principales operadores de correo, por lo que recibira su pedido en no mas
                            de 5 dias habiles, dependiendo de su ubicacion en el pais.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ¿Que medios de pagos aceptan?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Se puede pagar en cuotas con todas las tarjetas de crédito de cualquier banco y con tarjeta
                            de débito. Los pagos serán procesados a través de Mercado Pago.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                ¿Que promociones/cuotas hay disponibles?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Podes consultar las promociones disponibles <a href="#">aqui</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                ¿Los productos cuentan con stock?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                        data-parent="#accordionExample">
                        <div class="card-body text-left">
                            Sí. Sólo mostramos productos con stock dentro del sitio
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                ¿Debo estar registrado para poder comprar?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body text-left">
                            No. Contás con la opción de compra como invitado. En esta modalidad de compra, te
                            solicitaremos únicamente los datos imprescindibles para poder tramitar tu pedido. Una vez
                            finalizado el proceso de compra, te ofreceremos la posibilidad de registrarse como usuario o
                            continuar como usuario no registrado. Te recomendamos registrarte para que tengas la mejor
                            experiencia de compra y puedas recibir beneficios exclusivos.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
