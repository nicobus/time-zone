@extends('layouts.adminLayout')
@section('titulo')
Time Zone | Admin
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
                            @include('partials._formUser', ['btntext'=>'Agregar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endsection
 
 
 
 