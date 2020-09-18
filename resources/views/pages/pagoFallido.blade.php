@extends('layouts.layout')
@section('titulo')
Time Zone | {{$titulo}}
@endsection
@section('contenidoPrincipal')
<main>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Pago rechazado!!! </h4>
        <p>Su pago ha sido rechazado/p>
        <p class="mb-0">Ha ocurrido un error y su pago ha sido rechazado, por favor vuelva a intentarlo mas tarde..</p>
      </div>
</main>

@endsection