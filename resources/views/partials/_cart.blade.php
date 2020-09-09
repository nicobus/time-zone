<div class="container">
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Carrito de compras
            <a href="{{route('productos')}}" class="btn btn-outline-info btn-sm pull-right">Continuar comprando</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
           
                @foreach ($items as $item)
                <!-- PRODUCT -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="/storage/{{$item->associatedModel->nombre_imagen_1}}"
                            alt="prewiew" width="120" height="80">
                    </div>
                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>{{$item->name}}</strong></h4>
                        <h4>
                            <small>{{$item->associatedModel->marca->nombre}}</small>
                        </h4>
                    </div>
                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong><span
                                        class="text-muted">$</span>{{number_format($item->price, 2, ',', '.')}}</strong>
                            </h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">
                                <input type="number" step="1" max="99" min="1" value="{{$item->quantity}}" title="Qty"
                                    class="qty" size="4" name="cantidad[]" form="form-update">
                                <input type="hidden" value="{{$item->id}}" name="id-update[]" form="form-update">
                            </div>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 text-right">
                            <form action="{{route('eliminarProductoCarrito')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id_eliminar" value="{{$item->id}}">
                                <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                                <button type="submit" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
                <hr>
                <!-- END PRODUCT -->
                @endforeach
                <form action="{{route('actualizarProductoCarrito')}}" method="POST" id="form-update">
                    @csrf
                <div class="pull-right">
                    <button type="submit" class="btn btn-outline-secondary pull-right">
                        Actualizar Carrito
                    </button>
                </div>
            </form>
        </div>


        <div class="card-footer">
            <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                <div class="row">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="cupone code">
                    </div>
                    <div class="col-6">
                        <input type="submit" class="btn btn-default" value="Use cupone">
                    </div>
                </div>
            </div>
            <div class="pull-right" style="margin: 10px">
                <a href="" class="btn btn-success pull-right">Checkout</a>
                <div class="pull-right" style="margin: 5px">
                    Total price: <b>${{number_format(\Cart::getTotal(), 2, ',', '.')}}</b>
                </div>
            </div>
        </div>
    </div>
</div>