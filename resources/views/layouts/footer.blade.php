<footer class="bg-footer footer">
    <div class="medios-pago container-flex p-3 d-none d-sm-none d-md-block bg-white">
        <div class="row">
            <h4 class="font-weight-bold col-md-3 my-auto">Medios de pago</h4>
            <div class="d-block mx-auto tarjetas pt-3 col-md-9">
                <img src="/img/mercadopago.svg" alt="" class="my-1">
                <img src="/img/naranja.svg" alt="" class="my-1">
                <img src="/img/visa.svg" alt="" class="my-1">
                <img src="/img/cabal.svg" alt="" class="my-1">
                <img src="/img/diners.svg" alt="" class="my-1">
                <img src="/img/master.svg" alt="" class="my-1">
                <img src="/img/pagofacil.svg" alt="" class="my-1">
                <img src="/img/rapipago.svg" alt="" class="my-1">
            </div>
        </div>
    </div>

    <div class="panel-suscripcion bg-suscripcion text-white p-4">
        <div class="row">
            <h4 class="p-3 col-sm-12 col-md-6">
                Suscribite para recibir novedades y promociones!
            </h4>
            <form id="formulario-suscripcion" class="form-suscripcion col-sm-12 col-md-6">
                @csrf
                <div class="row">
                    <div class="form-group my-auto col-12 col-sm-12 col-md-9">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control my-3" id="email-sus" placeholder="Ingrese su email..." name="email-sus">
                    </div>
                    <div class="respuesta">
                    </div>
                    <button type="submit" class="btn btn-dark d-block mx-auto my-auto font-weight-bold col-3 col-sm-3 col-md-3">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="container text-white text-center pb-3">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 p-3">
                <h3 class="font-weight-bold">
                    Ayuda
                </h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="link-white" href="{{route('faqs')}}">¿Como comprar?</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-white" href="{{route('faqs')}}">Entrega</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-white" href="{{route('faqs')}}">Devoluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-white" href="{{route('faqs')}}">Terminos y condiciones</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 p-3">
                <h3 class="font-weight-bold">
                    Sobre nosotros
                </h3>
                <ul class="redes-sociales nav flex-column">
                    <li class="nav-item">
                        <a class="link-white" href="{{route('sobreNosotros')}}">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-white" href="#">Visitanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="link-white" href="{{route('contacto')}}">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="row">
                    <div class="col-12 p-3" style="font-size: 28px;">
                        <h3 class="font-weight-bold">
                            Seguinos en
                        </h3>
                        <a href="https://www.facebook.com" class="link-white mx-2 fa fa-facebook-official"></a>
                        <a href="https://www.instagram.com" class="link-white mx-2 fa fa-instagram"></a>
                        <a href="https://www.twitter.com" class="link-white mx-2 fa fa-twitter-square"></a>
                    </div>
                    <div class="medios-pago col-12 container-flex text-white p-3 d-block d-md-none">
                        <h3 class="font-weight-bold">Medios de pago</h3>
                        <div class="d-block mx-auto tarjetas pt-3">
                            <img src="/img/mercadopago.svg" alt="" class="my-1">
                            <img src="/img/naranja.svg" alt="" class="my-1">
                            <img src="/img/visa.svg" alt="" class="my-1">
                            <img src="/img/cabal.svg" alt="" class="my-1">
                            <img src="/img/diners.svg" alt="" class="my-1">
                            <img src="/img/master.svg" alt="" class="my-1">
                            <img src="/img/pagofacil.svg" alt="" class="my-1">
                            <img src="/img/rapipago.svg" alt="" class="my-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="text-white text-center bg-dark container-flex">
        <span>Copyright© Time-Zone 2020</span>
    </section>
</footer>