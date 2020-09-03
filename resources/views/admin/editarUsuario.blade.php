@extends('layouts.adminLayout')
@section('titulo')
Time Zone | Editar usuario
@endsection
@section('contenidoPrincipal')
<section>
  @include('admin.sidebarAdmin')
  <div class="main-body-content">
  @include('partials._formUser')
  </div>
</section>
@endsection