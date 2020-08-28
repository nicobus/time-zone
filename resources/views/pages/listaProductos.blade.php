@extends('layouts.layout')
@section('titulo')
Time Zone | {{$titulo}}
@endsection
@section('contenidoPrincipal')
<main>
    <div class="tienda-category p-3"><h3 class="font-weight-bold uppercase">{{$titulo}}</h3></div>
    <div class="panel-productos p-4">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ordenar por
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('productosOrdenados', ['campo'=>'precio', 'direccion'=>'asc'])}}">Menor precio</a>
              <a class="dropdown-item" href="{{route('productosOrdenados', ['campo'=>'precio', 'direccion'=>'desc'])}}">Mayor precio</a>
            </div>
          </div>
        <div class="row">
            @foreach ($productos as $producto)
            @include('partials._cardProductBasic')
            @endforeach
        </div>
        <p>{{$productos->links()}}</p>
    </div>
</main>
@endsection