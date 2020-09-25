<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Reloj;
use App\Http\Requests\ProductoRequest;
use App\Categoria;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    public function list(){
        $productos = Producto::disponibles()->paginate(8);
        $titulo = 'Todos los productos';
        $vac = compact('productos', 'titulo');
        return view('pages.listaProductos', $vac);
    }
    public function listPorCategoria($categoria){
        $titulo = $categoria;
        $productos = Producto::productosCategoria($categoria)->paginate(8);
        
        $vac = compact('productos', 'titulo');
        return view('pages.listaProductos', $vac);
    }
    public function listCampo($campo){
    
        $productos = Producto::novedades()->paginate(8);
        $titulo = $campo;
        $vac = compact('productos', 'titulo');
        return view('pages.listaProductos', $vac);
    }
    public function listOrder($campo, $direccion){
        $productos = Producto::disponibles()->orderBy($campo, $direccion)->paginate(8);
        $titulo = 'Todos los productos';
        $vac = compact('productos', 'titulo');
        return view('pages.listaProductos', $vac);
    }
    public function show($id){
        $producto = Producto::find($id);
        $titulo = $producto->marca->nombre." ".$producto->modelo;
        $vac = compact('producto', 'titulo');
        return view('pages.detalleProducto', $vac);
    }
    public function listAdmin(){
        $productos = Producto::disponibles()->paginate(8);
        $titulo = 'Lista de productos';
        $vac = compact('productos', 'titulo');
        return view('admin.listaProductos', $vac);
    }
    public function createReloj(){
        $producto = new Producto();
        $reloj = new Reloj();
        $producto->reloj = $reloj;
        $vac = compact('producto');
        return view('admin.agregarReloj', $vac);
    }

    public function store(ProductoRequest $req){
        
        $imagen1 = null;
        $imagen2 = null;
        $imagen3 = null;
        if ($req['imagen1'] != null) {
             $imagen1 = basename($req->file("imagen1")->store("public"));
        }
        if ($req['imagen2'] != null) {
            $imagen2 = basename($req->file("imagen2")->store("public"));
        }
        if ($req['imagen3'] != null) {
            $imagen3 = basename($req->file("imagen3")->store("public"));
        }
        $producto = new Producto();
        $producto->nombre_imagen_1 = $imagen1;
        $producto->nombre_imagen_2 = $imagen2;
        $producto->nombre_imagen_3 = $imagen3;
        $producto->marca_id = $req['marca_id'];
        $producto->modelo = $req['modelo'];
        $producto->categoria_id = 1;
        $producto->descripcion = $req['descripcion'];
        $producto->precio = $req['precio'];
        $producto->stock = $req['stock'];
        $producto->origen = $req['origen'];
        $producto->save();
        $reloj = new Reloj();
        $reloj->color = $req['color'];
        $reloj->correa = $req['correa'];
        $reloj->material_caja = $req['caja'];
        $reloj->material_marco = $req['marco'];
        $reloj->funciones = $req['funciones'];
        $reloj->garantia = $req['garantia'];
        $reloj->movimiento = $req['movimiento'];
        $reloj->producto_id = $producto->id;
        $producto->reloj()->save($reloj);
        
        return redirect(route('listaProductosAdmin'));
    }

    public function editarReloj($id){
        $producto = Producto::find($id);
        $vac = compact('producto');
        return view('admin.editarReloj', $vac);
    }



    public function updateReloj(ProductoRequest $req, $id){
        $imagen1 = null;
        $imagen2 = null;
        $imagen3 = null;
        if ($req['imagen1'] != null) {
            $imagen1 = basename($req->file("imagen1")->store("public"));
        }
        if ($req['imagen2'] != null) {
            $imagen2 = basename($req->file("imagen2")->store("public"));
        }
        if ($req['imagen3'] != null) {
            $imagen3 = basename($req->file("imagen3")->store("public"));
        }
        $producto = Producto::find($id);
        $producto->nombre_imagen_1 = $imagen1;
        $producto->nombre_imagen_2 = $imagen2;
        $producto->nombre_imagen_3 = $imagen3;
        $producto->marca_id = $req['marca_id'];
        $producto->modelo = $req['modelo'];
        $producto->categoria_id = 1;
        $producto->descripcion = $req['descripcion'];
        $producto->precio = $req['precio'];
        $producto->stock = $req['stock'];
        $producto->origen = $req['origen'];
        
        $reloj = Reloj::where('producto_id', '=', $id)->first();
        $reloj->color = $req['color'];
        $reloj->color = $req['color'];
        $reloj->correa = $req['correa'];
        $reloj->material_caja = $req['caja'];
        $reloj->material_marco = $req['marco'];
        $reloj->funciones = $req['funciones'];
        $reloj->garantia = $req['garantia'];
        $reloj->movimiento = $req['movimiento'];
        $reloj->producto_id = $producto->id;
        $producto->reloj()->save($reloj);
        $producto->save();
        return redirect(route('listaProductosAdmin'));
    }

    public function destroyReloj(Request $req){
        $producto = Producto::find($req['id']);
        $producto->status = false;
        $producto->save();
        return redirect(route('listaProductosAdmin'));
    }

    public function reestablecerProducto(Request $req){
        $producto = Producto::find($req['id']);
        $producto->status = true;
        $producto->save();
        return redirect(route('listaProductosAdmin'));
    }


    public function listNoDisponiblesAdmin(){
        $productos = Producto::noDisponibles()->paginate(8);
        $titulo = 'Productos no disponibles';
        $vac = compact('productos', 'titulo');
        return view('admin.listaProductos', $vac);
    }

    public function listProductosSinStock(){
        $productos = Producto::sinStock()->paginate(8);
        $titulo = 'Productos sin stock';
        $vac = compact('productos', 'titulo');
        return view('admin.listaProductos', $vac);
    }
    public function crearBusqueda(){
        $titulo = 'Busqueda producto';
        $vac = compact('titulo');
        return view('admin.busquedaProducto', $vac);
    }
    public function resultadosBusqueda(Request $req){
        $titulo = 'Busqueda producto';
        $campo = $req['busqueda'];
        $productos = Producto::select('productos.*')->join("marcas", "marca_id","=", "marcas.id")
        ->where('marcas.nombre', "like", "%$campo%")->orWhere('productos.id', '=', $campo)->orWhere('productos.modelo', 'like', "%$campo%")->paginate(8);
        $vac = compact('titulo', 'productos');
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return view('admin.busquedaProducto', $vac);
            }
        } else {
            return view('pages.listaProductos', $vac);
        }
        
        
    }

}
