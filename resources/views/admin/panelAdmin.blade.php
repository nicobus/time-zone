@extends('layouts.adminLayout')
@section('titulo')
Time Zone | Admin
@endsection
@section('contenidoPrincipal')
<section>
  @include('admin.sidebarAdmin')
  <div class="main-body-content">
  @include('partials._adminHome')
  </div>
</section>
@endsection