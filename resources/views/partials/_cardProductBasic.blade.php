<div class="card-basic card col-sm-12 col-md-6 border-0">
    <a class="link-product-detail" href="#"></a>
    <img src="/storage/{{$novedad->nombre_imagen_1}}" class="card-img-top" alt="...">
    <div class="separador d-flex mx-auto">
        <span class="linea my-auto"></span>
        <i class="fas fa-hourglass-half"></i>
        <span class="linea my-auto"></span>
    </div>
    <div class="card-body">
        <h4 class="card-title marca-modelo">{{$novedad->marca->nombre}} {{$novedad->modelo}}</h4>
        <p class="card-text precio">$ {{number_format($novedad->precio, 2, ',', '.')}}</p>
    </div>
</div>