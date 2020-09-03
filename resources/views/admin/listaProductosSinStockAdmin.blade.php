@extends('layouts.adminLayout')
@section('titulo')
Time Zone | {{$titulo}}
@endsection
@section('contenidoPrincipal')
<section>
  @include('admin.sidebarAdmin')
  <div class="main-body-content">
  @include('partials._tablaProductos')
  </div>
</section>
@endsection