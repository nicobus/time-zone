@extends('layouts.layout')
@section('titulo')
Time Zone | {{$titulo}}
@endsection
@section('contenidoPrincipal')
<main>
    <div class="alert alert-warning" role="alert">
        <h4 class="alert-heading">Deberas esperar un poco!!! </h4>
        <p>Su pago  ha quedado pendiente</p>
        <p class="mb-0">Cuando la operacion sea confirmada despacharemos su pedido y le enviaremos la informacion del envio.</p>
      </div>
</main>

@endsection