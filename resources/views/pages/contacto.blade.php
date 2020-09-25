@extends('layouts.layout')
@section('titulo')
Time Zone | Contacto
@endsection
@section('contenidoPrincipal')
<main>
    @include('partials._titulo', ['titulo' => 'Contacto'])
    <div class="container my-3">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">
                                    Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="email" class="form-control" id="email" placeholder="Ingrese sumensajer email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Asunto</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Selecione el asunto:</option>
                                    <option value="general">Consultas generales</option>
                                    <option value="sugerencias">Sugerencias</option>
                                    <option value="servicio-tecnico">Servicio técnico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Mensaje</label>
                                <textarea name="mensaje" id="mensaje" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right">
                                Enviar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Nuestras oficinas</legend>
                <address>
                    <strong>Time Zone</strong><br>
                    Calle Falsa 123<br>
                    Springfield, NA XXXXX<br>
                    <abbr title="Phone">
                        Tel:</abbr>
                    (123) 456-7890
                </address>
                <address>
                    <strong>Email</strong><br>
                    <a href="mailto:#">consultas@time-zone.com</a>
                </address>
                </form>
            </div>
        </div>
    </div>
    
</main>
@endsection




