@extends('layouts.adminLayout')
@section('titulo')
Time Zone | Busqueda producto
@endsection
@section('contenidoPrincipal')
<section>
  @include('admin.sidebarAdmin')
  <div class="main-body-content">
    @include('partials._barraBusquedaProducto')
      @isset($productos)
      @include('partials._tablaProductos')
      @endisset
  </div>
</section>
@endsection