<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class CarritoController extends Controller
{
    public function agregar(Request $req){
        $id = $req['id_user'];
        $producto = Producto::find($req['id']);
         \Cart::session($id)->add(array(
            'id' => $producto->id,
            'name' => $producto->modelo,
            'price' => $producto->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $producto
        ));
       
        return redirect(route('mostrarCarrito'));
    }

    public function mostrar(){
        $items = \Cart::session(Auth::user()->id)->getContent();
        
        $vac = compact('items');
        return view('pages.carrito', $vac);
    }

    public function eliminarProducto(Request $req){
        $idProducto = $req['id_eliminar'];
        $idUsuario = $req['id_usuario'];
        \Cart::session($idUsuario)->remove($idProducto);
        return redirect(route('mostrarCarrito'));
    }

    public function actualizarProducto(Request $req){
        $arrayCantidades = $req['cantidad'];
        $arrayId = $req['id-update'];
       foreach ($arrayCantidades as $i => $cantidadProducto) {
        \Cart::session(Auth::user()->id)->update($arrayId[$i], array(
            'quantity' => array(
                'relative' => false,
                'value' => $cantidadProducto
            ),
          ));
       }
       return redirect(route('mostrarCarrito'));
    }
}
