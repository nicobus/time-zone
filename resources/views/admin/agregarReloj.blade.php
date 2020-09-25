{{--  pagina de agregado de reloj a la base de datos  --}}
@extends('layouts.adminLayout')
@section('titulo')
Time Zone | Agregar reloj
@endsection
@section('contenidoPrincipal')
<section>
  @include('admin.sidebarAdmin')
  <div class="main-body-content">
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Reloj</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('guardarProducto')}}" enctype="multipart/form-data">
                            @include('partials._formReloj', ['btntext'=>'Agregar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection
 
 
 
 
