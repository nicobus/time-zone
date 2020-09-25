@extends('layouts.layout')
@section('titulo')
Time Zone | Home
@endsection
@section('contenidoPrincipal')
<main>
    <div class="card banner-ppal px-4">
        <div class="row align-items-center mx-lg-5">
            <div class="card-body my-5 col-sm-12 col-md-8">
                <h5 class="card-title font-weight-bold banner-title font-josefin-sans">Elegi Un Nuevo Estilo Unico</h5>
                <p class="card-text banner-text">Tenemos una amplia variedad de relojes que de las mejores marcas del mercado
                    que seran un complemento perfecto para tu outfit.</p>
                <a href="{{route('productos')}}" class="btn btn-dark btn-lg button-tienda">TIENDA</a>
            </div>
            <div class="watch-container d-none d-md-block col-md-4">
                <img src="/img/watch.png" class="watch card-img" alt="watch-image">
            </div>
        </div>
    </div>

    <div class="panel-novedades p-4">
        <h2 class="novedades-title font-weight-bold font-josefin-sans">Novedades</h2>
        <div class="row">
            @foreach ($novedades as $producto)
            @include('partials._cardProductBasic')
            @endforeach
            <a class="btn btn-secondary d-block mx-auto" href="{{route('productosCampo', ['campo'=>'novedades'])}}" role="button">Ver novedades</a>
        </div>
    </div>

    <div class="galeria row">
        <div class="col-sm-12 col-md-6 col-lg-4 my-2 p-0 pr-2">
          <img class="img-fluid w-100 img-height-650px" src="/img/gallery1.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 my-2 p-0 pr-2 d-none d-sm-block pl-2">
          <img class="img-fluid w-100 img-height-650px" src="/img/gallery2.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 my-2 p-0 pl-2 d-md-none d-lg-block">
          <div class="row d-inline m-0">
            <div class="col-lg-12 p-0">
              <img class="img-fluid w-100 img-height-317px mb-2" src="/img/gallery3.png" alt="">
            </div>
            <div class="col-lg-12 p-0 d-none d-sm-block">
              <img class="img-fluid w-100 img-height-317px d-block mt-2" src="/img/gallery4.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <div class="panel-promociones p-4">
        <h2 class="promociones-title font-weight-bold font-josefin-sans">Promociones</h2>
        <div class="row">
            @foreach ($ofertas as $producto)
            @include('partials._cardProductBasic')
            @endforeach
            <a class="btn btn-secondary d-block mx-auto" href="{{route('productosCampo', ['campo'=>'ofertas'])}}" role="button">Ver ofertas</a>
        </div>
    </div>
</main>

@endsection