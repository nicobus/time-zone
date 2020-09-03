<h1 class="p-3">
    {{$titulo}}
</h1>

<div class="table-responsive bg-light">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo de usuario</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->role->name}}</td>
            {{--  <td>{{$usuario->direccion}}</td>  --}}
            <td>
                <a href="{{route('editarUsuario', ['id'=>$usuario->id])}}">
                    <i class="fa fa-pencil m-2" aria-hidden="true"></i>
                </a>
                <form class="form-eliminar d-inline-flex" action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="">
                        <button type="submit" class="btn btn-danger fa fa-trash btn-eliminar">
                        </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<p>{{$usuarios->links()}}</p>
</div>