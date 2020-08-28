@csrf

<div class="form-group row">
    <label for="marca_id" class="col-md-4 col-form-label text-md-right">Marca:</label>
    <div class="col-md-6">
        <select class="form-control custom-select mr-sm-2 @error('marca_id') is-invalid @enderror" id="marca_id"
            name="marca_id">
            @if (old('marca_id'))
            <option value="{{$marcas[old('marca_id')-1]->id}}" selected>{{$marcas[old('marca_id')-1]->nombre}}</option>
            @else
            @if ($producto->marca != null)
            <option value="{{$producto->marca->id}}" selected>{{$producto->marca->nombre}}</option>
            @else
            <option value="" selected>Seleccione la marca del producto</option>
            @endif
            @endif
            @foreach ($marcas as $marca)
            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
            @endforeach
            <option value=""><a href="">Agregar marca</a></option>
        </select>
        @error('marca_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="modelo" class="col-md-4 col-form-label text-md-right">Modelo:</label>
    <div class="col-md-6">
        <input id="modelo" type="text" class="form-control @error('modelo') is-invalid @enderror"
            placeholder="Ingrese el modelo del reloj..." name="modelo" value="{{old('modelo', $producto->modelo)}}">
        @error('modelo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripcion:</label>
    <div class="col-md-6">
        <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror"
            placeholder="Ingrese el descripcion del reloj..." name="descripcion" value="{{old('descripcion', $producto->descripcion)}}">
        @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="precio" class="col-md-4 col-form-label text-md-right">Precio:</label>
    <div class="col-md-6">
        <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror"
            placeholder="Ingrese el precio del reloj..." name="precio" value="{{old('precio', $producto->precio)}}">
        @error('precio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="stock" class="col-md-4 col-form-label text-md-right">Stock:</label>
    <div class="col-md-6">
        <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror"
            placeholder="Ingrese el stock del reloj..." name="stock" value="{{old('stock', $producto->stock)}}">
        @error('stock')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="origen" class="col-md-4 col-form-label text-md-right">Origen:</label>
    <div class="col-md-6">
        <input id="origen" type="text" class="form-control @error('origen') is-invalid @enderror"
            placeholder="Ingrese el origen del reloj..." name="origen" value="{{old('origen', $producto->origen)}}">
        @error('origen')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="color" class="col-md-4 col-form-label text-md-right">Color:</label>
    <div class="col-md-6">
        <input id="color" type="text" class="form-control @error('color') is-invalid @enderror"
            placeholder="Ingrese el color del reloj..." name="color" value="{{old('color', $producto->reloj->color)}}">
        @error('color')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="correa" class="col-md-4 col-form-label text-md-right">Correa:</label>
    <div Class="col-md-6">
        <input id="correa" type="text" class="form-control @error('correa') is-invalid @enderror"
            placeholder="Ingrese el correa del reloj..." name="correa" value="{{old('correa', $producto->reloj->correa)}}">
        @error('correa')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="caja" class="col-md-4 col-form-label text-md-right">Caja:</label>
    <div Class="col-md-6">
        <input id="caja" type="text" class="form-control @error('caja') is-invalid @enderror"
            placeholder="Ingrese el caja del reloj..." name="caja" value="{{old('caja', $producto->reloj->material_caja)}}">
        @error('caja')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="marco" class="col-md-4 col-form-label text-md-right">Marco:</label>
    <div Class="col-md-6">
        <input id="marco" type="text" class="form-control @error('marco') is-invalid @enderror"
            placeholder="Ingrese el marco del reloj..." name="marco" value="{{old('marco', $producto->reloj->material_marco)}}">
        @error('marco')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="funciones" class="col-md-4 col-form-label text-md-right">Funciones:</label>
    <div Class="col-md-6">
        <input id="funciones" type="text" class="form-control @error('funciones') is-invalid @enderror"
            placeholder="Ingrese el funciones del reloj..." name="funciones" value="{{old('funciones', $producto->reloj->funciones)}}">
        @error('funciones')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="garantia" class="col-md-4 col-form-label text-md-right">Garantia:</label>
    <div Class="col-md-6">
        <input id="garantia" type="text" class="form-control @error('garantia') is-invalid @enderror"
            placeholder="Ingrese el garantia del reloj..." name="garantia" value="{{old('garantia', $producto->reloj->garantia)}}">
        @error('garantia')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="movimiento" class="col-md-4 col-form-label text-md-right">Movimiento:</label>
    <div Class="col-md-6">
        <input id="movimiento" type="text" class="form-control @error('movimiento') is-invalid @enderror"
            placeholder="Ingrese el movimiento del reloj..." name="movimiento" value="{{old('movimiento', $producto->reloj->movimiento)}}">
        @error('movimiento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="imagen1" class="col-md-4 col-form-label text-md-right">Imagen de frente:</label>
    <div class="col-md-6">
        <input type="file" class="form-control-file" id="imagen1" name="imagen1">
        @error('imagen1')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="imagen2" class="col-md-4 col-form-label text-md-right">Imagen lateral:</label>
    <div class="col-md-6">
        <input type="file" class="form-control-file" id="imagen2" name="imagen2">
        @error('imagen2')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="imagen3" class="col-md-4 col-form-label text-md-right">Imagen trasera:</label>
    <div class="col-md-6">
        <input type="file" class="form-control-file" id="imagen3" name="imagen3">
        @error('imagen3')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-3 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{$btntext}}
        </button>
    </div>
</div>
