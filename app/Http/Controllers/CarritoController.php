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

    public function checkout(Request $req){
    

        \MercadoPago\SDK::setAccessToken('TEST-7142329171126517-091604-eee588f7f921b80dac32fcb5ac74ec2c-325139190');

    $items = \Cart::session(Auth::user()->id)->getContent();
    
    $productosComprados = [];
foreach($items as $producto) {
    $item = new \MercadoPago\Item();
    $item->id = $producto->id;
    $item->title = $producto->name;
    $item->description = $producto->associatedModel->descripcion;
    $item->quantity = $producto->quantity;
    $item->currency_id = "ARS";
    $item->unit_price = $producto->price;
    $productosComprados[] = $item; 
}



$preference = new \MercadoPago\Preference();
    
    $preference->items = $productosComprados;
    $preference->back_urls = array(
        "success" => route('success'),
        "failure" => route('failure'),
        "pending" => route('pending')
    );
    $preference->auto_return = "approved";
    $preference->save();
    return redirect($preference->init_point);  
    
   
}
}