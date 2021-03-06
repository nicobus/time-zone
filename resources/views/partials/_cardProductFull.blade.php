<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img class ="card-img" onerror="this.src='/storage/sin-imagen.png';" src="/storage/{{$producto->nombre_imagen_1}}" alt="imagen-producto">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title text-center">{{$producto->marca->nombre}} {{$producto->modelo}}</h2>
                <div class="btn-compra text-center">
                    <h3 class="precio d-inline">$ {{number_format($producto->precio, 2, ',', '.')}}</h3>
                    @if (Auth::check())
                    <form class="form-agregar-carrito d-inline-flex" action="{{route('agregarAlCarrito')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$producto->id}}">
                        
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        
                        <button class="btn btn-success my-3 mx-5"><span class="fas fa-shopping-cart" aria-hidden="true"></span> Agregar al carrito</button>
                    </form>
                    @else
                        <a href="{{route('login', ['redirect_to'=>url()->current()])}}" class="btn btn-success my-3 mx-5"><span class="fas fa-shopping-cart" aria-hidden="true"></span> Agregar al carrito</a>
                    @endif
                    
                   
                </div>  
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Descripcion: {{$producto->descripcion}}</li>
                    <li class="list-group-item">Color: {{$producto->reloj->color}}</li>
                    <li class="list-group-item">Correa: {{$producto->reloj->correa}}</li>
                    <li class="list-group-item">Material caja: {{$producto->reloj->material_caja}}</li>
                    <li class="list-group-item">Material marco: {{$producto->reloj->material_marco}}</li>
                    <li class="list-group-item">Funciones: {{$producto->reloj->funciones}}</li>
                    <li class="list-group-item">Garantia: {{$producto->reloj->garantia}}</li>
                    <li class="list-group-item">Marca: {{$producto->marca->nombre}}</li>
                    <li class="list-group-item">Origen: {{$producto->origen}}</li>
                </ul> 
            </div>
        </div>
    </div>
</div>