@extends('layouts.adminLayout')
@section('titulo')
Time Zone | Busqueda Usuario
@endsection
@section('contenidoPrincipal')
<section>
  @include('admin.sidebarAdmin')
  <div class="main-body-content">
    @include('partials._barraBusquedaUsuario')
      @isset($usuarios)
      @include('partials._tablaUsuarios')
      @endisset
  </div>
</section>
@endsection