<div class="card-basic card col-sm-12 col-md-6 col-lg-3 border-0">
    <a class="link-product-detail" href="{{route('detalleProducto', ['id'=>$producto->id])}}"></a>
    <img src="/storage/{{$producto->nombre_imagen_1}}"  onerror="this.src='/storage/sin-imagen.png';" class="card-img-top img-product-basic" alt="imagen-producto">
    <div class="separador d-flex mx-auto">
        <span class="linea my-auto mx-2"></span>
        <i class="fas fa-hourglass-half"></i>
        <span class="linea my-auto mx-2"></span>
    </div>
    <div class="card-body">
        <h4 class="card-title marca-modelo">{{$producto->marca->nombre}} {{$producto->modelo}}</h4>
        <p class="card-text precio">$ {{number_format($producto->precio, 2, ',', '.')}}</p>
    </div>
</div>