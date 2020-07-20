@extends('layouts.layout')
@section('titulo')
Time Zone | Home
@endsection
@section('contenidoPrincipal')
<main>
    <div class="card banner-ppal px-4">
        <div class="row align-items-center mx-lg-5">
            <div class="card-body my-5 col-sm-12 col-md-8">
                <h5 class="card-title font-weight-bold banner-title">Elegi Un Nuevo Estilo Unico</h5>
                <p class="card-text banner-text">Tenemos una amplia variedad de relojes que de las mejores marcas del mercado
                    que seran un complemento perfecto para tu outfit.</p>
                <a href="#" class="btn btn-dark btn-lg button">TIENDA</a>
            </div>
            <div class="d-none d-md-block col-md-4 watch-container">
                <img src="/img/watch.png" class="card-img watch" alt="watch">
            </div>
        </div>
    </div>
    <div class="card panel-novedades px-4 border-0">
        <h2 class="novedades-title font-weight-bold my-5 mx-lg-5">Novedades</h2>
        <div class="row">
            @foreach ($novedades as $novedad)
            @include('partials._cardProductBasic')
            @endforeach
            <button type="button" class="btn btn-primary d-block mx-auto">Ver novedades</button>
        </div>
    </div>
    <div class="galeria row my-3">
        <div class="col-sm-12 col-md-6 my-2 p-0 pr-2">
          <img class="img-fluid w-100 img-height-650px" src="/img/gallery1.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 my-2 p-0 d-none d-sm-block pl-2">
          <img class="img-fluid w-100 img-height-650px" src="/img/gallery2.png" alt="">
        </div>
        <div class="col-sm-12 row p-0 d-md-none .d-lg-block">
          <div class="col-sm-12 col-md-6 my-2 p-0">
            <img class="img-fluid w-100 img-height-300px" src="/img/gallery3.png" alt="">
          </div>
          <div class="col-sm-12 col-md-6 my-2 p-0 d-none d-sm-block">
            <img class="img-fluid w-100 img-height-300px" src="/img/gallery4.png" alt="">
          </div>
        </div>
      </div>
      <div class="card panel-promociones px-4 border-0">
        <h2 class="promociones-title font-weight-bold my-5 mx-lg-5">Promociones</h2>
        <div class="row">
            @foreach ($ofertas as $oferta)
            @include('partials._cardProductBasic')
            @endforeach
            <button type="button" class="btn btn-primary d-block mx-auto">Ver ofertas</button>
        </div>
    </div>
</main>

@endsection