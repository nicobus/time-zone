<form action="{{route('resultadosBusquedaUsuarios')}}">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <input class="form-control border-secondary py-2" name="busqueda" id="busqueda" type="search" placeholder="Busque el usuario por Id, nombre o email...">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
