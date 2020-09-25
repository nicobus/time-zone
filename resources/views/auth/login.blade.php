@extends('layouts.layout')
@section('titulo')
Time Zone | Login
@endsection
@section('contenidoPrincipal')
<main>
    <section>
        
            <div class="row justify-content-center mt-md-5">
                <div class="col-lg-5 col-md-5">
                    <div class="panel-register-link text-white p-5 font-josefin-sans font-weight-bold ml-md-4">
                        <div>
                            <h2>Todavia no te registraste?</h2>
                            <p>Crea tu cuenta si aun no lo hiciste o inicia sesion para poder comprar nuestros productos.</p>
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Crear cuenta</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="panel-login px-5 py-2 mr-md-4">
                        <div>
                            <h3 class="p-3">Por favor inicie sesion ahora</h3>
                            <form class="login-form" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="col-md-12 form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Email" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" type="button" class="btn btn-outline-primary d-block">
                                        Entrar
                                    </button>
                                    <a class="mt-2 d-block" href="#">Olvido su contraseña?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>        
</main>
@endsection