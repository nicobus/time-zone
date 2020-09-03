<form action="{{route('resultadosBusqueda')}}">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <input class="form-control border-secondary py-2" name="busqueda" id="busqueda" type="search" placeholder="Busque el producto por Id, marca o modelo...">
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
