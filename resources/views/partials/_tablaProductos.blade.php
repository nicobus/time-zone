
    <h1 class="p-3">
        Lista de productos
    </h1>
 
    <div class="table-responsive bg-light">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
            @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->modelo}}</td>
                <td>{{$producto->marca->nombre}}</td>
                <td>{{$producto->categoria->nombre}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>
                    <a href="{{route('editarReloj', ['id'=>$producto->id])}}">
                        <i class="fa fa-pencil m-2" aria-hidden="true"></i>
                    </a>
                    <form class="form-eliminar d-inline-flex" action="{{route('eliminarProductoAdmin')}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$producto->id}}">
                            <button type="submit" class="btn btn-danger fa fa-trash btn-eliminar">
                            </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <p>{{$productos->links()}}</p>
</div>